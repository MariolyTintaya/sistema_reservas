<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col">
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Cliente</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('clientes.update', $cliente->id_cliente) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <!-- Campo ID Cliente -->
                            <div class="form-group mb-2 mb20">
                                <label for="id_cliente" class="form-label">{{ __('ID Cliente') }}</label>
                                <input type="text" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror"
                                    value="{{ old('id_cliente', $cliente->id_cliente) }}" id="id_cliente" readonly>
                                {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo CI -->
                            <div class="form-group mb-2 mb20">
                                <label for="nro_documento" class="form-label">{{ __('CI') }}</label>
                                <input type="text" name="nroDocumento" class="form-control @error('nroDocumento') is-invalid @enderror"
                                    value="{{ old('nroDocumento', $cliente->nroDocumento) }}" id="nro_documento" placeholder="Nrodocumento">
                                {!! $errors->first('nroDocumento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Celular -->
                            <div class="form-group mb-2 mb20">
                                <label for="celular" class="form-label">{{ __('Número de Celular') }}</label>
                                <input type="number" name="celular" class="form-control @error('celular') is-invalid @enderror"
                                    value="{{ old('celular', $cliente->celular) }}" id="celular" placeholder="Celular">
                                {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Nombre -->
                            <div class="form-group mb-2 mb20">
                                <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                                    value="{{ old('nombre', $cliente->nombre) }}" id="nombre" placeholder="Nombre">
                                {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Apellido Paterno -->
                            <div class="form-group mb-2 mb20">
                                <label for="ape_paterno" class="form-label">{{ __('Apellido Paterno') }}</label>
                                <input type="text" name="ape_paterno" class="form-control @error('ape_paterno') is-invalid @enderror"
                                    value="{{ old('ape_paterno', $cliente->ape_paterno) }}" id="ape_paterno" placeholder="Apellido Paterno">
                                {!! $errors->first('ape_paterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Apellido Materno -->
                            <div class="form-group mb-2 mb20">
                                <label for="ape_materno" class="form-label">{{ __('Apellido Materno') }}</label>
                                <input type="text" name="ape_materno" class="form-control @error('ape_materno') is-invalid @enderror"
                                    value="{{ old('ape_materno', $cliente->ape_materno) }}" id="ape_materno" placeholder="Apellido Materno">
                                {!! $errors->first('ape_materno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Fecha de Nacimiento -->
                            <div class="form-group mb-2 mb20">
                                <label for="fecha_nac" class="form-label">{{ __('Fecha de Nacimiento') }}</label>
                                <input type="date" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror"
                                    value="{{ old('fecha_nac', $cliente->fecha_nac) }}" id="fecha_nac" placeholder="Fecha Nacimiento" max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}">
                                {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Activo -->
                            <div class="form-group mb-2 mb20">
                                <label for="activo" class="form-label">{{ __('Activo') }}</label>
                                <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror"
                                    value="{{ old('activo', $cliente->activo) }}" id="activo" placeholder="Activo" readonly>
                                {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <!-- Campo Tipo de Cliente -->
                            <div class="form-group mb-2 mb20">
                                <label for="tipo_cliente_id_tipo" class="form-label">{{ __('Tipo Cliente') }}</label>
                                <select name="tipo_cliente_id_tipo" id="tipo_cliente_id_tipo" class="form-control @error('tipo_cliente_id_tipo') is-invalid @enderror">
                                    <option value="1" {{ (old('tipo_cliente_id_tipo', $cliente->tipo_cliente_id_tipo) == 1) ? 'selected' : '' }}>
                                        {{ __('Extranjero') }}
                                    </option>
                                    <option value="2" {{ (old('tipo_cliente_id_tipo', $cliente->tipo_cliente_id_tipo) == 2) ? 'selected' : '' }}>
                                        {{ __('Nacional') }}
                                    </option>
                                </select>
                                {!! $errors->first('tipo_cliente_id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Actualizar Cliente') }}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
