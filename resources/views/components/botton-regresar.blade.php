@props([
    'route' => null,
    'text' => 'Regresar',
    'title' => 'Regresar a la lista de participantes',
])
<div>
    <a href="{{ $route }}" class="bg-red-500 text-white px-5 py-3 rounded-md" title="Regresar a la lista de participantes">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left inline">
            <path d="M15 18l-6-6 6-6"/>
        </svg> 
        {{ $text }}
    </a>
</div>