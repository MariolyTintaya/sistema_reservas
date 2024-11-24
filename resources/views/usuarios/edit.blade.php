<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <h1 class="text-center mt-5">EDITAR USUARIO</h1>
                <!-- Mostrar mensajes de éxito o error -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('usuarios.actualizar', $usuario->id_usuario) }}">
                        @csrf
                        @method('PUT')

                         <!-- Campo Estado Activo -->
                         <div class="form-group">
                            <label for="activo">Activo</label>
                            <input type="number" name="activo" id="activo" class="form-control" value="{{ old('activo', $usuario->activo) }}">
                        </div>
                        <!-- Campo Nombre -->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre', $usuario->nombre) }}">
                            @error('nombre')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Campo Apellido -->
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control {{ $errors->has('apellido') ? 'is-invalid' : '' }}" value="{{ old('apellido', $usuario->apellido) }}">
                            @error('apellido')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Campo Correo -->
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control {{ $errors->has('correo') ? 'is-invalid' : '' }}" value="{{ old('correo', $usuario->correo) }}">
                            @error('correo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" name="contraseña" id="contraseña" class="form-control {{ $errors->has('contraseña') ? 'is-invalid' : '' }}">
                            @error('contraseña')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Botón de actualización -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</body>