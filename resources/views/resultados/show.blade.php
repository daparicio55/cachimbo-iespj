<x-layouts.app title="Consolidado">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div class="flex justify-end">
            <x-botton-regresar route="{{ route('dashboard.resultados.index') }}" />
        </div>
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 px-5 ">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-4 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-list-ordered-icon lucide-list-ordered mr-2">
                    <path d="M10 12h11" />
                    <path d="M10 18h11" />
                    <path d="M10 6h11" />
                    <path d="M4 10h2" />
                    <path d="M4 6h1v4" />
                    <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1" />
                </svg>
                Ficha de consolidado final de calificaciones
            </h2>
            <x-tabla>
                <x-slot name="header">
                    <tr>
                        <x-tabla-th>Programa de Estudios</x-tabla-th>
                        <x-tabla-th>Categoría</x-tabla-th>
                        <x-tabla-th>APELLIDOS, Nombres</x-tabla-th>
                        @foreach ($trajes as $traje)
                            <th class="px-3">
                                <span class="text-sm">
                                    {{ $traje->nombre }}
                                </span>
                            </th>
                        @endforeach
                        <th class="text-sm px-4">
                            Total
                        </th>
                        <th class="text-sm px-1">
                            Promedio
                        </th>
                    </tr>
                </x-slot>
                @foreach ($datos as $dato)
                    <tr>
                        <td class="px-3 py-2 border" rowspan="2">{{ $dato['programa'] }}</td>
                        <td class="px-3 py-2">
                            Varon
                        </td>
                        <td>
                            {{ $dato['participantes']['varon']['apellidos'] }},
                            {{ $dato['participantes']['varon']['nombres'] }}
                        </td>
                        @foreach ($dato['participantes']['puntos_varon'] as $punto_traje_varon)
                            <td class="text-center border">
                                {{ $punto_traje_varon['puntos'] }}
                            </td>
                        @endforeach
                        <td class="text-center border">
                            {{ $dato['participantes']['suma_varon'] }}
                        </td>
                        <td class="text-right border pr-2">
                            {{ $dato['participantes']['promedio_varon'] }}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2">
                            Mujer
                        </td>
                        <td>
                            {{ $dato['participantes']['mujer']['apellidos'] }},
                            {{ $dato['participantes']['mujer']['nombres'] }}
                        </td>
                        @foreach ($dato['participantes']['puntos_mujer'] as $punto_traje_mujer)
                            <td class="text-center border">
                                {{ $punto_traje_mujer['puntos'] }}
                            </td>
                        @endforeach
                        <td class="text-center border">
                            {{ $dato['participantes']['suma_mujer'] }}
                        </td>
                        <td class="text-right border pr-2">
                            {{ $dato['participantes']['promedio_mujer'] }}
                        </td>
                    </tr>
                @endforeach
                <x-slot name="footer">
                    <tr>
                        <td colspan="100" class="px-4 py-2 text-right">
                            <form action="{{ route('dashboard.resultados.imprimir') }}" method="get">
                                <input type="hidden" name="periodo" value="{{ $periodo }}">
                                <x-botton-imprimir />
                            </form>
                        </td>
                    </tr>
                </x-slot>
            </x-tabla>
        </div>
    </div>
    @push('scripts')
        <x-session-alert />
    @endpush
</x-layouts.app>
