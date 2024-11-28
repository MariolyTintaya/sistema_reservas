<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_tour" class="form-label">{{ __('Id Tour') }}</label>
            <input type="text" name="id_tour" class="form-control @error('id_tour') is-invalid @enderror" value="{{ old('id_tour', $tour?->id_tour) }}" id="id_tour" placeholder="Id Tour">
            {!! $errors->first('id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="informe" class="form-label">{{ __('Informe') }}</label>
            <input type="text" name="informe" class="form-control @error('informe') is-invalid @enderror" value="{{ old('informe', $tour?->informe) }}" id="informe" placeholder="Informe">
            {!! $errors->first('informe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $tour?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $tour?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="transporte_num_placa" class="form-label">{{ __('Transporte Num Placa') }}</label>
            <input type="text" name="transporte_num_placa" class="form-control @error('transporte_num_placa') is-invalid @enderror" value="{{ old('transporte_num_placa', $tour?->transporte_num_placa) }}" id="transporte_num_placa" placeholder="Transporte Num Placa">
            {!! $errors->first('transporte_num_placa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!-- Campo para subir la imagen -->
        <div class="form-group mb-2 mb20">
            <label for="imagen" class="form-label">{{ __('Imagen') }}</label>
            <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen">
            {!! $errors->first('imagen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <!-- Vista previa -->
            <img id="preview" alt="Vista previa de la imagen" />
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
