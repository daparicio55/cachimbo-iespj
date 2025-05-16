@props([
    'color' => 'blue',
    'text' => 'VARON',
])
<span class="border border-neutral-200 text-sm dark:border-neutral-700 rounded-full px-4 py-1 text-sm font-semibold mr-2 bg-{{ $color }}-900 text-white">
    {{ $text }}
</span>