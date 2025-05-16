@props([
    'route',
    'text' => 'Agregar',
    'title' => 'Agregar Participante',
])
<div>
    <a href="{{ $route }}" class="bg-blue-500 text-white px-5 py-3 rounded-md" title="{{ $title }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus inline">
            <path d="M5 12h14"/><path d="M12 5v14"/>
        </svg> 
        {{ $text }}
    </a>
</div>