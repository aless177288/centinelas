<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Confirmado</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-900 text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-slate-800 border border-slate-700 rounded-2xl shadow-2xl text-center overflow-hidden">

        <div class="bg-amber-500 text-slate-950 p-6">
            <h1 class="text-2xl font-extrabold">
                ¡Registro Confirmado!
            </h1>
        </div>

        <div class="p-8 space-y-5">

            <div class="text-5xl">✓</div>

            <p class="text-lg font-semibold">
                Gracias por tu interés en participar.
            </p>

            <p class="text-sm text-slate-300">
                Tu registro ha sido recibido correctamente.
                ¡Te esperamos!
            </p>

            <div class="bg-slate-900 rounded-xl p-4 text-sm space-y-2">
                <p class="text-amber-400 font-bold">
                    Retos y Desafíos del Hombre Cristiano
                </p>
                <p>20 de Noviembre | 7:00 PM</p>
                <p>Salón Vilchis</p>
            </div>

            <a href="{{ route('event.index') }}"
               class="block w-full bg-slate-700 hover:bg-slate-600 text-white font-semibold py-3 rounded-lg text-sm transition">
                Volver al inicio
            </a>

        </div>
    </div>

</body>
</html>