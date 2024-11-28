@extends('layouts.panelGerente')

@section('title', 'Guias')

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
        <div class="text-center mt-5">
            <a href="{{ route('guium.create') }}" class="btn btn-primary">Nuevo Guia</a>
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
                        <th>No</th>
                        <th>Nombre</th>
                        <th>Celular</th>
                        <th>Disponibilidad</th>
                        <th>Informe del Tour</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guium as $guium)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $guium->nombre }}</td>
                            <td>{{ $guium->celular }}</td>
                            <td>{{ $guium->disponibilidad }}</td>
                            <td>{{ $guium->tour->informe ?? 'Sin informe' }}</td>
                            <td>
                                <td><a href="{{ route('guium.show', $guium->id_guia) }}" class="btn btn-success">Ver</a></td>
                                <td><a href="{{ route('guium.edit', $guium->id_guia) }}" class="btn btn-warning">Editar</a></td>
                                <td>
                                    <form action="{{ route('guium.destroy', $guium->id_guia) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="event.preventDefault(); confirm('Estas seguro de eliminar') ? this.closest('form').submit() : false;">Eliminar</button>
                                    </form>
                                </td>
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