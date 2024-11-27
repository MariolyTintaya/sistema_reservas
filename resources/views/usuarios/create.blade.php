
@extends('layouts.panelGerente')

@section('title', 'Crear Usuarios')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <h1 class="text-center mt-5">REGISTRAR USUARIO</h1>
                <form id="form" class="form-vertical" action="{{ route('usuarios.agregar') }}" method="POST">
                    @csrf
                   <!-- Campo Nombre -->
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" 
                            name="nombre" 
                            id="nombre" 
                            class="form-control {{ $errors->has('nombre') ? 'is-invalid' : (old('nombre') ? 'is-valid' : '') }}" 
                            placeholder="Nombre" 
                            value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Campo para el apellido -->
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input 
                            type="text" 
                            name="apellido" 
                            id="apellido" 
                            class="form-control {{ $errors->has('apellido') ? 'is-invalid' : (old('apellido') ? 'is-valid' : '') }}" 
                            placeholder="Apellido" 
                            value="{{ old('apellido') }}" 
                            >
                            @error('apellido')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                        
                
                    <!-- Campo para el correo -->
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input 
                            type="email" 
                            class="form-control {{ $errors->has('apellido') ? 'is-invalid' : (old('apellido') ? 'is-valid' : '') }}" 
                            name="correo" 
                            id="correo" 
                            placeholder="Correo" 
                            value="{{ old('correo') }}" 
                            >
                            @error('correo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                   
                
                    <!-- Campo para la contraseña -->
                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input 
                            type="password" 
                            class="form-control {{ $errors->has('apellido') ? 'is-invalid' : (old('apellido') ? 'is-valid' : '') }}" 
                            name="contraseña" 
                            id="contraseña" 
                            placeholder="Contraseña" 
                            >
                            @error('contraseña')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
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
                            value="{{ old('activo', 1) }}" readonly> <!-- Predeterminado en activo -->
                    </div>
                   
                
                    <!-- Selección del rol -->
                    <div class="form-group">
                        <label for="rol_id_rol">Rol:</label>
                        <select 
                            class="form-control {{ $errors->has('apellido') ? 'is-invalid' : (old('apellido') ? 'is-valid' : '') }}" 
                            name="rol_id_rol" 
                            id="rol_id_rol" 
                            >
                            <option value="" disabled selected>Seleccione un rol</option>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id_rol }}" {{ old('rol_id_rol') == $rol->id_rol ? 'selected' : '' }}>
                                    {{ $rol->nombre_rol }}
                                </option>
                            @endforeach
                        </select>
                        @error('rol_id_rol')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Botón para enviar -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection

