<x-layouts.app title="Participantes">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        {{-- boton para agregar participantes --}}
        <div class="flex justify-end">
            <x-botton-agregar route="{{ route('dashboard.participantes.create') }}" />
        </div>
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 px-5 ">
            {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mt-4 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-users-icon lucide-users">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                    <circle cx="9" cy="7" r="4" />
                </svg>
                Participantes
            </h2>
            <x-tabla>
                <x-slot name="header">
                    <tr>
                        <x-tabla-th>APELLIDOS, Nombres</x-tabla-th>
                        <x-tabla-th>PROGRAMA DE ESTUDIOS</x-tabla-th>
                        <x-tabla-th>SEXO</x-tabla-th>
                        <x-tabla-th>PERIODO</x-tabla-th>
                        <th></th>
                    </tr>
                </x-slot>
                @foreach ($participantes as $participante)
                    <tr>
                        <td class="px-3 py-2">{{ $participante->apellidos }}, {{ $participante->nombres }}</td>
                        <td class="px-3 py-2">{{ $participante->programa->nombre }}</td>
                        <td class="px-3 py-2">{{ $participante->sexo }}</td>
                        <td class="px-3 py-2">{{ $participante->periodo->nombre }}</td>
                        <td class="py-2">
                            <x-modal-delete route="{{ route('dashboard.participantes.destroy', $participante) }}" title="Eliminar Participante">
                                <p class="text-gray-600 mb-4">
                                    ¿Estás seguro de que deseas eliminar a
                                    <span class="font-semibold">
                                        {{ $participante->apellidos }}, {{ $participante->nombres }}
                                    </span>?
                                </p>
                            </x-modal-delete>
                        </td>
                    </tr>
                @endforeach
            </x-tabla>
        </div>
    </div>
</x-layouts.app>
