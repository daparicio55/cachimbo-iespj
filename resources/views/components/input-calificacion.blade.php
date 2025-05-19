@props([
    'name' => null,
    'max' => null,
    'placeholder' => null,
    'value' => null,
])

<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<input type="number" name="{{ $name }}" step="0.1" min=0 max={{ $max }}
    class="text-lg w-1/2 mt-2 border border-neutral-200 dark:border-neutral-700 rounded p-2 inline"
    placeholder="{{ $placeholder }}" required value="{{ $value }}">
