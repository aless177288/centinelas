<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f7f9fc">
    <title>Registro | Retos y Desafíos del Hombre Cristiano</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
body {
    position: relative;
    isolation: isolate;
}

body::before {
    content: "";
    position: fixed;
    inset: 0;
    z-index: -1;
    pointer-events: none;

    background-image: url("{{ asset('images/fondo-evento.png') }}");
    background-size: contain;
    background-position: 29% center;
    background-repeat: no-repeat;

    opacity: 0.5;
}
/* FIN FONDO TRANSPARENTE */
        :root{color-scheme:light;--blue:#064b80;--ink:#103b62;--gold:#b79546;--muted:#5b6878}
        *{box-sizing:border-box}body{margin:0;background:#f7f9fc;color:var(--ink);font-family:Arial,Helvetica,sans-serif;min-height:100vh;display:flex;flex-direction:column}::selection{background:#eadcb9;color:#103b62}
        header{background:#fff!important;border-top:4px solid var(--gold);border-bottom:1px solid #dbe4ed!important;padding:25px 24px!important;text-align:center;box-shadow:none!important}header p{margin:0}header p:first-child{color:var(--blue);font-size:12px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}header p:last-child{color:var(--muted);font-size:11px;margin-top:9px;letter-spacing:.07em}
        main{width:100%;max-width:1160px;margin:auto;padding:60px 28px!important;display:grid;grid-template-columns:minmax(0,1.18fr) minmax(0,1fr);gap:64px;align-items:center}.event-story{position:relative}.event-story> *+*{margin-top:26px}.event-story>div:first-child{display:inline-flex;gap:9px;align-items:center;padding:8px 13px;border:1px solid #e2d5b3;border-radius:99px;background:#f5efdf;color:#876b28;font-size:11px;font-weight:700;letter-spacing:.06em}.event-story>div:first-child>span:first-child{width:6px;height:6px;border-radius:50%;background:var(--gold)}

        h1{font-family:Arial,Helvetica,sans-serif;font-size:clamp(32px,3.8vw,54px)!important;line-height:1.06!important;letter-spacing:-.055em!important;font-weight:800!important;color:var(--blue)!important;margin-bottom:0}
        .title-intro{display:block;font-size:.56em;font-weight:600;letter-spacing:-.025em;line-height:1.35;margin-bottom:9px}
        h1>span:last-child{display:block;color:var(--blue)!important;background:none!important;-webkit-text-fill-color:var(--blue)}

        /* Línea decorativa dorada */
        .title-divider{width:64px;height:3px;background:var(--gold);margin-top:25px;margin-bottom:26px;}

    </style>
</head>

<body class="bg-[#f7f9fc] text-[#103b62] font-sans min-h-screen flex flex-col justify-between selection:bg-[#eadcb9] selection:text-[#103b62]">

    <!-- Encabezado institucional -->
    <header class="w-full bg-[#103b62] border-b border-[#e2d5b3] py-4 px-6 text-center shadow-md">
        <p class="text-xs uppercase tracking-widest text-[#876b28] font-bold">
            Parroquia Sagrados Corazones | Diócesis de Nuevo Laredo
        </p>
        <p class="text-[20px] text-[#5b6878] tracking-wider mt-1">
            Centinelas de San José — Siempre Vigilantes
        </p>
    </header>
    <!-- Contenido principal -->
    <main class="max-w-6xl mx-auto px-4 py-8 md:py-12 w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <!-- Columna izquierda: información del evento -->
        <section class="event-story lg:col-span-7 space-y-6">

            <div class="inline-flex items-center space-x-2 bg-[#f5efdf] border border-[#d8e2ec] text-[#876b28] text-xs font-semibold px-3.5 py-1.5 rounded-full">
                <span class="w-2 h-2 rounded-full bg-[#b79546]"></span>
                <span>Conferencia presencial</span>
            </div>

            <!-- Contenedor Flex para alinear Título e Imagen a la misma altura horizontalmente -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                <h1 class="text-3xl sm:text-5xl font-extrabold text-[#103b62] leading-tight tracking-tight flex-1">
                    <span class="title-intro">Retos y Desafíos del</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#064b80] via-[#064b80] to-[#064b80]">
                        Hombre Cristiano
                    </span>
                </h1>
                <div class="w-40 sm:w-48 flex-shrink-0 flex justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo centinelas de San José" class="w-full h-auto object-contain drop-shadow-sm">
                </div>
            </div>

            <!-- Línea decorativa dorada movida debajo del bloque -->
            <div class="title-divider"></div>

            <p class="text-[#202124] text-base sm:text-lg leading-relaxed font-black">
                Una charla para fortalecer la fe, el carácter y la vocación del hombre de hoy.
                <em class="text-[#876b28] font-normal">
                    "Un Camino Hacia La Santidad".
                </em>
            </p>

            <!-- Información del evento -->
            <div class="event-details bg-gradient-to-br from-[#ffffff] to-[#f0f5fa] border border-[#d8e2ec] rounded-2xl p-6 shadow-xl space-y-4 relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-[#f3f6fa] rounded-full blur-2xl pointer-events-none"></div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3]">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="6" width="16" height="15" rx="2"/><path d="M8 3v6m8-6v6M4 12h16"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Fecha</p>
                            <p class="text-[#103b62] font-bold text-sm">20 de Noviembre</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3]">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Horario</p>
                            <p class="text-[#103b62] font-bold text-sm">7:00 PM a 9:00 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3]">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Ubicación</p>
                            <p class="text-[#103b62] font-bold text-sm">Salón Vilchis</p>
                            <p class="text-xs text-[#5b6878]">Parroquia Sagrados Corazones</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3]">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21v-2a8 8 0 0 1 16 0v2"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Expositor</p>
                            <p class="text-[#103b62] font-bold text-sm">Psic. Miguel Coronado</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#f3f6fa] border border-[#e2d5b3] rounded-xl p-4">
                <p class="text-md text-[#876b28] font-semibold">
                    ¡Tu participación es importante!
                </p>
                <p class="text-md text-[#5b6878] mt-1 leading-relaxed">
                    Registra tus datos para ayudarnos a organizar el encuentro y estimar el número de asistentes.
                </p>
            </div>

        </section>

        <!-- Columna derecha: formulario -->
        <section class="registration lg:col-span-5" aria-labelledby="registration-title">
            <div class="bg-white border border-[#d8e2ec] rounded-3xl p-6 sm:p-8 shadow-2xl relative">
                <div class="text-center mb-6">
                    <div class="inline-block p-2 bg-[#f5efdf] rounded-full text-[#876b28] mb-2 border border-[#e2d5b3]">
                        <span aria-hidden="true" style="font-family:Georgia,serif;font-size:28px;line-height:1">✝</span>
                    </div>
                    <h2 id="registration-title" class="text-xl font-bold text-[#103b62] tracking-wide">
                        <!-- INICIO FECHA CON CONTADOR ANIMADO -->
