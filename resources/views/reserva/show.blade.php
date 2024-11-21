@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? __('Show') . " " . __('Reserva') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Reserva:</strong>
                                    {{ $reserva->id_reserva }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto Total:</strong>
                                    {{ $reserva->monto_total }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Personas:</strong>
                                    {{ $reserva->num_personas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Creacion:</strong>
                                    {{ $reserva->fecha_creacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $reserva->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tour Id Tour:</strong>
                                    {{ $reserva->tour_id_tour }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id Cliente:</strong>
                                    {{ $reserva->cliente_id_cliente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Deposito Id Deposito:</strong>
                                    {{ $reserva->deposito_id_deposito }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id Usuario:</strong>
                                    {{ $reserva->usuario_id_usuario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
