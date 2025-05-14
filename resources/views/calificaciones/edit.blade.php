<x-layouts.app title="Calificar Traje">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">
            Sistema de Calificacion MISS y MISTER Cachimbo IES Público Perú Japón
        </h1>
        <h3 class="font-bold text-neutral-900 dark:text-neutral-100 text-center">
            <span class="mt-2 bg-stone-500 text-white text-lg font-semibold rounded px-3 py-2 px-5 w-full text-center">
                {{ $traje->nombre }} - {{ $programa->nombre }}
            </span>
        </h3>
        
            @foreach ($items_calificacion as $key1 => $grupo)
            <p class="text-center border p-2 bg-stone-500 border-neutral-200 dark:border-neutral-700 text-white text-lg font-bold rounded">
                {{ $key1 }}
            </p>
            <div class="grid auto-rows-min gap-5 md:grid-cols-3">
                @foreach ($grupo as $key2 => $item)
                    <div class="relative aspect-video rounded-xl border border-neutral-200 dark:border-neutral-700">
                        <h3 class="text-lg font-bold text-neutral-900 text-center dark:text-neutral-100 mt-2">
                            {{ $item['nombre'] }}
                        </h3>
                        <input type="text" name="" id="" class="w-1/2 mx-auto mt-2 border border-neutral-200 dark:border-neutral-700 rounded p-2" placeholder="Varon">
                        <input type="text" name="" id="" class="w-1/2 mx-auto mt-2 border border-neutral-200 dark:border-neutral-700 rounded p-2" placeholder="Mujer">
                        <p class="text-sm text-neutral-500 dark:text-neutral-400">
                            {{ $item['descripcion'] }}
                            Puntaje máximo: {{ $item['puntaje_maximo'] }}
                        </p>
                    </div>
                @endforeach
            </div>
            @endforeach

            {{-- <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div> --}}
        </div>

    </div>
</x-layouts.app>
