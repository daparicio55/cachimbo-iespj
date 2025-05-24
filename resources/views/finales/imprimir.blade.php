<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        font-family: 'Georgia', serif;
        font-size: 12px;
        color: #222;
        margin: 40px;
        line-height: 1.6;
    }

    header {
        text-align: center;
        margin-bottom: 30px;
    }

    header h1 {
        font-size: 20px;
        text-transform: uppercase;
        margin-bottom: 5px;
        color: #000;
    }

    header h2 {
        font-size: 16px;
        font-style: italic;
        color: #555;
        margin-bottom: 20px;
        margin-left: 30px;
        margin-right: 30px;
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #fef9c3
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
        page-break-inside: avoid;
    }

    thead {
        background-color: #fef9c3; /* Amarillo claro */
    }

    th[colspan] {
        background-color: #f9d109eb; /* Amarillo fuerte */
        font-weight: bold;
        font-size: 10px;
        text-transform: uppercase;
        color: #111;
    }

    th, td {
        border: 1px solid #aaa;
        padding: 5px;
        text-align: center;
        vertical-align: middle;
    }

    tbody tr:nth-child(even) {
        background-color: #fffde7;
    }

    footer {
        margin-top: 100px;
    }

    footer table {
        width: 100%;
        border: none;
        text-align: center;
    }

    footer td {
        padding-top: 40px;
        font-weight: bold;
        border: none;
        font-size: 13px;
        color: #333;
    }

    footer td span {
        border-top: 1px solid #060606;
        padding-top: 5px;
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
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th colspan="4">
                        RESULTADOS PRINCIPALES
                    </th>
                </tr>
                <tr>
                    <th>Título</th>
                    <th>Programa de Estudios</th>
                    <th>Ganador(a)</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MISS Cachimbo {{ $periodo->nombre }} (1er lugar)</td>
                    <td>
                        {{ $resultados['mujeres'][0]['programa'] }}
                    </td>
                    <td>
                        {{ $resultados['mujeres'][0]['participante'] }}
                    </td>
                    <td>
                        {{ $resultados['mujeres'][0]['suma'] }}
                    </td>
                </tr>
                <tr>
                    <td>MISTER Cachimbo {{ $periodo->nombre }} (1er lugar)</td>
                    <td>
                        {{ $resultados['varones'][0]['programa'] }}
                    </td>
                    <td>
                        {{ $resultados['varones'][0]['participante'] }}
                    </td>
                    <td>
                        {{ $resultados['varones'][0]['suma'] }}
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th colspan="4">Disticiones Adicionales (Categoría MISS)</th>
                </tr>
                <tr>
                    <th>Distinción</th>
                    <th>Programa de Estudios</th>
                    <th>Ganadora</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MISS Elegancia (2do lugar)</td>
                    <td>
                        {{ $resultados['mujeres'][1]['programa'] }}
                    </td>
                    <td>
                        {{ $resultados['mujeres'][1]['participante'] }}
                    </td>
                    <td>
                        {{ $resultados['mujeres'][1]['suma'] }}
                    </td>
                </tr>
                <tr>
                    <td>MISS Simpatía (3r lugar)</td>
                    <td>
                        {{ $resultados['mujeres'][2]['programa'] }}
                    </td>
                    <td>
                        {{ $resultados['mujeres'][2]['participante'] }}
                    </td>
                    <td>
                        {{ $resultados['mujeres'][2]['suma'] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <table>
            <tbody>
                <tr>
                    @foreach ($periodo->users as $user)
                        <td>
                            <span>
                                {{ $user->name }}
                            </span>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </footer>
</body>
</html>
