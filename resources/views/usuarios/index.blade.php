<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Ver Usuarios</title>
</head>
<body>
    <h1 class="text-center mt-5">VER USUARIOS</h1>
    <div class="text-center mt-5">
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Agregar Nuevo Usuario</a>
    </div>
        <div class="row">
            <div class="col-sm-8 m-auto">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Activo</th>
                            <th>Rol</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id_usuario }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellido }}</td>
                                <td>{{ $usuario->correo }}</td>
                                <td>{{ $usuario->activo }}</td>
                                <td>{{ $usuario->rol->nombre_rol }}</td> <!-- Muestra el nombre del rol -->
                                <td><a href="{{ route('usuarios.editar', $usuario->id_usuario) }}" class="btn btn-warning">Editar</a></td>
                                <td>
                                    <form action="{{ route('usuarios.eliminar', $usuario->id_usuario) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
</body>
</html>
