@extends('layouts.app')

@section('template_title')
    {{ $transporte->name ?? __('Show') . " " . __('Transporte') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transporte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('transportes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Placa:</strong>
                                    {{ $transporte->num_placa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Asientos:</strong>
                                    {{ $transporte->num_asientos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Transporte:</strong>
                                    {{ $transporte->tipo_transporte }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $transporte->activo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
