
@extends('layouts.panelGerente')

@section('title', 'Ver Reserva')

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

    .hidden {
        display: none;
    }

    .alert-custom {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1050;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        text-align: center;
        background-color: #e9d6f5; /* Fondo morado bebé */
        color: #5a337b; /* Texto morado oscuro */
        border: 1px solid #d8bced; /* Borde ligeramente más oscuro */
    }

    .alert-custom button {
        margin: 5px;
    }
</style>
    <div class="text-center mt-5">
        <a href="{{ route('destinos.create') }}" class="btn btn-primary">Agregar Destino</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-custom" id="floating-alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-custom bg-danger text-white" id="floating-alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>No</th>
					<th >Id Destino</th>
					<th >Nombre</th>
					<th >Pais</th>
					<th >Cuidad</th>
					<th >Activo</th>
					<th >Tour Id Tour</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinos as $destino)
                    <tr>
                        <td>{{ ++$i }}</td>
						<td >{{ $destino->id_destino }}</td>
						<td >{{ $destino->nombre }}</td>
						<td >{{ $destino->pais }}</td>
						<td >{{ $destino->cuidad }}</td>
						<td >{{ $destino->activo }}</td>
						<td >{{ $destino->tour_id_tour }}</td>
                        <td>
                                <td><a href="{{ route('destinos.show', $destino->id_destino) }}" class="btn btn-success">Ver</a></td>
                                <td><a hhref="{{ route('destinos.edit', $destino->id_destino) }}" class="btn btn-warning">Editar</a></td>
                                <td>
                                    <form action="{{ route('destinos.destroy', $destino->id_destino) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" 
                                            onclick="event.preventDefault(); showCustomAlert('¿Estás seguro de eliminar este cliente?', this.closest('form'));">
                                            <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                        </button>
                                        <div id="confirmation-alert" class="alert-custom hidden">
                                            <p id="confirmation-message"></p>
                                            <div class="mt-2">
                                                <button id="confirm-btn" class="btn btn-danger btn-sm">Sí, eliminar</button>
                                                <button id="cancel-btn" class="btn btn-secondary btn-sm">Cancelar</button>
                                            </div>
                                        </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const alert = document.getElementById('floating-alert');
        if (alert) {
            setTimeout(() => {
                alert.classList.add('fade-out');
                alert.addEventListener('animationend', () => alert.remove());
            }, 3000);
        }
    });

    function showCustomAlert(message, form) {
        const alert = document.getElementById('confirmation-alert');
        const messageContainer = document.getElementById('confirmation-message');
        const confirmBtn = document.getElementById('confirm-btn');
        const cancelBtn = document.getElementById('cancel-btn');

        alert.classList.remove('hidden');
        messageContainer.textContent = message;

        confirmBtn.onclick = () => {
            form.submit();
        };

        cancelBtn.onclick = () => {
            alert.classList.add('hidden');
        };
    }
</script>