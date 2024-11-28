@extends('layouts.panelGerente')

@section('title', 'Vendedores')

@section('content')
<h1>Detalles del Vendedor</h1>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td>{{ $vendedor->id_vendedor }}</td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td>{{ $vendedor->usuario->nombre ?? 'Usuario no encontrado' }}</td>
    </tr>
    <tr>
        <th>Sueldo</th>
        <td>{{ $vendedor->sueldo }}</td>
    </tr>
    <tr>
        <th>Fecha de Contrato</th>
        <td>{{ $vendedor->fecha_contrato }}</td>
    </tr>
    <tr>
        <th>Turno</th>
        <td>{{ $vendedor->turno }}</td>
    </tr>
    <tr>
        <th>Celular</th>
        <td>{{ $vendedor->celular }}</td>
    </tr>
    <tr>
        <th>Activo</th>
        <td>{{ $vendedor->activo ? 'Sí' : 'No' }}</td>
    </tr>
</table>
@endsection