@if (session('success'))
    <x-alerta-sweet mensaje="{{ session('success') }}" icono="success" titulo="Éxito" />
@endif
@if (session('error'))
    <x-alerta-sweet mensaje="{{ session('error') }}" icono="error" titulo="Error" />
@endif
