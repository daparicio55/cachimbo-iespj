<x-layouts.app title="Resultados Finales">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 px-5 ">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-4 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-list-checks-icon lucide-list-checks mr-2">
                    <path d="m3 17 2 2 4-4" />
                    <path d="m3 7 2 2 4-4" />
                    <path d="M13 6h8" />
                    <path d="M13 12h8" />
                    <path d="M13 18h8" />
                </svg>
                Resultados Finales
            </h2>
            <form action="{{ route('dashboard.finales.show') }}" method="get">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
                    <div class="col-span-6">
                        <x-select label="Periodo" name="periodo">
                            @foreach ($periodos as $periodo)
                                <option value="{{ $periodo->id }}" @if(old('periodo') == $periodo->id) selected @endif>{{ $periodo->nombre }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="col-span-6">
                        <x-botton-guardar text="Mostrar" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