<p class="text-[#103b62] font-bold text-sm">
    20 de noviembre de 2026
</p>

<div id="fecha-contador" style="display:flex;flex-wrap:wrap;gap:6px;margin-top:10px;justify-content:center;">
</div>

<style>
    #fecha-contador .tiempo-caja {
        min-width:42px;
        padding:7px;
        background:#f5efdf;
        border:1px solid #e2d5b3;
        border-radius:9px;
        text-align:center;
    }

    #fecha-contador .tiempo-numero {
        display:block;
        color:#064b80;
        font-size:20px;
        font-weight:800;
        line-height:1.2;
        font-variant-numeric:tabular-nums;
    }

    #fecha-contador .tiempo-etiqueta {
        display:block;
        margin-top:3px;
        color:#876b28;
        font-size:9px;
    }

    @keyframes cambio-contador {
        from { transform:translateY(-6px); opacity:0.3; }
        to { transform:translateY(0); opacity:1; }
    }

    #fecha-contador .tiempo-numero.animar {
        animation:cambio-contador .3s ease-out;
    }

    @media (prefers-reduced-motion:reduce) {
        #fecha-contador .tiempo-numero.animar {
            animation:none;
        }
    }
</style>

<script>
(function () {
    const contenedor = document.getElementById('fecha-contador');

    // EDITAR FECHA Y HORARIO AQUÍ
    const inicio = new Date('2026-11-20T19:00:00-06:00').getTime();
    const fin = new Date('2026-11-20T21:00:00-06:00').getTime();

    const unidades = ['Días', 'Horas', 'Min', 'Seg'];

    unidades.forEach(function (unidad) {
        const caja = document.createElement('div');
        caja.className = 'tiempo-caja';

        const numero = document.createElement('span');
        numero.className = 'tiempo-numero';
        numero.textContent = '--';

        const etiqueta = document.createElement('span');
        etiqueta.className = 'tiempo-etiqueta';
        etiqueta.textContent = unidad;

        caja.append(numero, etiqueta);
        contenedor.appendChild(caja);
    });

    const numeros = contenedor.querySelectorAll('.tiempo-numero');
    let terminado = false;

    function actualizar() {
        const ahora = Date.now();

        if (ahora >= inicio) {
            const mensaje = ahora >= fin
                ? 'El encuentro ha finalizado'
                : '¡Encuentro en curso!';

            if (contenedor.textContent !== mensaje) {
                contenedor.textContent = mensaje;
            }

            terminado = ahora >= fin;
            return;
        }

        const segundos = Math.floor((inicio - ahora) / 1000);

        const valores = [
            Math.floor(segundos / 86400),
            Math.floor((segundos % 86400) / 3600),
            Math.floor((segundos % 3600) / 60),
            segundos % 60
        ];

        valores.forEach(function (valor, indice) {
            const texto = String(valor).padStart(2, '0');
            const elemento = numeros[indice];

            if (elemento.textContent !== texto) {
                elemento.textContent = texto;
                elemento.classList.remove('animar');
                void elemento.offsetWidth;
                elemento.classList.add('animar');
            }
        });
    }

    actualizar();

    if (!terminado) {
        const intervalo = setInterval(function () {
            actualizar();
            if (terminado) clearInterval(intervalo);
        }, 1000);
    }
})();
</script>
<!-- FIN FECHA CON CONTADOR ANIMADO -->
                    </h2>
                    <p class="text-xs text-[#5b6878] mt-1">
                        Completa tus datos para registrar tu participación.
                    </p>
                </div>

                <!-- Errores generales -->
                @if ($errors->any())
                    <div class="mb-5 bg-red-500/10 border border-red-500/30 rounded-xl p-3">
                        <p class="text-red-800 text-xs font-semibold">
                            Revisa los siguientes datos:
                        </p>
                        <ul class="text-red-800 text-xs mt-2 list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('event.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Nombre completo -->
                    <div>
                        <label for="full_name" class="block text-xs font-semibold text-[#34475a] uppercase tracking-wider mb-1.5">
                            Nombre completo *
                        </label>
                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required maxlength="255" autocomplete="name" placeholder="Ej. Juan Pérez González" class="w-full bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 text-[#103b62] placeholder-[#738093] focus:outline-none focus:border-[#07558f] focus:ring-1 focus:ring-[#07558f] text-sm transition">
                        @error('full_name')
                            <span class="text-red-800 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Edad -->
                    <div>
                        <label for="age" class="block text-xs font-semibold text-[#34475a] uppercase tracking-wider mb-1.5">
                            Edad *
                        </label>
                        <input type="number" name="age" id="age" value="{{ old('age') }}" required min="1" max="120" placeholder="Ej. 35" class="w-full bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 text-[#103b62] placeholder-[#738093] focus:outline-none focus:border-[#07558f] focus:ring-1 focus:ring-[#07558f] text-sm transition">
                        @error('age')
                            <span class="text-red-800 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Parroquia -->
                    <div>
                        <label for="parish" class="block text-xs font-semibold text-[#34475a] uppercase tracking-wider mb-1.5">
                            ¿A qué parroquia perteneces?
                        </label>
                        <input type="text" name="parish" id="parish" value="{{ old('parish') }}" maxlength="255" placeholder="Nombre de tu parroquia (opcional)" class="w-full bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 text-[#103b62] placeholder-[#738093] focus:outline-none focus:border-[#07558f] focus:ring-1 focus:ring-[#07558f] text-sm transition">
                        @error('parish')
                            <span class="text-red-800 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Teléfono -->
                    <div>
                        <label for="phone" class="block text-xs font-semibold text-[#34475a] uppercase tracking-wider mb-1.5">
                            Teléfono / WhatsApp *
                        </label>
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required maxlength="20" autocomplete="tel" placeholder="Ej. 867 000 0000" class="w-full bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 text-[#103b62] placeholder-[#738093] focus:outline-none focus:border-[#07558f] focus:ring-1 focus:ring-[#07558f] text-sm transition">
                        @error('phone')
                            <span class="text-red-800 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pertenencia a un grupo -->
                    <div>
                        <label class="block text-xs font-semibold text-[#34475a] uppercase tracking-wider mb-2">
                            ¿Perteneces a algún grupo? *
                        </label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center gap-2 bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 cursor-pointer hover:border-[#07558f] transition">
                                <input type="radio" name="belongs_to_group" value="1" required @checked(old('belongs_to_group') === '1') class="accent-[#064b80]">
                                <span class="text-sm text-[#103b62]">Sí</span>
                            </label>
                            <label class="flex items-center gap-2 bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 cursor-pointer hover:border-[#07558f] transition">
                                <input type="radio" name="belongs_to_group" value="0" required @checked(old('belongs_to_group') === '0') class="accent-[#064b80]">
                                <span class="text-sm text-[#103b62]">No</span>
                            </label>
                        </div>
                        @error('belongs_to_group')
                            <span class="text-red-800 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Nombre del grupo: visible solamente si responde Sí -->
                    <div id="group-fields" class="hidden">
                        <label for="group_name" class="block text-xs font-semibold text-[#34475a] uppercase tracking-wider mb-1.5">
                            ¿A qué grupo perteneces? *
                        </label>
                        <input type="text" name="group_name" id="group_name" value="{{ old('group_name') }}" maxlength="255" placeholder="Nombre de tu grupo" class="w-full bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 text-[#103b62] placeholder-[#738093] focus:outline-none focus:border-[#07558f] focus:ring-1 focus:ring-[#07558f] text-sm transition">
                        @error('group_name')
                            <span class="text-red-800 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Aviso de privacidad -->
                    <p class="text-[11px] text-[#617083] leading-relaxed">
                        Tus datos serán utilizados únicamente para la organización y seguimiento de este encuentro.
                    </p>

                    <!-- Botón -->
                    <button type="submit" class="w-full bg-gradient-to-r from-[#064b80] via-[#064b80] to-[#064b80] hover:from-[#033b67] hover:to-[#033b67] text-white font-extrabold py-3.5 rounded-xl shadow-lg shadow-amber-500/10 transition-all duration-200 text-sm uppercase tracking-wider mt-2">
                        Confirmar mi Registro
                    </button>
                </form>
            </div>
        </section>

    </main>

    <!-- Footer institucional -->
    <footer class="text-center py-6 text-xs text-[#5b6878] border-t border-[#dbe4ed] bg-[#ffffff]">
        <p class="font-semibold text-[#34475a]">
            Carmelitas de San José — Siempre Fieles
        </p>
        <p class="text-[11px] text-[#617083] mt-1">
            Parroquia Sagrados Corazones © {{ date('Y') }}
        </p>
    </footer>

    <!-- Control del campo condicional -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const groupFields = document.getElementById('group-fields');
            const groupName = document.getElementById('group_name');
            const groupRadios = document.querySelectorAll('input[name="belongs_to_group"]');

            function updateGroupFields() {
                const selected = document.querySelector('input[name="belongs_to_group"]:checked');
                const belongsToGroup = selected && selected.value === '1';

                groupFields.classList.toggle('hidden', !belongsToGroup);
                groupName.required = Boolean(belongsToGroup);

                if (!belongsToGroup) {
                    groupName.value = '';
                }
            }

            groupRadios.forEach(function (radio) {
                radio.addEventListener('change', updateGroupFields);
            });

            updateGroupFields();
        });
    </script>
    <!-- INICIO SCRIPT CONTADOR -->
