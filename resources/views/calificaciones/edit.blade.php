<x-layouts.app title="Calificar Traje">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div>
            <h2 class="font-bold text-neutral-900 dark:text-neutral-100 text-center text-xl">
                {{ $programa->nombre }}
            </h2>
            <h2 class="font-bold text-neutral-900 dark:text-neutral-100 text-center mt-2">
                <span class="badge bg-neutral-900 text-white rounded-full px-4 py-2 text-xl font-semibold mr-2">
                    {{ $traje->nombre }}
                </span>
            </h2>
        </div>
        <form action="{{ route('dashboard.calificar.update',$traje->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="programa" value="{{ $programa->id }}" hidden>
            
            <div class="grid auto-rows-min gap-5 md:grid-cols-3">
                @foreach ($items_calificacion as $key2 => $item)
                    <div class="relative aspect-video rounded-xl border border-neutral-200 dark:border-neutral-700 mt-2">
                        <h3 class="text-lg font-bold text-neutral-900 text-center dark:text-neutral-100 mt-2 border-b-2 border-neutral-200 dark:border-neutral-700 pb-3">
                            {{ $item['nombre'] }}
                        </h3>
                        <p class="text-sm text-neutral-500 dark:text-neutral-400 text-center mt-2 border-b-2 border-neutral-200 dark:border-neutral-700 pb-3">
                            {{ $item['descripcion'] }}
                        </p>
                        <div class="flex flex-col gap-2">
                            <div class="w-full flex justify-center items-center gap-2">
                                <x-badge-sexo color="blue" text="VARON" />
                                <x-input-calificacion name="calificacion_varon[]" max="{{ $item['puntaje_maximo'] }}" placeholder="Varon" value="{{ $item['puntos_varon'] }}" />
                            </div>
                            <div class="w-full flex justify-center items-center gap-2">
                                <x-badge-sexo color="purple" text="MUJER" />
                                <x-input-calificacion name="calificacion_mujer[]" max="{{ $item['puntaje_maximo'] }}" placeholder="Mujer" value="{{ $item['puntos_mujer'] }}" />
                            </div>
                            <input type="hidden" name="id_item[]" value="{{ $item['id'] }}">
                        </div>
                        
                        <p class="text-sm text-neutral-500 dark:text-neutral-400 text-center mt-2 border-t-2 border-neutral-200 dark:border-neutral-700 py-2 p">
                            Puntaje máximo: {{ $item['puntaje_maximo'] }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-4">
                <x-botton-guardar text="Guardar Calificaciones" />
            </div>
        </form>
    </div>
</x-layouts.app>
