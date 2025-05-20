<x-layouts.app title="Jurados">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        {{-- boton para agregar participantes --}}
        <div class="flex justify-end">
            <x-botton-agregar route="{{ route('dashboard.jurados.create') }}" />
        </div>
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 px-5 ">
            {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-4 mb-4 flex items-center">
                {{-- svg para jurados --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale-icon lucide-scale mr-1"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/></svg>Jurados
            </h2>
            <x-tabla>
                <x-slot name="header">
                    <tr>
                        <x-tabla-th>APELLIDOS, Nombres</x-tabla-th>
                        <x-tabla-th>Email</x-tabla-th>
                        <x-tabla-th>PERIODO</x-tabla-th>
                        <th></th>
                    </tr>
                </x-slot>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-3 py-2">{{ $user->name }}</td>
                        <td class="px-3 py-2">{{ $user->email }}</td>
                        <td class="px-3 py-2">
                            @foreach ($user->periodos as $periodo)
                                <span class="text-xs text-gray-500">
                                    {{ $periodo->nombre }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                </span>
                            @endforeach
                        </td>
                        <td class="py-2">
                            <x-modal-delete route="{{ route('dashboard.jurados.destroy', $user) }}" title="Eliminar Jurado">
                                <p class="text-gray-600 mb-4">
                                    ¿Estás seguro de que deseas eliminar a
                                    <span class="font-semibold">
                                        {{ $user->name }}
                                    </span>?
                                </p>
                            </x-modal-delete>
                        </td>
                    </tr>
                @endforeach
            </x-tabla>
        </div>
    </div>
    @push('scripts')
        <x-session-alert />
    @endpush
</x-layouts.app>
