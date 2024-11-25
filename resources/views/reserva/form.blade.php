<div class="row padding-1 p-1">
    <div class="col-md-12">
            <!-- Campo Id de la Reserva -->
        <div class="form-group mb-2 mb20">
            <label for="id_reserva" class="form-label">{{ __('Id Reserva') }}</label>
            <input type="text" name="id_reserva" class="form-control @error('id_reserva') is-invalid @enderror" 
                   value="{{ old('id_reserva', $ultimoId + 1) }}" id="id_reserva" placeholder="Id Reserva" readonly>
            {!! $errors->first('id_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
           <!-- Campo Nombre del Cliente -->
           <div class="form-group mb-2 mb20">
            <label for="cliente_id_cliente" class="form-label">{{ __('Seleccione Cliente') }}</label>
            <select name="cliente_id_cliente" id="cliente_id_cliente" 
                    class="form-control @error('cliente_id_cliente') is-invalid @enderror">
                <option value="">Seleccione un cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id_cliente }}" 
                        {{ old('cliente_id_cliente') == $cliente->id_cliente ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->ape_paterno }} {{ $cliente->ape_materno }}
                    </option>
                @endforeach
            </select>

            
            @error('cliente_id_cliente')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <button type="button" id="check-deposito" class="btn btn-primary">Verificar Depósito</button>
        </div>
        
        <div id="deposito-message" class="mt-2"></div>
        <!-- Campo Numero de Personas -->
        <div class="form-group mb-2 mb20">
            <label for="num_personas" class="form-label">{{ __('Num Personas') }}</label>
            <input type="number" 
                   name="num_personas" 
                   class="form-control @error('num_personas') is-invalid @enderror" 
                   value="{{ old('num_personas', $reserva?->num_personas ?? 1) }}" 
                   id="num_personas" 
                   placeholder="Num Personas" 
                   step="1">
                   {!! $errors->first('num_personas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> 
         <!-- Campo Fecha de Creacion -->
         <div class="form-group mb-2 mb20">
            <label for="fecha_creacion" class="form-label">{{ __('Fecha Creacion') }}</label>
            <input type="date" 
                   name="fecha_creacion" 
                   class="form-control @error('fecha_creacion') is-invalid @enderror" 
                   value="{{ old('fecha_creacion', $reserva?->fecha_creacion ?? date('Y-m-d')) }}" 
                   id="fecha_creacion" 
                   placeholder="Fecha Creacion" 
                   readonly>
            {!! $errors->first('fecha_creacion', '<div class=lert"><"invalid-feedback" role="astrong>:message</strong></div>') !!}
        </div>
          <!-- Campo Oculto Activo (Se llenara 1 por defecto) -->
        <input type="hidden" name="activo" value="1">

       <!-- Campo Tour -->
       <div class="form-group mb-2 mb20">
        <label for="tour_id_tour" class="form-label">{{ __('Tour') }}</label>
        <select name="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror" id="tour_id_tour">
            @foreach ($tours as $tour)
                <option value="{{ $tour->id_tour }}" {{ old('tour_id_tour') == $tour->id_tour ? 'selected' : '' }}>
                    {{ $tour->id_tour }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('tour_id_tour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
        <!-- Campo Deposito se guardara automaticamente el id -->
              
        <!-- Campo Vendedor -->
        <div class="form-group mb-2 mb20">
            <label for="usuario_id_usuario" class="form-label">{{ __('Usuario') }}</label>
            <input 
                type="text" 
                name="usuario_id_usuario" 
                class="form-control @error('usuario_id_usuario') is-invalid @enderror" 
                value="{{ old('usuario_id_usuario', ($usuarioAutenticado->nombre ?? '') . ' ' . ($usuarioAutenticado->apellido ?? '')) }}" 
                id="usuario_id_usuario" 
                placeholder="Nombre del Usuario" 
                readonly>
            {!! $errors->first('usuario_id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

<script>
    //Script que maneja el boton agregar deposito y verificar 
    document.getElementById('check-deposito').addEventListener('click', function () {
    const clienteId = document.getElementById('cliente_id_cliente').value;
    const messageDiv = document.getElementById('deposito-message');

    if (!clienteId) {
        messageDiv.innerHTML = '<div class="alert alert-danger">Seleccione un cliente.</div>';
        return;
    }

    fetch(`/check-deposito`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ cliente_id_cliente: clienteId }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                messageDiv.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
            } else {
                messageDiv.innerHTML = `
                    <div class="alert alert-warning">
                        ${data.message}
                        <a href="${data.redirectUrl}" class="btn btn-sm btn-warning mt-2">Agregar Depósito</a>
                    </div>
                `;
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            messageDiv.innerHTML = '<div class="alert alert-danger">Error al verificar el depósito.</div>';
        });
});
</script>