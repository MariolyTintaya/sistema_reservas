<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Registrar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <h1 class="text-center mt-5">REGISTRAR USUARIO</h1>
                <form id="form" class="form-vertical" action="{{ route('usuarios.agregar') }}" method="POST">
                    @csrf
                    <!-- Campo para el nombre -->
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="nombre" 
                            id="nombre" 
                            placeholder="Nombre" 
                            value="{{ old('nombre') }}" 
                            required>
                    </div>
                
                    <!-- Campo para el correo -->
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input 
                            type="email" 
                            class="form-control" 
                            name="correo" 
                            id="correo" 
                            placeholder="Correo" 
                            value="{{ old('correo') }}" 
                            required>
                    </div>
                
                    <!-- Campo para la contraseña -->
                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            name="contraseña" 
                            id="contraseña" 
                            placeholder="Contraseña" 
                            required>
                    </div>
                
                    <!-- Campo para el estado activo -->
                    <div class="form-group">
                        <label for="activo">Activo:</label>
                        <input 
                            type="number" 
                            class="form-control" 
                            name="activo" 
                            id="activo" 
                            placeholder="1 o 0" 
                            value="{{ old('activo', 1) }}"> <!-- Predeterminado en activo -->
                    </div>
                
                    <!-- Selección del rol -->
                    <div class="form-group">
                        <label for="rol_id_rol">Rol:</label>
                        <select 
                            class="form-control" 
                            name="rol_id_rol" 
                            id="rol_id_rol" 
                            required>
                            <option value="" disabled selected>Seleccione un rol</option>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id_rol }}" {{ old('rol_id_rol') == $rol->id_rol ? 'selected' : '' }}>
                                    {{ $rol->nombre_rol }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                 
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Botón para enviar -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>

