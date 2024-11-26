<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parada</title>
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
                                {{ __('Paradas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paradas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
									<th >Id Parada</th>
									<th >Nombre</th>
									<th >Descripcion</th>
									<th >Activo</th>
									<th >Ruta Id Ruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paradas as $parada)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $parada->id_parada }}</td>
										<td >{{ $parada->nombre }}</td>
										<td >{{ $parada->descripcion }}</td>
										<td >{{ $parada->activo }}</td>
										<td >{{ $parada->ruta_id_ruta }}</td>

                                            <td>
                                                <form action="{{ route('paradas.destroy', $parada->id_parada) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paradas.show', $parada->id_parada) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paradas.edit', $parada->id_parada) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $paradas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
</body>