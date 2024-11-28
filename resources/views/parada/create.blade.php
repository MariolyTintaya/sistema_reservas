@extends('layouts.panelGerente')

@section('title', 'Crear Parada')

@section('content')
<h1 class="mb-4">Crear Parada</h1>
<!--CRUD DE CLIENTES --->
<body class="bg-gray-100 flex flex-col">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Parada</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('paradas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('parada.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection