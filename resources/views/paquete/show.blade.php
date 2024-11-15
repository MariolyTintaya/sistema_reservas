@extends('layouts.app')

@section('template_title')
    {{ $paquete->name ?? __('Show') . " " . __('Paquete') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Paquete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('paquetes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Paquete:</strong>
                                    {{ $paquete->id_paquete }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Temporada:</strong>
                                    {{ $paquete->temporada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Paquete:</strong>
                                    {{ $paquete->tipo_paquete }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $paquete->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $paquete->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechainicio:</strong>
                                    {{ $paquete->fechaInicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $paquete->fechaFin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $paquete->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tour Id Tour:</strong>
                                    {{ $paquete->tour_id_tour }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
