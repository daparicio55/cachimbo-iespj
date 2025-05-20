@props([
    'label' => 'Etiqueta',
    'name' => 'input-text',
    'value' => null,
    'type' => 'text',
])
<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-2">
        {{ $label }}
    </label>
    
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="mt-1 block w-full rounded-md border @error($name) border-red-500 @else border-gray-300 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2" value="{{ old($name,$value) }}">
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>