<x-layouts.app title="Calificar Traje">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">
            Sistema de Calificacion MISS y MISTER Cachimbo IES Público Perú Japón
        </h1>
        <h3 class="font-bold text-neutral-900 dark:text-neutral-100">
            Calificacion:
            <span class="mt-2 bg-blue-500 text-white text-sm font-semibold rounded px-3 py-1 w-full text-center">
                {{ $traje->nombre }}
            </span>
        </h3>

        {{-- <div class="grid auto-rows-min gap-4 md:grid-cols-3">
           
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div> --}}
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>