
@extends('layouts.panelGerente')

@section('title', 'Vendedores')

@section('content')
<style>
    #floating-alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1050; /* Asegúrate de que esté por encima de otros elementos */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        text-align: center;

        /* Colores personalizados para morado bebé */
        background-color: #e9d6f5; /* Fondo morado bebé */
        color: #5a337b; /* Texto morado oscuro */
        border: 1px solid #d8bced; /* Borde ligeramente más oscuro */
    }

    #floating-alert.fade-out {
        animation: fadeOut 1s forwards;
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }
</style>
        <h1 class="text-center mt-5">Lista de Counters</h1>
        <div class="text-center mt-5">
            <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Agregar Datos</a>
        </div>
        @if ($message = Session::get('success'))
                        <div class="alert alert-custom" id="floating-alert">
                            <p>{{ $message }}</p>
                        </div>
        @endif
        <div class="row">
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Sueldo</th>
                        <th>Fecha Contrato</th>
                        <th>Turno</th>
                        <th>Celular</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendedores as $vendedor)
                        <tr>
                            <td>{{ $vendedor->id_vendedor }}</td>
                            <td>{{ $vendedor->usuario->nombre ?? 'Usuario no encontrado' }}</td>
                            <td>{{ $vendedor->sueldo }}</td>
                            <td>{{ $vendedor->fecha_contrato }}</td>
                            <td>{{ $vendedor->turno }}</td>
                            <td>{{ $vendedor->celular }}</td>
                            <td>{{ $vendedor->activo ? 'Sí' : 'No' }}</td>
                            <td>
                                <a href="{{ route('vendedores.edit', $vendedor) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('vendedores.destroy', $vendedor) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
@endsection
<script>
    // Hacer que la alerta desaparezca automáticamente después de 3 segundos
    document.addEventListener('DOMContentLoaded', function () {
        const alert = document.getElementById('floating-alert');
        if (alert) {
            setTimeout(() => {
                alert.classList.add('fade-out');
                alert.addEventListener('animationend', () => alert.remove());
            }, 3000); // 3 segundos
        }
    });
</script>