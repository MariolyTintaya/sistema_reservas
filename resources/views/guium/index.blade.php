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
                                {{ __('Guia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('guia.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __('Nuevo Guia') }}
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
                                        <th>Nombre</th>
                                        <th>Celular</th>
                                        <th>Disponibilidad</th>
                                        <th>Informe del Tour</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guia as $guium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $guium->nombre }}</td>
                                            <td>{{ $guium->celular }}</td>
                                            <td>{{ $guium->disponibilidad }}</td>
                                            <td>{{ $guium->tour->informe ?? 'Sin informe' }}</td>
                                            <td>
                                                <form action="{{ route('guia.destroy', $guium->id_guia) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('guia.show', $guium->id_guia) }}">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('guia.edit', $guium->id_guia) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Estás seguro de eliminar?') ? this.closest('form').submit() : false;">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $guia->withQueryString()->links() !!}
            </div>
        </div>
    </div>
</body>
</html>