<script>
(function () {
    // EDITAR FECHA Y HORARIO AQUÍ.
    // -06:00 fija la hora del evento independientemente del visitante.
    const inicio = new Date('2026-11-20T19:00:00-06:00').getTime();
    const fin = new Date('2026-11-20T21:00:00-06:00').getTime();

    const diasElemento = document.getElementById('contador-dias');
    const horasElemento = document.getElementById('contador-horas');
    const estadoElemento = document.getElementById('contador-estado');

    function actualizarContador() {
        const ahora = Date.now();
        const restante = Math.max(0, inicio - ahora);

        const dias = Math.floor(restante / 86400000);
        const horas = Math.floor((restante % 86400000) / 3600000);

        diasElemento.textContent = String(dias).padStart(2, '0');
        horasElemento.textContent = String(horas).padStart(2, '0');

        if (ahora >= fin) {
            estadoElemento.textContent = 'El encuentro ha finalizado.';
        } else if (ahora >= inicio) {
            estadoElemento.textContent = '¡El encuentro está en curso!';
        } else if (restante < 3600000) {
            estadoElemento.textContent = '¡Falta menos de una hora!';
        }
    }

    actualizarContador();
    setInterval(actualizarContador, 1000);
})();
</script>
<!-- FIN SCRIPT CONTADOR -->
</body>
</html>