<x-layouts.app title="Calificar Traje">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">
            Sistema de Calificacion MISS y MISTER Cachimbo IES Público Perú Japón
        </h1>
        <h3 class="font-bold text-neutral-900 dark:text-neutral-100 text-center">
            <span class="mt-2 bg-blue-500 text-white text-lg font-semibold rounded px-3 py-2 px-5 w-full text-center">
                {{ $traje->nombre }}
            </span>
        </h3>

        <div class="grid auto-rows-min gap-5 md:grid-cols-3">
            @foreach ($programas as $programa)
            <form action="{{ route('dashboard.calificar.edit',$traje->id) }}" method="get">
                <input type="hidden" name="programa_id" value="{{ $programa->id }}">
                <div class="relative rounded-xl border border-neutral-200 dark:border-neutral-700">
                                        
                    <div class="inset-0 flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center p-4 gap-2">
                            <img src="{{ asset('storage/' . $programa->imagen) }}" alt="{{ $programa->nombre }}" class="h-32 w-32 rounded-full object-cover" />                           
                                <h3 class="text-lg font-bold text-neutral-900 text-center dark:text-neutral-100">
                                    {{ $programa->nombre }}
                                </h3>
                                <button type="submit" class="mt-2 bg-cyan-500 text-white text-sm font-semibold rounded px-4 py-2 text-center">
                                    CALIFICAR
                                </button>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                {{ $programa->descripcion }}
                            </p>
                        </div>
                    </div>

                </div>
            </form>
            @endforeach

            {{-- <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div> --}}
        </div>
        {{-- <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div> --}}
    </div>
</x-layouts.app>
