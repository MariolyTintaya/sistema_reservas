<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_guia" class="form-label">{{ __('Id Guia') }}</label>
            <input type="text" name="id_guia" class="form-control @error('id_guia') is-invalid @enderror" value="{{ old('id_guia', $guium?->id_guia) }}" id="id_guia" placeholder="Id Guia">
            {!! $errors->first('id_guia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $guium?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celular" class="form-label">{{ __('Celular') }}</label>
            <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular', $guium?->celular) }}" id="celular" placeholder="Celular">
            {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="disponibilidad" class="form-label">{{ __('Disponibilidad') }}</label>
            <input type="text" name="disponibilidad" class="form-control @error('disponibilidad') is-invalid @enderror" value="{{ old('disponibilidad', $guium?->disponibilidad) }}" id="disponibilidad" placeholder="Disponibilidad">
            {!! $errors->first('disponibilidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $guium?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tour_id_tour" class="form-label">{{ __('Tour Id Tour') }}</label>
            <input type="text" name="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror" value="{{ old('tour_id_tour', $guium?->tour_id_tour) }}" id="tour_id_tour" placeholder="Tour Id Tour">
            {!! $errors->first('tour_id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>