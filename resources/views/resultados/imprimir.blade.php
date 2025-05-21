<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados {{ $periodo->nombre }}</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        font-size: 10px;
        color: #333;
        margin: 10px;
    }

    header h1 {
        font-size: 20px;
        margin-bottom: 5px;
        text-align: center;
        text-transform: uppercase;
    }

    header h2 {
        font-size: 16px;
        margin-bottom: 10px;
        text-align: center;
        border: 1px solid black;
        margin-left: 50px;
        margin-right: 50px;
        padding-top: 7px;
        padding-bottom: 7px;
        background-color: #094fb1;
        color: white;
    }

    header h3 {
        font-size: 14px;
        margin-bottom: 20px;
        text-align: left;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        page-break-inside: auto;
    }

    thead {
        background-color: #e0f2fe; /* azul claro */
    }

    th, td {
        border: 1px solid #999;
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    th {
        font-weight: bold;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tfoot {
        font-weight: bold;
    }

    footer {
        margin-top: 40px;
        font-size: 13px;
    }

    footer p {
        margin: 5px 0;
    }
    .firma {
        padding-top: 35px;
    }
    .text-center {
        text-align: center;
    }
    .text-right {
        text-align: right;
    }
    .text-left {
        text-align: left;
    }

    @media print {
        body {
            margin: 10mm;
        }

        header h1, header h2 {
            font-size: 14px;
        }

        th{
            font-size: 12px;
            padding: 3px;
        }

        td{
            font-size: 12px;
            padding: 3px;
            text-align: left;
        }

        footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
        }
    }
</style>

</head>

<body>
    <header>
        <h1>
            MISS Y MISSTER CACHIMBO {{ $periodo->nombre }} - IDEX Perú Japón
        </h1>
        <h2>
            Anexo 4 - Ficha de consolidado final de calificaciones
        </h2>
        <h3>
            <strong>Nombre del Jurado:</strong> {{ Auth::user()->name }}
        </h3>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Programa de Estudios</th>
                    <th>Categoría</th>
                    <th>APELLIDOS, Nombres</th>
                    @foreach ($trajes as $traje)
                        <th>
                            <span>
                                {{ $traje->nombre }}
                            </span>
                        </th>
                    @endforeach
                    <th>
                        Total
                    </th>
                    <th>
                        Promedio
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td rowspan="2">{{ $dato['programa'] }}</td>
                        {{-- <td class="border">

                        </td> --}}
                        <td>
                            Varon
                        </td>
                        <td>
                            {{ $dato['participantes']['varon']['apellidos'] }},
                            {{ $dato['participantes']['varon']['nombres'] }}
                        </td>
                        @foreach ($dato['participantes']['puntos_varon'] as $punto_traje_varon)
                            <td class="text-center">
                                {{ $punto_traje_varon['puntos'] }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $dato['participantes']['suma_varon'] }}
                        </td>
                        <td class="text-right">
                            {{ $dato['participantes']['promedio_varon'] }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mujer
                        </td>
                        <td>
                            {{ $dato['participantes']['mujer']['apellidos'] }},
                            {{ $dato['participantes']['mujer']['nombres'] }}
                        </td>
                        @foreach ($dato['participantes']['puntos_mujer'] as $punto_traje_mujer)
                            <td class="text-center">
                                {{ $punto_traje_mujer['puntos'] }}
                            </td>
                        @endforeach
                        <td class="text-center">
                            {{ $dato['participantes']['suma_mujer'] }}
                        </td>
                        <td class="text-right">
                            {{ $dato['participantes']['promedio_mujer'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <p>
            <strong>Nota:</strong> La calificación final de cada participante es el promedio de las calificaciones
            obtenidas en cada traje.
        </p>
        <p>
            <strong>Fecha:</strong> {{ now()->format('d/m/Y') }}
        </p>
        <p class="firma">
            <strong>Firma del Jurado:</strong> ________________________
        </p>
    </footer>
</body>
</html>
