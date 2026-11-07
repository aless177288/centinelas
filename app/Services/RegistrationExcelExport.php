<?php

namespace App\Services;

use App\Models\Registration;
use ZipArchive;
use RuntimeException;

class RegistrationExcelExport
{
    public function download()
    {
        if (!class_exists(ZipArchive::class)) {
            throw new RuntimeException('La extensión ZIP de PHP no está disponible.');
        }

        $participantes = Registration::query()
            ->orderBy('created_at')
            ->get();

        $headers = [
            'Nombre completo',
            'Edad',
            'Teléfono',
            'Parroquia',
            'Pertenece a grupo',
            'Nombre del grupo',
            'Correo electrónico',
            'Fecha de registro',
        ];

        $rows = [$headers];

        foreach ($participantes as $p) {
            $rows[] = [
                $p->full_name,
                $p->age,
                $p->phone,
                $p->parish,
                $p->belongs_to_group ? 'Sí' : 'No',
                $p->group_name,
                $p->email,
                $p->created_at?->format('d/m/Y H:i:s'),
            ];
        }

        $xmlRows = '';

        foreach ($rows as $rowIndex => $row) {
            $xmlRows .= '<row r="' . ($rowIndex + 1) . '">';

            foreach (array_values($row) as $columnIndex => $value) {
                $column = $this->columnName($columnIndex + 1);
                $cell = $column . ($rowIndex + 1);

                if ($rowIndex > 0 && $columnIndex === 1 && is_numeric($value)) {
                    $xmlRows .= '<c r="' . $cell . '" t="n"><v>' . (int) $value . '</v></c>';
                } else {
                    $value = htmlspecialchars(
                        (string) ($value ?? ''),
                        ENT_XML1 | ENT_QUOTES,
                        'UTF-8'
                    );

                    $xmlRows .= '<c r="' . $cell . '" t="inlineStr"><is><t xml:space="preserve">' .
                        $value .
                        '</t></is></c>';
                }
            }

            $xmlRows .= '</row>';
        }

        $sheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
            '<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main">' .
            '<sheetData>' . $xmlRows . '</sheetData></worksheet>';

        $files = [
            '[Content_Types].xml' =>
                '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
                '<Types xmlns="http://schemas.openxmlformats.org/package/2006/content-types">' .
                '<Default Extension="rels" ContentType="application/vnd.openxmlformats-package.relationships+xml"/>' .
                '<Default Extension="xml" ContentType="application/xml"/>' .
                '<Override PartName="/xl/workbook.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml"/>' .
                '<Override PartName="/xl/worksheets/sheet1.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml"/>' .
                '</Types>',

            '_rels/.rels' =>
                '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
                '<Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships">' .
                '<Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/officeDocument" Target="xl/workbook.xml"/>' .
                '</Relationships>',

            'xl/workbook.xml' =>
                '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
                '<workbook xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships">' .
                '<sheets><sheet name="Participantes" sheetId="1" r:id="rId1"/></sheets></workbook>',

            'xl/_rels/workbook.xml.rels' =>
                '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
                '<Relationships xmlns="http://schemas.openxmlformats.org/package/2006/relationships">' .
                '<Relationship Id="rId1" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/worksheet" Target="worksheets/sheet1.xml"/>' .
                '</Relationships>',

            'xl/worksheets/sheet1.xml' => $sheet,
        ];

        $path = tempnam(sys_get_temp_dir(), 'centinelas_');

        if ($path === false) {
            throw new RuntimeException('No se pudo crear el archivo temporal.');
        }

        $zip = new ZipArchive();

        if ($zip->open($path, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            @unlink($path);
            throw new RuntimeException('No se pudo generar el archivo Excel.');
        }

        foreach ($files as $name => $content) {
            $zip->addFromString($name, $content);
        }

        $zip->close();

        return response()->download(
            $path,
            'participantes_centinelas_' . date('Y-m-d') . '.xlsx',
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ]
        )->deleteFileAfterSend(true);
    }

    private function columnName(int $number): string
    {
        $name = '';

        while ($number > 0) {
            $number--;
            $name = chr(65 + ($number % 26)) . $name;
            $number = intdiv($number, 26);
        }

        return $name;
    }
}
