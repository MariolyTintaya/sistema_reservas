<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_paquete" class="form-label">{{ __('Id Paquete') }}</label>
            <input type="text" name="id_paquete" class="form-control @error('id_paquete') is-invalid @enderror" value="{{ old('id_paquete', $paquete?->id_paquete) }}" id="id_paquete" placeholder="Id Paquete">
            {!! $errors->first('id_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="temporada" class="form-label">{{ __('Temporada') }}</label>
            <input type="text" name="temporada" class="form-control @error('temporada') is-invalid @enderror" value="{{ old('temporada', $paquete?->temporada) }}" id="temporada" placeholder="Temporada">
            {!! $errors->first('temporada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_paquete" class="form-label">{{ __('Tipo Paquete') }}</label>
            <input type="text" name="tipo_paquete" class="form-control @error('tipo_paquete') is-invalid @enderror" value="{{ old('tipo_paquete', $paquete?->tipo_paquete) }}" id="tipo_paquete" placeholder="Tipo Paquete">
            {!! $errors->first('tipo_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $paquete?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $paquete?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_inicio" class="form-label">{{ __('Fechainicio') }}</label>
            <input type="text" name="fechaInicio" class="form-control @error('fechaInicio') is-invalid @enderror" value="{{ old('fechaInicio', $paquete?->fechaInicio) }}" id="fecha_inicio" placeholder="Fechainicio">
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_fin" class="form-label">{{ __('Fechafin') }}</label>
            <input type="text" name="fechaFin" class="form-control @error('fechaFin') is-invalid @enderror" value="{{ old('fechaFin', $paquete?->fechaFin) }}" id="fecha_fin" placeholder="Fechafin">
            {!! $errors->first('fechaFin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $paquete?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tour_id_tour" class="form-label">{{ __('Tour Id Tour') }}</label>
            <input type="text" name="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror" value="{{ old('tour_id_tour', $paquete?->tour_id_tour) }}" id="tour_id_tour" placeholder="Tour Id Tour">
            {!! $errors->first('tour_id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>