<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_deposito" class="form-label">{{ __('Id Deposito') }}</label>
            <input type="text" name="id_deposito" class="form-control @error('id_deposito') is-invalid @enderror" value="{{ old('id_deposito', $deposito?->id_deposito) }}" id="id_deposito" placeholder="Id Deposito">
            {!! $errors->first('id_deposito', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $deposito?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $deposito?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pago_id_pago" class="form-label">{{ __('Pago Id Pago') }}</label>
            <input type="text" name="pago_id_pago" class="form-control @error('pago_id_pago') is-invalid @enderror" value="{{ old('pago_id_pago', $deposito?->pago_id_pago) }}" id="pago_id_pago" placeholder="Pago Id Pago">
            {!! $errors->first('pago_id_pago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cliente_id_cliente" class="form-label">{{ __('Cliente Id Cliente') }}</label>
            <input type="text" name="cliente_id_cliente" class="form-control @error('cliente_id_cliente') is-invalid @enderror" value="{{ old('cliente_id_cliente', $deposito?->cliente_id_cliente) }}" id="cliente_id_cliente" placeholder="Cliente Id Cliente">
            {!! $errors->first('cliente_id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>