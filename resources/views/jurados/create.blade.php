<x-layouts.app title="Participantes | Agregar">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div class="flex justify-end">
            <x-botton-regresar route="{{ route('dashboard.jurados.index') }}" />
        </div>
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700">
            <form action="{{ route('dashboard.jurados.store') }}" method="POST" class="p-4">
                @csrf
                <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
                    <div class="col-span-3">
                        <x-input-text name="name" label="APELLIDOS, Nombres" />
                    </div>
                    <div class="col-span-3">
                        <x-input-text name="email" label="Email" />
                    </div>
                    <div class="col-span-3">
                        <x-input-text name="password" label="Contraseña" type="password" />
                    </div>
                    <div class="col-span-3">
                        <x-input-text name="password_confirmation" label="Confirmar Contraseña" type="password" />
                    </div>
                    <div class="col-span-2">
                        <x-select label="Periodo" name="periodo">
                            @foreach ($periodos as $periodo)
                                <option value="{{ $periodo->id }}" @if(old('periodo') == $periodo->id) selected @endif>{{ $periodo->nombre }}</option>
                            @endforeach
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