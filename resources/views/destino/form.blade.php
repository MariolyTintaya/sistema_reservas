<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_destino" class="form-label">{{ __('Id Destino') }}</label>
            <input type="text" name="id_destino" class="form-control @error('id_destino') is-invalid @enderror" value="{{ old('id_destino', $destino?->id_destino) }}" id="id_destino" placeholder="Id Destino">
            {!! $errors->first('id_destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $destino?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pais" class="form-label">{{ __('Pais') }}</label>
            <input type="text" name="pais" class="form-control @error('pais') is-invalid @enderror" value="{{ old('pais', $destino?->pais) }}" id="pais" placeholder="Pais">
            {!! $errors->first('pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cuidad" class="form-label">{{ __('Cuidad') }}</label>
            <input type="text" name="cuidad" class="form-control @error('cuidad') is-invalid @enderror" value="{{ old('cuidad', $destino?->cuidad) }}" id="cuidad" placeholder="Cuidad">
            {!! $errors->first('cuidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $destino?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tour_id_tour" class="form-label">{{ __('Tour Id Tour') }}</label>
            <input type="text" name="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror" value="{{ old('tour_id_tour', $destino?->tour_id_tour) }}" id="tour_id_tour" placeholder="Tour Id Tour">
            {!! $errors->first('tour_id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>