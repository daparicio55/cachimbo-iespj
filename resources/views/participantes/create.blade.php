<x-layouts.app title="Participantes | Agregar">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div class="flex justify-end">
            <x-botton-regresar route="{{ route('dashboard.participantes.index') }}" />
            @if ($errors->any())
                <div class="mb-4 rounded-md bg-red-50 p-4 border border-red-300">
                    <h2 class="text-red-800 font-semibold mb-2">Se encontraron los siguientes errores:</h2>
                    <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700">
            <form action="{{ route('dashboard.participantes.store') }}" method="POST" class="p-4">
                @csrf
                <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
                    <div class="col-span-3">
                        <x-input-text name="nombres" label="Nombre" />
                    </div>
                    <div class="col-span-3">
                        <x-input-text name="apellidos" label="Apellidos" />
                    </div>
                    <div class="col-span-4">
                        <x-select label="Programa de Estudios" name="programa">
                            @foreach ($programas as $programa)
                                <option value="{{ $programa->id }}" @if(old('programa') == $programa->id) selected @endif>{{ $programa->nombre }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="col-span-1">
                        <x-select label="Periodo" name="periodo">
                            @foreach ($periodos as $periodo)
                                <option value="{{ $periodo->id }}" @if(old('periodo') == $periodo->id) selected @endif>{{ $periodo->nombre }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="col-span-1">
                        <x-select label="Sexo" name="sexo">
                            <option value="Varon" @if(old('sexo') == 'Varon') selected @endif>Varon</option>
                            <option value="Mujer" @if(old('sexo') == 'Mujer') selected @endif>Mujer</option>
                        </x-select>
                    </div>
                </div>
                <div class="mt-4">
                    <x-botton-guardar />
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>