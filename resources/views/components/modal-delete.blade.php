@props([
    'route' => null,
    'title' => null,
])
<div x-data="{ open: false }">
    {{-- botton para abrir el modal --}}
    <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition"
        title="Eliminar Participante" x-on:click="open = true">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-trash2-icon lucide-trash-2">
            <path d="M3 6h18" />
            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
            <line x1="10" x2="10" y1="11" y2="17" />
            <line x1="14" x2="14" y1="11" y2="17" />
        </svg>
    </button>
    {{-- modal --}}
    <div x-show="open"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/40"
        x-transition.opacity.duration.300ms>
        <div x-on:click.away="open = false"
            class="bg-white rounded-lg shadow-lg w-full max-w-md p-6" x-transition>
            <h2 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-gray-300">
                {{ $title }}
            </h2>
            {{ $slot }}
            <div class="flex justify-end gap-2">
                <button x-on:click="open = false"
                    class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
                    Cancelar
                </button>
                <form action="{{ $route }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>