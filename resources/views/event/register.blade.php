<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f7f9fc">
  
@php
    $seoUrl = 'https://centinelasdesanjose.online';
    $seoTitle = 'Retos y Desafíos del Hombre Cristiano en Nuevo Laredo | Centinelas de San José';
    $seoDescription = 'Conferencia de Centinelas de San José en Nuevo Laredo: 20 de noviembre de 2026, de 19:00 a 21:00, en el Salón Vilchis. Expositor: Psic. Miguel Coronado.';
    $seoImage = $seoUrl . '/images/portada-evento.jpg';

    $eventSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Event',
        'name' => 'Retos y Desafíos del Hombre Cristiano',
        'description' => $seoDescription,
        'url' => $seoUrl,
        'startDate' => '2026-11-20T19:00:00-06:00',
        'endDate' => '2026-11-20T21:00:00-06:00',
        'eventAttendanceMode' => 'https://schema.org/OfflineEventAttendanceMode',
        'image' => [$seoImage],

        'location' => [
            '@type' => 'Place',
            'name' => 'Salón Vilchis, Parroquia Sagrados Corazones',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'C. Perú 3115, Juárez',
                'addressLocality' => 'Nuevo Laredo',
                'addressRegion' => 'Tamaulipas',
                'postalCode' => '88209',
                'addressCountry' => 'MX',
            ],
        ],

        'organizer' => [
            '@type' => 'Organization',
            'name' => 'Centinelas de San José',
            'url' => $seoUrl,
        ],

        'performer' => [
            '@type' => 'Person',
            'name' => 'Psic. Miguel Coronado',
        ],
    ];
