@extends('layouts.app')

@section('template_title')
    {{ $deposito->name ?? __('Show') . " " . __('Deposito') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Deposito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('depositos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Deposito:</strong>
                                    {{ $deposito->id_deposito }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $deposito->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $deposito->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pago Id Pago:</strong>
                                    {{ $deposito->pago_id_pago }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id Cliente:</strong>
                                    {{ $deposito->cliente_id_cliente }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
