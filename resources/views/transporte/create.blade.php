<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Transporte</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Transporte</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('transportes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('transporte.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>