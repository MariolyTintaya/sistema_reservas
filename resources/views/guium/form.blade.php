<div class="row padding-1 p-1">
        <div class="form-group mb-2 mb20">
            <label for="id_guia" class="form-label">{{ __('Id Guia') }}</label>
            <input 
                type="text" 
                name="id_guia" 
                class="form-control @error('id_guia') is-invalid @enderror" 
                value="{{ old('id_guia', $guium?->id_guia) }}" 
                id="id_guia" 
                placeholder="Id Guia" 
                readonly>
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
            <select name="disponibilidad" id="disponibilidad" class="form-control @error('disponibilidad') is-invalid @enderror">
                <option value="">Seleccione una opción</option>
                @foreach ($disponibilidadOptions as $option)
                    <option value="{{ $option }}" {{ old('disponibilidad', $guium->disponibilidad) == $option ? 'selected' : '' }}>
                        {{ $option }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('disponibilidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" 
                value="{{ old('activo', $guium?->activo ?? 1) }}" id="activo" placeholder="Activo" readonly>
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="tour_id_tour" class="form-label">{{ __('Tour') }}</label>
            <select name="tour_id_tour" id="tour_id_tour" class="form-control @error('tour_id_tour') is-invalid @enderror">
                <option value="">Seleccione un tour</option>
                @foreach($tours as $tour)
                    <option value="{{ $tour->id_tour }}" 
                        {{ old('tour_id_tour', $guium?->tour_id_tour) == $tour->id_tour ? 'selected' : '' }}>
                        {{ $tour->informe }}  <!-- Muestra el 'informe' en lugar del 'id' -->
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