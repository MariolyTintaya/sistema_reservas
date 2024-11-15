@extends('layouts.app')

@section('template_title')
    {{ $guium->name ?? __('Show') . " " . __('Guium') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Guium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('guia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Guia:</strong>
                                    {{ $guium->id_guia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $guium->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $guium->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Disponibilidad:</strong>
                                    {{ $guium->disponibilidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $guium->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tour Id Tour:</strong>
                                    {{ $guium->tour_id_tour }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
