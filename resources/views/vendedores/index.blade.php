
@extends('layouts.panelGerente')

@section('title', 'Vendedores')

@section('content')
    
        <h1 class="text-center mt-5">Lista de Counters</h1>
        <div class="text-center mt-5">
            <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Agregar Datos</a>
        </div>

        <div class="row">
        
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
                            <td class="text-center align-middle">
                                <span class="badge {{ $vendedor->activo ? 'bg-success' : 'bg-danger' }}">
                                    {{ $vendedor->activo ? 'Sí' : 'No' }}
                                </span>
                            </td>
                            <td class="text-center align-middle">
                                <a href="{{ route('vendedores.show', $vendedor) }}"  class="btn btn-success btn-sm"">Ver</a>
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

    </div>
@endsection


