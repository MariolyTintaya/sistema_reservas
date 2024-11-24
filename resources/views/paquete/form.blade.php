<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="id_paquete" class="form-label">{{ __('Id Paquete') }}</label>
            <input type="text" name="id_paquete" 
                class="form-control @error('id_paquete') is-invalid @enderror" 
                value="{{ old('id_paquete', $nextIdPaquete ?? ($paquete->id_paquete ?? '')) }}" 
                id="id_paquete" placeholder="Id Paquete" readonly>
            {!! $errors->first('id_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="temporada" class="form-label">{{ __('Temporada') }}</label>
            <select name="temporada" class="form-control @error('temporada') is-invalid @enderror" id="temporada">
                <option value="Primavera" {{ old('temporada', $paquete->temporada ?? '') == 'Primavera' ? 'selected' : '' }}>Primavera</option>
                <option value="Verano" {{ old('temporada', $paquete->temporada ?? '') == 'Verano' ? 'selected' : '' }}>Verano</option>
                <option value="Otoño" {{ old('temporada', $paquete->temporada ?? '') == 'Otoño' ? 'selected' : '' }}>Otoño</option>
                <option value="Invierno" {{ old('temporada', $paquete->temporada ?? '') == 'Invierno' ? 'selected' : '' }}>Invierno</option>
            </select>
            {!! $errors->first('temporada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="tipo_paquete" class="form-label">{{ __('Tipo Paquete') }}</label>
            <select name="tipo_paquete" class="form-control @error('tipo_paquete') is-invalid @enderror" id="tipo_paquete">
                @foreach ($tiposPaquete as $tipo)
                    <option value="{{ $tipo->tipo_paquete }}" {{ old('tipo_paquete', $paquete->tipo_paquete ?? '') == $tipo->tipo_paquete ? 'selected' : '' }}>
                        {{ $tipo->tipo_paquete }}
                    </option>
                @endforeach
                <option value="nuevo" {{ old('tipo_paquete', $paquete->tipo_paquete ?? '') == 'nuevo' ? 'selected' : '' }}>
                    Crear otro tipo de paquete
                </option>
            </select>
            {!! $errors->first('tipo_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Campo de texto para ingresar un nuevo tipo de paquete -->
        <div class="form-group mb-2 mb20" id="nuevo_tipo_paquete_field" style="display: none;">
            <label for="nuevo_tipo_paquete" class="form-label">{{ __('Nuevo Tipo de Paquete') }}</label>
            <input type="text" name="nuevo_tipo_paquete" class="form-control @error('nuevo_tipo_paquete') is-invalid @enderror" id="nuevo_tipo_paquete" placeholder="Ingrese el nuevo tipo de paquete" value="{{ old('nuevo_tipo_paquete') }}">
            {!! $errors->first('nuevo_tipo_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Bs</span>
                </div>
                <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $paquete->precio ?? '') }}" id="precio" placeholder="Precio">
            </div>
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $paquete->nombre ?? '') }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_inicio" class="form-label">{{ __('Fecha inicio') }}</label>
            <input type="date" name="fechaInicio" class="form-control @error('fechaInicio') is-invalid @enderror" value="{{ old('fechaInicio', $paquete->fechaInicio ?? '') }}" id="fecha_inicio" placeholder="Fecha inicio">
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha_fin" class="form-label">{{ __('Fecha fin') }}</label>
            <input type="date" name="fechaFin" class="form-control @error('fechaFin') is-invalid @enderror" value="{{ old('fechaFin', $paquete->fechaFin ?? '') }}" id="fecha_fin" placeholder="Fecha fin">
            {!! $errors->first('fechaFin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $paquete->activo ?? 1) }}" id="activo" placeholder="Activo" readonly>
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tour_id_tour" class="form-label">{{ __('Tour') }}</label>
            <select name="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror" id="tour_id_tour">
                <option value="">Seleccione un tour</option>
                @foreach ($tours as $tour)
                    <option value="{{ $tour->id_tour }}" {{ old('tour_id_tour', $paquete->tour_id_tour ?? '') == $tour->id_tour ? 'selected' : '' }}>
                        {{ $tour->informe }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('tour_id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>


<script>
    // Mostrar u ocultar el campo para ingresar un nuevo tipo de paquete basado en la selección
    document.getElementById('tipo_paquete').addEventListener('change', function() {
        var nuevoTipoPaqueteField = document.getElementById('nuevo_tipo_paquete_field');
        if (this.value === 'nuevo') {
            nuevoTipoPaqueteField.style.display = 'block';
        } else {
            nuevoTipoPaqueteField.style.display = 'none';
        }
    });

    // Inicializa el campo basado en el valor actual del select
    if (document.getElementById('tipo_paquete').value === 'nuevo') {
        document.getElementById('nuevo_tipo_paquete_field').style.display = 'block';
    }

    // Validar que la fecha de inicio no sea menor que la fecha actual
    document.getElementById('fecha_inicio').addEventListener('change', function() {
        var fechaInicio = new Date(this.value);
        var fechaHoy = new Date();

        // Ajustar la hora de la fecha actual a medianoche para compararla correctamente
        fechaHoy.setHours(0, 0, 0, 0);

        // Comparar la fecha de inicio con la fecha actual
        if (fechaInicio < fechaHoy) {
            alert("La fecha de inicio no puede ser menor a la fecha actual.");
            this.value = '';  // Limpiar el campo si la fecha es incorrecta
        }
    });

    // Validar que la fecha final sea posterior a la fecha de inicio
    document.getElementById('fecha_fin').addEventListener('change', function() {
        var fechaInicio = new Date(document.getElementById('fecha_inicio').value);
        var fechaFin = new Date(this.value);

        // Comparar la fecha de fin con la fecha de inicio
        if (fechaFin <= fechaInicio) {
            alert("La fecha de fin debe ser posterior a la fecha de inicio.");
            this.value = '';  // Limpiar el campo si la fecha no es válida
        }
    });
</script>
