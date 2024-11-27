@extends('layouts.panelGerente')

@section('title', 'Vendedores Edit')

@section('content')

    <h1>Editar Vendedor</h1>    
    <form action="{{ route('vendedores.update', $vendedor) }}" method="POST" class="form-group">
        @csrf
        @method('PUT')

        <!-- Sueldo -->
        <div class="form-group">
            <label for="sueldo">Sueldo:</label>
            <input type="text" name="sueldo" id="sueldo" class="form-control" value="{{ $vendedor->sueldo }}">
        </div>

        <!-- Fecha de Contrato -->
        <div class="form-group">
            <label for="fecha_contrato">Fecha Contrato:</label>
            <input type="date" name="fecha_contrato" id="fecha_contrato" class="form-control" value="{{ $vendedor->fecha_contrato }}">
        </div>

        <!-- Turno -->
        <div class="form-group">
            <label for="turno">Turno:</label>
            <input type="text" name="turno" id="turno" class="form-control" value="{{ $vendedor->turno }}">
        </div>

        <!-- Celular -->
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" name="celular" id="celular" class="form-control" value="{{ $vendedor->celular }}">
        </div>

        <!-- Activo -->
        <div class="form-group form-check">
            <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1" {{ $vendedor->activo ? 'checked' : '' }}>
            <label for="activo" class="form-check-label">Activo</label>
        </div>

        <!-- Usuario ID -->
        <div class="form-group">
            <label for="usuario_id_usuario">Usuario:</label>
            <select name="usuario_id_usuario" id="usuario_id_usuario" class="form-control">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id_usuario }}" {{ $vendedor->usuario_id_usuario == $usuario->id_usuario ? 'selected' : '' }}>
                        {{ $usuario->nombre }} <!-- Aquí mostramos el nombre del usuario -->
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Botón de actualización -->
        <button type="submit" class="btn btn-success mt-3">Actualizar Vendedor</button>
    </form>
@endsection