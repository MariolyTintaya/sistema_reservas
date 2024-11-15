@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? __('Show') . " " . __('Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Cliente:</strong>
                                    {{ $cliente->id_cliente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nrodocumento:</strong>
                                    {{ $cliente->nroDocumento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $cliente->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $cliente->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ape Paterno:</strong>
                                    {{ $cliente->ape_paterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ape Materno:</strong>
                                    {{ $cliente->ape_materno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nac:</strong>
                                    {{ $cliente->fecha_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $cliente->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Cliente Id Tipo:</strong>
                                    {{ $cliente->tipo_cliente_id_tipo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
