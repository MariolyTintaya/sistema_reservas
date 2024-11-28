@extends('layouts.panelGerente')

@section('title', 'VerCientes')

@section('content')
<h1 class="mb-4">Crear Deposito</h1>
<body class="bg-gray-100 flex flex-col">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Deposito</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('depositos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('deposito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection