@props([
    'text' => 'Guardar',
    'id' => 'btnGuardar',
])
<div>
    <button type="submit"
        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        id={{ $id }}>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-save-icon lucide-save">
            <path
                d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
            <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
            <path d="M7 3v4a1 1 0 0 0 1 1h7" />
        </svg>
        {{ $text }}
    </button>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            btn = document.getElementById('{{ $id }}');
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                if (!form) return;
                //Verifica validez de los inputs HTML5
                if (!form.checkValidity()) {
                    form.reportValidity(); // muestra los mensajes de validación nativos
                    return;
                }
                this.disabled = true;
                //poner el sprint y el texto guardando
                this.innerHTML = `
                    <svg class="animate-spin h-5 w-5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8v4l3.5-3.5L12 0v4a8 8 0 100 16v4l3.5-3.5L12 20v-4a8 8 0 01-8-8z">
                        </path>
                    </svg> Enviando...`;
                form.submit();
            });
        });
    </script>
@endpush
