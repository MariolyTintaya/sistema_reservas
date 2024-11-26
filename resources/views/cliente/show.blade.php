<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Cliente</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="flex flex-col">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm bg-black" href="{{ route('clientes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
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
                            <strong>Apellido Paterno:</strong>
                                {{ $cliente->ape_paterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido Materno:</strong>
                                {{ $cliente->ape_materno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Nac:</strong>
                                {{ $cliente->fecha_nac }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo Cliente:</strong>
                                {{ $cliente->tipo_cliente_id_tipo}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
