@extends('layouts.panelGerente')

@section('title', 'Usuarios')

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
    <h1 class="text-center mt-5">VER USUARIOS</h1>
    <div class="text-center mt-5">
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Agregar Nuevo Usuario</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-custom" id="floating-alert">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="row">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Activo</th>
                            <th>Rol</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id_usuario }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellido }}</td>
                                <td>{{ $usuario->correo }}</td>
                                <td>{{ $usuario->activo }}</td>
                                <td>{{ $usuario->rol->nombre_rol }}</td> <!-- Muestra el nombre del rol -->
                                <td><a href="{{ route('usuarios.editar', $usuario->id_usuario) }}" class="btn btn-warning">Editar</a></td>
                                <td>
                                    <form action="{{ route('usuarios.eliminar', $usuario->id_usuario) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
          
        </div>
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