@extends('layouts.panelGerente')

@section('title', 'VerCientes')

@section('content')
    <h1 class="mb-4">Crear Reserva</h1>
<!--CRUD DE CLIENTES --->
<body class="bg-gray-100 flex flex-col">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Reserva</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('reservas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('reserva.form')

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection