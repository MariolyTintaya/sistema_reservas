<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Paquete</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Inormacion') }} del Paquete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('paquetes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Paquete:</strong>
                                    {{ $paquete->id_paquete }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Temporada:</strong>
                                    {{ $paquete->temporada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Paquete:</strong>
                                    {{ $paquete->tipo_paquete }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $paquete->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $paquete->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechainicio:</strong>
                                    {{ $paquete->fechaInicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechafin:</strong>
                                    {{ $paquete->fechaFin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $paquete->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tour:</strong>
                                    {{ $paquete->tour->informe ?? 'No disponible' }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
