<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Administración | Centinelas</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 25px;
            background: #f3f4f6;
            color: #202938;
            font-family: Arial, sans-serif;
        }

        .container { max-width: 1200px; margin: auto; }

        h1 { margin-bottom: 5px; }

        .muted { color: #64748b; }

        .stats {
            display: flex;
            gap: 15px;
            margin: 25px 0;
            flex-wrap: wrap;
        }

        .stat {
            background: white;
            padding: 20px;
            border-radius: 10px;
            flex: 1;
            min-width: 180px;
            box-shadow: 0 2px 8px #0000000d;
        }

        .stat strong {
            display: block;
            font-size: 28px;
            margin-top: 8px;
        }

        .panel {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        input, select, button {
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
        }

        .filters {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        button, .button {
            cursor: pointer;
            background: #1e293b;
            color: white;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .table-wrapper { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th, td {
            padding: 13px 10px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            font-size: 14px;
        }

        th { background: #f8fafc; }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .error { color: #dc2626; }

        .delete {
            margin-top: 8px;
            padding: 10px;
            border: 1px solid #fecaca;
            border-radius: 6px;
        }

        .delete button { background: #b91c1c; }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            body { padding: 12px; }
            .filters > * { width: 100%; }
        }
    </style>
</head>

<body>
<div class="container">

    <h1>Administración de registros</h1>
    <p class="muted">Retos y Desafíos del Hombre Cristiano</p>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="stats">
        <div class="stat">
            Total de participantes
            <strong>{{ $total }}</strong>
        </div>

        <div class="stat">
            Participantes pertenecientes a grupos
            <strong>{{ $conGrupo }}</strong>
        </div>

        <div class="stat">
            Participantes sin grupo
            <strong>{{ $total - $conGrupo }}</strong>
        </div>
    </div>

    <div class="panel">
        <h3>Buscar participantes</h3>

        <form method="GET" action="{{ route('admin.index') }}" class="filters">
            <input
                type="text"
                name="buscar"
                placeholder="Nombre o teléfono"
                value="{{ request('buscar') }}"
            >

            <select name="parroquia">
                <option value="">Todas las parroquias</option>
                @foreach ($parroquias as $parroquia)
                    <option value="{{ $parroquia }}"
                        @selected(request('parroquia') === $parroquia)>
                        {{ $parroquia }}
                    </option>
                @endforeach
            </select>

            <select name="grupo">
                <option value="">Todos</option>
                <option value="si" @selected(request('grupo') === 'si')>
                    Pertenece a un grupo
                </option>
                <option value="no" @selected(request('grupo') === 'no')>
                    No pertenece a un grupo
                </option>
            </select>

            <button type="submit">Buscar</button>
            <a class="button" href="{{ route('admin.index') }}">Limpiar</a>
        </form>
    </div>

    <div class="panel">
        <h3>Participantes registrados</h3>

        <p>
            <a class="button" href="{{ route('admin.export') }}">
                Descargar Excel (.xlsx)
            </a>
        </p>

        <p class="muted">
            Mostrando {{ $participantes->firstItem() ?? 0 }}
            a {{ $participantes->lastItem() ?? 0 }}
            de {{ $participantes->total() }} participantes.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Teléfono</th>
                        <th>Parroquia</th>
                        <th>Pertenece a grupo</th>
                        <th>Grupo</th>
                        <th>Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($participantes as $participante)
                        <tr>
                            <td>{{ $participante->full_name }}</td>
                            <td>{{ $participante->age }}</td>
                            <td>{{ $participante->phone }}</td>
                            <td>{{ $participante->parish ?: 'No especificada' }}</td>
                            <td>{{ $participante->belongs_to_group ? 'Sí' : 'No' }}</td>
                            <td>{{ $participante->group_name ?: '—' }}</td>
                            <td>{{ $participante->created_at?->format('d/m/Y H:i') }}</td>
                            <td>
                                <details>
                                    <summary style="cursor:pointer;color:#b91c1c">
                                        Eliminar
                                    </summary>

                                    <form
                                        class="delete"
                                        method="POST"
                                        action="{{ route('admin.participants.destroy', $participante) }}"
                                        onsubmit="return confirm('¿Confirmas que deseas eliminar este registro? Esta acción no se puede deshacer.');"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <label>
                                            Contraseña de eliminación:
                                            <input
                                                type="password"
                                                name="password"
                                                required
                                                autocomplete="current-password"
                                            >
                                        </label>

                                        @if ($errors->has('password'))
                                            <p class="error">{{ $errors->first('password') }}</p>
                                        @endif

                                        <button type="submit">Confirmar eliminación</button>
                                    </form>
                                </details>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No se encontraron participantes.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <div>
                @if ($participantes->previousPageUrl())
                    <a href="{{ $participantes->previousPageUrl() }}">Anterior</a>
                @endif
            </div>

            <span>Página {{ $participantes->currentPage() }} de {{ $participantes->lastPage() }}</span>

            <div>
                @if ($participantes->nextPageUrl())
                    <a href="{{ $participantes->nextPageUrl() }}">Siguiente</a>
                @endif
            </div>
        </div>
    </div>

</div>
</body>
</html>
