@extends('layouts.panelGerente')

@section('title', 'Crear Vendedor')

@section('content')

    <h1 class="text-center mt-5">Datos del Vendedor usu</h1>
    
    <form action="{{ route('vendedores.store') }}" method="POST" class="form-group">
     @csrf
        <!-- Usuario ID -->
        <div class="form-group">
            <label for="usuario_id_usuario">Usuario:</label>
            <select name="usuario_id_usuario" id="usuario_id_usuario" class="form-control">
                <option value="">Seleccionar un usuario</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id_usuario }}">
                        {{ $usuario->nombre }} <!-- Mostrar el nombre del usuario -->
                    </option>
                @endforeach
            </select>
        </div>
        <!-- Sueldo -->
        <div class="form-group">
            <label for="sueldo">Sueldo:</label>
            <input type="text" name="sueldo" id="sueldo" class="form-control">
        </div>

        <!-- Fecha de Contrato -->
        <div class="form-group">
            <label for="fecha_contrato">Fecha Contrato:</label>
            <input type="date" name="fecha_contrato" id="fecha_contrato" class="form-control">
        </div>

        <!-- Turno -->
        <div class="form-group">
            <label for="turno">Turno:</label>
            <input type="text" name="turno" id="turno" class="form-control">
        </div>

        <!-- Celular -->
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" name="celular" id="celular" class="form-control">
        </div>

        <!-- Activo -->
        <div class="form-group form-check">
            <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1">
            <label for="activo" class="form-check-label">Activo</label>
        </div>

        <!-- Botón de agregar -->
        <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>

@endsection
