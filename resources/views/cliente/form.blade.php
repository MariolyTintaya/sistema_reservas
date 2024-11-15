<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_cliente" class="form-label">{{ __('Id Cliente') }}</label>
            <input type="number" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" value="{{ old('id_cliente', $cliente?->id_cliente) }}" id="id_cliente" placeholder="Id Cliente">
            {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nro_documento" class="form-label">{{ __('Nrodocumento') }}</label>
            <input type="text" name="nroDocumento" class="form-control @error('nroDocumento') is-invalid @enderror" value="{{ old('nroDocumento', $cliente?->nroDocumento) }}" id="nro_documento" placeholder="Nrodocumento">
            {!! $errors->first('nroDocumento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celular" class="form-label">{{ __('Celular') }}</label>
            <input type="number" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular', $cliente?->celular) }}" id="celular" placeholder="Celular">
            {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $cliente?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ape_paterno" class="form-label">{{ __('Ape Paterno') }}</label>
            <input type="text" name="ape_paterno" class="form-control @error('ape_paterno') is-invalid @enderror" value="{{ old('ape_paterno', $cliente?->ape_paterno) }}" id="ape_paterno" placeholder="Ape Paterno">
            {!! $errors->first('ape_paterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ape_materno" class="form-label">{{ __('Ape Materno') }}</label>
            <input type="text" name="ape_materno" class="form-control @error('ape_materno') is-invalid @enderror" value="{{ old('ape_materno', $cliente?->ape_materno) }}" id="ape_materno" placeholder="Ape Materno">
            {!! $errors->first('ape_materno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nac" class="form-label">{{ __('Fecha Nac') }}</label>
            <input type="date" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{ old('fecha_nac', $cliente?->fecha_nac) }}" id="fecha_nac" placeholder="Fecha Nac">
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $cliente?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_cliente_id_tipo" class="form-label">{{ __('Tipo Cliente Id Tipo') }}</label>
            <input type="text" name="tipo_cliente_id_tipo" class="form-control @error('tipo_cliente_id_tipo') is-invalid @enderror" value="{{ old('tipo_cliente_id_tipo', $cliente?->tipo_cliente_id_tipo) }}" id="tipo_cliente_id_tipo" placeholder="Tipo Cliente Id Tipo">
            {!! $errors->first('tipo_cliente_id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>