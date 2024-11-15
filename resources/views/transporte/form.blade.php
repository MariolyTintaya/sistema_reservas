<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="num_placa" class="form-label">{{ __('Num Placa') }}</label>
            <input type="text" name="num_placa" class="form-control @error('num_placa') is-invalid @enderror" value="{{ old('num_placa', $transporte?->num_placa) }}" id="num_placa" placeholder="Num Placa">
            {!! $errors->first('num_placa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_asientos" class="form-label">{{ __('Num Asientos') }}</label>
            <input type="text" name="num_asientos" class="form-control @error('num_asientos') is-invalid @enderror" value="{{ old('num_asientos', $transporte?->num_asientos) }}" id="num_asientos" placeholder="Num Asientos">
            {!! $errors->first('num_asientos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_transporte" class="form-label">{{ __('Tipo Transporte') }}</label>
            <input type="text" name="tipo_transporte" class="form-control @error('tipo_transporte') is-invalid @enderror" value="{{ old('tipo_transporte', $transporte?->tipo_transporte) }}" id="tipo_transporte" placeholder="Tipo Transporte">
            {!! $errors->first('tipo_transporte', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $transporte?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>