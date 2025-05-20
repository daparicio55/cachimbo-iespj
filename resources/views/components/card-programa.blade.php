@props([
    'color' => 'border-gray-700',
])
@php
    $c = match ($color) {
        'red' => 'border-red-700',
        'blue' => 'border-blue-700',
        'green' => 'border-green-700',
        'orange' => 'border-orange-700',
        'purple' => 'border-purple-700',
        'cyan' => 'border-cyan-700',
        'yellow' => 'border-yellow-700',
        default => 'border-gray-700',
    };
@endphp

<div class="relative rounded-xl border-4 {{ $c }} dark:border-neutral-700">
    {{ $slot }}
</div>
