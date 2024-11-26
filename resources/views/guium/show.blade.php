<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Guia</title>
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
                            <span class="card-title">{{ __('Ver') }} Guias</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('guia.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Guia:</strong>
                                    {{ $guium->id_guia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $guium->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $guium->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Disponibilidad:</strong>
                                    {{ $guium->disponibilidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $guium->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tour:</strong>
                                    @if($guium->tour)
                                        {{ $guium->tour->informe }}  <!-- Accede al informe del tour relacionado -->
                                    @else
                                        No asignado
                                    @endif
                                </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</body>