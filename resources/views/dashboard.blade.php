<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-sistema-header />
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            
            @foreach ($trajes as $traje)
                <a href="{{ route('dashboard.calificar.index', $traje->id) }}" class="block">
                    <div class="relative min-h-110 rounded-xl border border-neutral-200 dark:border-neutral-700">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop>
                            <source src="{{ asset($traje->video_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="text-center p-5 text-lg bg-gray-800 text-white dark:bg-neutral-800">
                        {{ Str::upper($traje->nombre) }}
                    </div>
                </a>

            @endforeach
        </div>
    </div>
</x-layouts.app>
