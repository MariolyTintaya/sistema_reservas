<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Vendedor</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Cliente') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th >Documento</th>
                                        <th >Celular</th>
                                        <th >Nombre</th>
                                        <th >Ape Paterno</th>
                                        <th >Ape Materno</th>
                                        <th >Fecha Nac</th>
                                        <th >Tipo Cliente</th> <!-- Cambié el nombre de la columna -->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $cliente->nroDocumento }}</td>
                                            <td>{{ $cliente->celular }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->ape_paterno }}</td>
                                            <td>{{ $cliente->ape_materno }}</td>
                                            <td>{{ $cliente->fecha_nac }}</td>
                                            <td>
                                                @if($cliente->tipo_cliente_id_tipo == 1)
                                                    {{ __('Extranjero') }}
                                                @elseif($cliente->tipo_cliente_id_tipo == 2)
                                                    {{ __('Nacional') }}
                                                @else
                                                    {{ __('Desconocido') }}
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show', $cliente->id_cliente) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit', $cliente->id_cliente) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Estas seguro de eliminar este cliente?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
</body>
</html>
