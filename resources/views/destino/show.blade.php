@extends('layouts.panelGerente')

@section('title', 'Crear Destino')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Destino</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('destinos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Destino:</strong>
                                    {{ $destino->id_destino }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $destino->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pais:</strong>
                                    {{ $destino->pais }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cuidad:</strong>
                                    {{ $destino->cuidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $destino->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tour Id Tour:</strong>
                                    {{ $destino->tour_id_tour }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection