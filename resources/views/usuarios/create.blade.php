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
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña" required> 
                    </div>
                    <div class="form-group">
                        <label for="activo">Activo:</label>
                        <input type="number" class="form-control" name="activo" id="activo" placeholder="1 o 0" >
                    </div>
                    <div class="form-group">
                        <label for="rol_id_rol">Rol:</label>
                        <select name="rol_id_rol" required>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id_rol }}">{{ $rol->nombre_rol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

