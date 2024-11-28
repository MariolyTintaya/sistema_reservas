@extends('layouts.panelGerente')

@section('title', 'Depositos')

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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Depositos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('depositos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Deposito') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-custom" id="floating-alert">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Id Deposito</th>
									<th >Fecha</th>
									<th >Activo</th>
									<th >Pago Id Pago</th>
									<th >Cliente Id Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($depositos as $deposito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $deposito->id_deposito }}</td>
										<td >{{ $deposito->fecha }}</td>
										<td >{{ $deposito->activo }}</td>
										<td >{{ $deposito->pago_id_pago }}</td>
										<td >{{ $deposito->cliente_id_cliente }}</td>

                                            <td>
                                                <form action="{{ route('depositos.destroy', $deposito->id_deposito) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('depositos.show', $deposito->id_deposito) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('depositos.edit', $deposito->id_deposito) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $depositos->withQueryString()->links() !!}
            </div>
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