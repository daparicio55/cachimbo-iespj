@props([
    'label' => 'Seleccione una opción',
    'name' => 'select'
])
<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-2">
        {{ $label }}
    </label>
    <select name="{{ $name }}" id="{{ $name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 px-4 py-2">
        <option value="">Seleccione ...</option>
        {{ $slot }}
    </select>
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
