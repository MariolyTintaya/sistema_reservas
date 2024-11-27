@extends('layouts.panelGerente')

@section('title', 'Tours')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tours') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tour.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Tour') }}
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
                                        
									<th >Id Tour</th>
									<th >Informe</th>
									<th >Fecha</th>
									<th >Activo</th>
									<th >Transporte Num Placa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tours as $tour)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tour->id_tour }}</td>
										<td >{{ $tour->informe }}</td>
										<td >{{ $tour->fecha }}</td>
										<td >{{ $tour->activo }}</td>
										<td >{{ $tour->transporte_num_placa }}</td>

                                            <td>
                                                <form action="{{ route('tour.destroy', $tour->id_tour) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tour.show', $tour->id_tour) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tour.edit', $tour->id_tour) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $tours->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection