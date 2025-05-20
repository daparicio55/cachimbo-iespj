@props([
    'color' => 'bg-gray-900',
    'text' => 'VARON',
])
@php
    $c = match ($color) {
        'red' => 'bg-red-900',
        'blue' => 'bg-blue-900',
        'green' => 'bg-green-900',
        'orange' => 'bg-orange-900',
        'purple' => 'bg-purple-900',
        'cyan' => 'bg-cyan-900',
        'yellow' => 'bg-yellow-900',
        default => 'bg-gray-900',
    };
@endphp
<span class="border border-neutral-200 text-sm dark:border-neutral-700 rounded-full px-4 py-1 text-sm font-semibold mr-2 {{ $c }} text-white">
    {{ $text }}
</span>