<x-layouts.app title="Calificar Traje">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <h3 class="font-bold text-neutral-900 dark:text-neutral-100 text-center">
            <span class="mt-2 bg-gray-500 text-white text-2xl font-semibold rounded px-5 py-2 px-5 w-full text-center">
                {{ Str::upper($traje->nombre) }}
            </span>
        </h3>
        <div class="grid auto-rows-min gap-5 md:grid-cols-3">
            <div class="col-span-3">
                <x-botton-regresar route="{{ route('dashboard') }}" text="Regresar" title="Regresar a la lista de trajes" />
            </div>
            @foreach ($programas as $programa)
            <form action="{{ route('dashboard.calificar.edit',$traje->id) }}" method="get">
                <input type="hidden" name="programa_id" value="{{ $programa->id }}">
                <div class="relative rounded-xl border-4 border-{{ $programa->color }}-700 dark:border-neutral-700">
                                        
                    <div class="inset-0 flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center p-4 gap-2">
                            <img src="{{ asset($programa->url_path) }}" alt="{{ $programa->nombre }}" class="h-32 w-32 rounded object-cover" />                           
                                <h3 class="text-lg font-bold text-neutral-900 text-center dark:text-neutral-100">
                                    {{ $programa->nombre }}
                                </h3>
                                <button type="submit" class="mt-2 bg-gray-500 text-white text-sm font-semibold rounded px-4 py-2 text-center">
                                    CALIFICAR
                                </button>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400 font-bold">
                                {{ $programa->descripcion }}
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    @push('scripts')
        <x-session-alert />
    @endpush
</x-layouts.app>