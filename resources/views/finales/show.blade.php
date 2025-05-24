<x-layouts.app title="Resultados Finales">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        {{-- boton para agregar participantes --}}
        <div class="flex justify-end">
            <x-botton-regresar route="{{ route('dashboard.finales.index') }}" />
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
                Resultados Principales
            </h2>
            <x-tabla>
                <x-slot name="header">
                    <tr>
                        <x-tabla-th>Título</x-tabla-th>
                        <x-tabla-th>Programa de Estudios</x-tabla-th>
                        <x-tabla-th>APELLIDOS, Nombres</x-tabla-th>
                        <th>Puntos</th>
                    </tr>
                </x-slot>
                <tr>
                    <td class="px-3 py-2 border">Miss Cachimbo 2025(1er Lugar)</td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['mujeres'][0]['programa'] }}
                    </td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['mujeres'][0]['participante'] }}
                    </td>
                    <td class="text-center">
                        {{ $resultados['mujeres'][0]['suma'] }}
                    </td>
                </tr>
                <tr>
                    <td class="px-3 py-2 border">Miss Cachimbo 2025(1er Lugar)</td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['varones'][0]['programa'] }}
                    </td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['varones'][0]['participante'] }}
                    </td>
                    <td class="text-center">
                        {{ $resultados['varones'][0]['suma'] }}
                    </td>
                </tr>
            </x-tabla>

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
                Distinciones Adicionales (Categoría Miss)
            </h2>
            <x-tabla>
                <x-slot name="header">
                    <tr>
                        <x-tabla-th>Distición</x-tabla-th>
                        <x-tabla-th>Programa de Estudios</x-tabla-th>
                        <x-tabla-th>APELLIDOS, Nombres</x-tabla-th>
                        <th>Puntos  </th>
                    </tr>
                </x-slot>
                <tr>
                    <td class="px-3 py-2 border">Miss Elegancia (2do Lugar)</td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['mujeres'][1]['programa'] }}
                    </td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['mujeres'][1]['participante'] }}
                    </td>
                    <td class="text-center">
                        {{ $resultados['mujeres'][1]['suma'] }}
                    </td>
                </tr>
                <tr>
                    <td class="px-3 py-2 border">Miss Simpatía (3er Lugar)</td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['mujeres'][2]['programa'] }}
                    </td>
                    <td class="px-3 py-2 border">
                        {{ $resultados['mujeres'][2]['participante'] }}
                    </td>
                    <td class="text-center">
                        {{ $resultados['mujeres'][2]['suma'] }}
                    </td>
                </tr>
            </x-tabla>
            <div class="flex justify-end mt-3">
                <form action="{{ route('dashboard.finales.imprimir') }}" method="get">
                    <input type="hidden" name="periodo" value="{{ $periodo->id }}">
                    <x-botton-imprimir />
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <x-session-alert />
    @endpush
</x-layouts.app>