@endphp



    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $seoUrl }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="Centinelas de San José">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ $seoUrl }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:image:secure_url" content="{{ $seoImage }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Conferencia Retos y Desafíos del Hombre Cristiano, Nuevo Laredo, 20 de noviembre de 2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">
    <script type="application/ld+json">{!! json_encode($eventSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            position: relative;
            isolation: isolate;
            margin: 0;
            background: #f7f9fc;
            color: #103b62;
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            background-image: url("{{ asset('images/fondo-evento.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.15;
        }
        :root {
            --blue: #064b80;
            --ink: #103b62;
            --gold: #b79546;
            --muted: #5b6878;
        }
        * { box-sizing: border-box; }
        ::selection { background: #eadcb9; color: #103b62; }
        header {
            background: #fff !important;
            border-top: 4px solid var(--gold);
            border-bottom: 1px solid #dbe4ed !important;
            padding: 20px 16px !important;
            text-align: center;
        }
        header p { margin: 0; }
        header p:first-child { color: var(--blue); font-size: 11px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; }
        header p:last-child { color: var(--muted); font-size: 11px; margin-top: 6px; letter-spacing: .05em; }
        .title-divider {
            width: 64px;
            height: 3px;
            background: var(--gold);
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-[#f7f9fc] text-[#103b62] font-sans min-h-screen flex flex-col justify-between">
    <!-- Encabezado institucional -->
    <header class="w-full bg-white border-b border-[#e2d5b3] py-4 px-4 text-center shadow-sm">
        <p class="text-xs uppercase tracking-widest text-[#876b28] font-bold">
            Parroquia Sagrados Corazones | Diócesis de Nuevo Laredo
        </p>
        <p class="text-sm sm:text-base text-[#5b6878] tracking-wider mt-1">
            Centinelas de San José — Siempre Vigilantes
        </p>
    </header>
    <!-- Contenido principal -->
    <main class="max-w-6xl mx-auto px-4 py-8 w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <!-- Columna izquierda: información del evento -->
        <section class="lg:col-span-7 space-y-6">
            <div class="inline-flex items-center space-x-2 bg-[#f5efdf] border border-[#d8e2ec] text-[#876b28] text-xs font-semibold px-3.5 py-1.5 rounded-full">
                <span class="w-2 h-2 rounded-full bg-[#b79546]"></span>
                <span>Conferencia presencial</span>
            </div>
            <!-- Contenedor Flex para título e imagen -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                <h1 class="text-3xl sm:text-5xl font-extrabold text-[#103b62] leading-tight tracking-tight flex-1 m-0">
                    <span class="block text-lg sm:text-2xl font-semibold tracking-normal text-[#064b80] mb-2">Retos y Desafíos del</span>
                    <span class="text-[#064b80]">Hombre Cristiano</span>
                </h1>
                <div class="w-32 sm:w-48 flex-shrink-0 self-center sm:self-auto flex justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo de Centinelas de San José, Nuevo Laredo" class="w-full h-auto object-contain drop-shadow-sm">
                </div>
            </div>
            <!-- Línea decorativa dorada -->
            <div class="title-divider"></div>
            <p class="text-[#202124] text-base sm:text-lg leading-relaxed font-semibold">
                Una charla para fortalecer la fe, el carácter y la vocación del hombre de hoy.
                <em class="text-[#876b28] font-normal block mt-1">
                    "Un Camino Hacia La Santidad".
                </em>
            </p>
            <!-- Información del evento -->
<h2 class="text-xl font-bold text-[#064b80]">Detalles de la conferencia en Nuevo Laredo</h2>
            <div class="bg-gradient-to-br from-white to-[#f0f5fa] border border-[#d8e2ec] rounded-2xl p-5 sm:p-6 shadow-md space-y-4 relative overflow-hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3] flex-shrink-0">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="6" width="16" height="15" rx="2"/><path d="M8 3v6m8-6v6M4 12h16"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Fecha</p>
                            <p class="text-[#103b62] font-bold text-sm">20 de noviembre de 2026</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3] flex-shrink-0">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Horario</p>
                            <p class="text-[#103b62] font-bold text-sm">7:00 PM a 9:00 PM</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3] flex-shrink-0">
                            <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-[#5b6878] uppercase tracking-wider font-semibold">Ubicación</p>
                            <p class="text-[#103b62] font-bold text-sm">Salón Vilchis</p>
                            <p class="text-xs text-[#5b6878]">Parroquia Sagrados Corazones · Nuevo Laredo, Tamaulipas</p>
                            <p class="text-xs text-[#5b6878] mt-1">C. Perú 3115, Col. Juárez, C.P. 88209, Nuevo Laredo, Tamaulipas.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="p-2.5 bg-[#f5efdf] rounded-xl text-[#876b28] border border-[#e2d5b3] flex-shrink-0">
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
                <p class="text-sm md:text-md text-[#876b28] font-semibold">
                    ¡Tu participación es importante!
                </p>
                <p class="text-xs md:text-sm text-[#5b6878] mt-1 leading-relaxed">
                    Registra tus datos para ayudarnos a organizar el encuentro y estimar el número de asistentes.
                </p>
            </div>
        </section>
        <!-- Columna derecha: formulario -->
        <section class="lg:col-span-5 w-full">
            <div class="bg-white border border-[#d8e2ec] rounded-3xl p-6 sm:p-8 shadow-xl relative">
                <div class="text-center mb-6">
                    <div class="inline-block p-2 bg-[#f5efdf] rounded-full text-[#876b28] mb-2 border border-[#e2d5b3]">
                        <span aria-hidden="true" style="font-family:Georgia,serif;font-size:24px;line-height:1">✝</span>
                    </div>
                    <h2 class="text-[#103b62] font-bold text-sm">
Registro a la conferencia
                    </h2>
                    <!-- Contador Animado -->
                    <div id="fecha-contador" class="flex flex-wrap gap-2 mt-3 justify-center"></div>
                    <p class="text-xs text-[#5b6878] mt-3">
                        Completa tus datos para registrar tu participación.
                    </p>
                </div>
                <!-- Errores generales -->
                @if ($errors->any())
                    <div class="mb-5 bg-red-500/10 border border-red-500/30 rounded-xl p-3">
                        <p class="text-red-800 text-xs font-semibold">Revisa los siguientes datos:</p>
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
                            <label class="flex items-center justify-center gap-2 bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 cursor-pointer hover:border-[#07558f] transition">
                                <input type="radio" name="belongs_to_group" value="1" required @checked(old('belongs_to_group') === '1') class="accent-[#064b80]">
                                <span class="text-sm text-[#103b62]">Sí</span>
                            </label>
                            <label class="flex items-center justify-center gap-2 bg-[#f9fbfd] border border-[#cad6e1] rounded-xl px-4 py-3 cursor-pointer hover:border-[#07558f] transition">
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
                    <p class="text-[11px] text-[#617083] leading-relaxed pt-1">
                        Tus datos serán utilizados únicamente para la organización y seguimiento de este encuentro.
                    </p>
                    <!-- Botón -->
                    <button type="submit" class="w-full bg-[#064b80] hover:bg-[#033b67] text-white font-extrabold py-3.5 rounded-xl shadow-lg transition-all duration-200 text-sm uppercase tracking-wider mt-2 cursor-pointer">
                        Confirmar mi Registro
                    </button>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer institucional -->
    <footer class="text-center py-6 text-xs text-[#5b6878] border-t border-[#dbe4ed] bg-white">
        <p class="font-semibold text-[#34475a]">
            Centinelas de San José — Siempre Vigilantes
        </p>
        <p class="text-[11px] text-[#617083] mt-1">
            Parroquia Sagrados Corazones © {{ date('Y') }}
        </p>
    </footer>
    <!-- Estilos del contador -->
    <style>
        #fecha-contador .tiempo-caja {
            min-width: 42px;
            padding: 6px 8px;
            background: #f5efdf;
            border: 1px solid #e2d5b3;
            border-radius: 9px;
            text-align: center;
        }
        #fecha-contador .tiempo-numero {
            display: block;
            color: #064b80;
            font-size: 18px;
            font-weight: 800;
            line-height: 1.2;
            font-variant-numeric: tabular-nums;
        }
        #fecha-contador .tiempo-etiqueta {
            display: block;
            margin-top: 2px;
            color: #876b28;
            font-size: 9px;
            text-transform: uppercase;
        }
    </style>
    <!-- Scripts de interactividad y contador -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Control del campo condicional de grupos
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
            // Script del contador regresivo optimizado
            const contenedor = document.getElementById('fecha-contador');
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
                        contenedor.style.padding = '10px';
                        contenedor.style.fontWeight = 'bold';
                        contenedor.style.color = '#064b80';
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
                    if (numeros[indice] && numeros[indice].textContent !== texto) {
                        numeros[indice].textContent = texto;
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
        });
    </script>
</body>
</html>