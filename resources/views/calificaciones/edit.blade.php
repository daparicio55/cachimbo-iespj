<x-layouts.app title="Calificar Traje">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div>
            <h2 class="font-bold text-neutral-900 dark:text-neutral-100 text-center text-xl">
                {{ $programa->nombre }}
            </h2>
            <h2 class="font-bold text-neutral-900 dark:text-neutral-100 text-center mt-2">
                <span class="badge bg-neutral-900 text-white rounded-full px-4 py-2 text-sm font-semibold mr-2">
                    {{ $traje->nombre }}
                </span>
            </h2>
        </div>
        <form action="{{ route('dashboard.calificar.update',$traje->id) }}" method="post">
            @csrf
            @method('PUT')
            @foreach ($items_calificacion as $key1 => $grupo)
            <p class="text-center border p-2 bg-stone-500 border-neutral-200 dark:border-neutral-700 text-white text-lg font-bold rounded">
                {{ $key1 }}
            </p>
            <div class="grid auto-rows-min gap-5 md:grid-cols-3">
                @foreach ($grupo as $key2 => $item)
                    <div class="relative aspect-video rounded-xl border border-neutral-200 dark:border-neutral-700">
                        <h3 class="text-lg font-bold text-neutral-900 text-center dark:text-neutral-100 mt-2 border-b-2 border-neutral-200 dark:border-neutral-700 pb-3">
                            {{ $item['nombre'] }}
                        </h3>
                        <div class="flex flex-col gap-2">
                            <input type="number" name="calificacion_varon[]" class="text-lg w-1/2 mx-auto mt-2 border border-neutral-200 dark:border-neutral-700 rounded p-2" placeholder="Varon" required value="0">
                            <input type="number" name="calificacion_mujer[]" class="text-lg w-1/2 mx-auto mt-2 border border-neutral-200 dark:border-neutral-700 rounded p-2" placeholder="Mujer" required value="0">
                            <input type="hidden" name="id_item[]" value="{{ $item['id'] }}">
                        </div>
                        
                        <p class="text-sm text-neutral-500 dark:text-neutral-400 text-center mt-2 border-t-2 border-neutral-200 dark:border-neutral-700 py-2 p">
                            {{ $item['descripcion'] }}
                            Puntaje máximo: {{ $item['puntaje_maximo'] }}
                        </p>
                    </div>
                @endforeach
            </div>
            @endforeach
            <div class="flex justify-center mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar Calificaciones
                </button>
            </div>
        </form>
    </div>
</x-layouts.app>
