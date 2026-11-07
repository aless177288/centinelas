<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\RegistrationExcelExport;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Registration::query();

        if ($request->filled('buscar')) {
            $buscar = $request->input('buscar');

            $query->where(function ($q) use ($buscar) {
                $q->where('full_name', 'like', "%{$buscar}%")
                    ->orWhere('phone', 'like', "%{$buscar}%");
            });
        }

        if ($request->filled('parroquia')) {
            $query->where('parish', $request->input('parroquia'));
        }

        if ($request->filled('grupo')) {
            $query->where(
                'belongs_to_group',
                $request->input('grupo') === 'si'
            );
        }

        $participantes = $query
            ->orderByDesc('created_at')
            ->paginate(20)
            ->withQueryString();

        return view('admin.index', [
            'participantes' => $participantes,
            'total' => Registration::count(),
            'conGrupo' => Registration::where('belongs_to_group', true)->count(),
            'parroquias' => Registration::whereNotNull('parish')
                ->where('parish', '!=', '')
                ->distinct()
                ->orderBy('parish')
                ->pluck('parish'),
        ]);
    }


    public function export(RegistrationExcelExport $exporter)
    {
        return $exporter->download();
    }

    public function destroy(Request $request, Registration $registration)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ], [
            'password.required' => 'Debes ingresar la contraseña.',
        ]);

        $passwordHash = config('centinelas.delete_password_hash');

        if (
            empty($passwordHash) ||
            !Hash::check($request->input('password'), $passwordHash)
        ) {
            return back()->withErrors([
                'password' => 'La contraseña es incorrecta.',
            ]);
        }

        $registration->delete();

        return redirect()
            ->route('admin.index')
            ->with('success', 'El participante fue eliminado correctamente.');
    }
}
