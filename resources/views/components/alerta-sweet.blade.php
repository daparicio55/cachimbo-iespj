@props([
    'mensaje' => 'Operación exitosa',
    'duracion' => 3000,
    'icono' => 'success',
    'titulo' => 'Éxito',
    'botonConfirmar' => false
])
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: '{{ $icono }}',
            title: '{{ $titulo }}',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: {{ $botonConfirmar ? 'true' : 'false' }},
        });
    });
</script>
