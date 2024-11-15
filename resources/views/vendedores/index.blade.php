<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Vendedores</title>
</head>
<body>

    <h1 class="text-center mt-5">Lista de Vendedores</h1>
    <div class="text-center mt-5">
        <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Agregar Datos al Vendedor</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Sueldo</th>
                <th>Fecha Contrato</th>
                <th>Turno</th>
                <th>Celular</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->id_vendedor }}</td>
                    <td>{{ $vendedor->usuario->nombre ?? 'Usuario no encontrado' }}</td>
                    <td>{{ $vendedor->sueldo }}</td>
                    <td>{{ $vendedor->fecha_contrato }}</td>
                    <td>{{ $vendedor->turno }}</td>
                    <td>{{ $vendedor->celular }}</td>
                    <td>{{ $vendedor->activo ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('vendedores.edit', $vendedor) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('vendedores.destroy', $vendedor) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>


