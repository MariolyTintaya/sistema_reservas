@extends('layouts.app')

@section('template_title')
    {{ $tour->name ?? __('Show') . " " . __('Tour') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tour</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tours.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tour:</strong>
                                    {{ $tour->id_tour }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Informe:</strong>
                                    {{ $tour->informe }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $tour->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $tour->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Transporte Num Placa:</strong>
                                    {{ $tour->transporte_num_placa }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
