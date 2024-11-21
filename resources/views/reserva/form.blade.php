<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_reserva" class="form-label">{{ __('Id Reserva') }}</label>
            <input type="text" name="id_reserva" class="form-control @error('id_reserva') is-invalid @enderror" value="{{ old('id_reserva', $reserva?->id_reserva) }}" id="id_reserva" placeholder="Id Reserva">
            {!! $errors->first('id_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto_total" class="form-label">{{ __('Monto Total') }}</label>
            <input type="text" name="monto_total" class="form-control @error('monto_total') is-invalid @enderror" value="{{ old('monto_total', $reserva?->monto_total) }}" id="monto_total" placeholder="Monto Total">
            {!! $errors->first('monto_total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_personas" class="form-label">{{ __('Num Personas') }}</label>
            <input type="text" name="num_personas" class="form-control @error('num_personas') is-invalid @enderror" value="{{ old('num_personas', $reserva?->num_personas) }}" id="num_personas" placeholder="Num Personas">
            {!! $errors->first('num_personas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_creacion" class="form-label">{{ __('Fecha Creacion') }}</label>
            <input type="text" name="fecha_creacion" class="form-control @error('fecha_creacion') is-invalid @enderror" value="{{ old('fecha_creacion', $reserva?->fecha_creacion) }}" id="fecha_creacion" placeholder="Fecha Creacion">
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $reserva?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tour_id_tour" class="form-label">{{ __('Tour Id Tour') }}</label>
            <input type="text" name="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror" value="{{ old('tour_id_tour', $reserva?->tour_id_tour) }}" id="tour_id_tour" placeholder="Tour Id Tour">
            {!! $errors->first('tour_id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cliente_id_cliente" class="form-label">{{ __('Cliente Id Cliente') }}</label>
            <input type="text" name="cliente_id_cliente" class="form-control @error('cliente_id_cliente') is-invalid @enderror" value="{{ old('cliente_id_cliente', $reserva?->cliente_id_cliente) }}" id="cliente_id_cliente" placeholder="Cliente Id Cliente">
            {!! $errors->first('cliente_id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="deposito_id_deposito" class="form-label">{{ __('Deposito Id Deposito') }}</label>
            <input type="text" name="deposito_id_deposito" class="form-control @error('deposito_id_deposito') is-invalid @enderror" value="{{ old('deposito_id_deposito', $reserva?->deposito_id_deposito) }}" id="deposito_id_deposito" placeholder="Deposito Id Deposito">
            {!! $errors->first('deposito_id_deposito', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="usuario_id_usuario" class="form-label">{{ __('Usuario Id Usuario') }}</label>
            <input type="text" name="usuario_id_usuario" class="form-control @error('usuario_id_usuario') is-invalid @enderror" value="{{ old('usuario_id_usuario', $reserva?->usuario_id_usuario) }}" id="usuario_id_usuario" placeholder="Usuario Id Usuario">
            {!! $errors->first('usuario_id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>