@extends('layouts.app')

@section('template_title')
    Paquetes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paquetes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paquetes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Paquete') }}
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
                                        
									<th >Id Paquete</th>
									<th >Temporada</th>
									<th >Tipo Paquete</th>
									<th >Precio</th>
									<th >Nombre</th>
									<th >Fechainicio</th>
									<th >Fechafin</th>
									<th >Activo</th>
									<th >Tour Id Tour</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paquetes as $paquete)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $paquete->id_paquete }}</td>
										<td >{{ $paquete->temporada }}</td>
										<td >{{ $paquete->tipo_paquete }}</td>
										<td >{{ $paquete->precio }}</td>
										<td >{{ $paquete->nombre }}</td>
										<td >{{ $paquete->fechaInicio }}</td>
										<td >{{ $paquete->fechaFin }}</td>
										<td >{{ $paquete->activo }}</td>
										<td >{{ $paquete->tour_id_tour }}</td>

                                            <td>
                                                <form action="{{ route('paquetes.destroy', $paquete->id_paquete) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('paquetes.show', $paquete->id_paquete) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('paquetes.edit', $paquete->id_paquete) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paquetes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
