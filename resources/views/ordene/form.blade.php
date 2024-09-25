<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_documento" class="form-label">{{ __('Id Documento') }}</label>
            <input type="text" name="id_documento" class="form-control @error('id_documento') is-invalid @enderror" value="{{ old('id_documento', $ordene?->id_documento) }}" id="id_documento" placeholder="Id Documento">
            {!! $errors->first('id_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_profesional_ordena" class="form-label">{{ __('Id Profesional Ordena') }}</label>
            <input type="text" name="id_profesional_ordena" class="form-control @error('id_profesional_ordena') is-invalid @enderror" value="{{ old('id_profesional_ordena', $ordene?->id_profesional_ordena) }}" id="id_profesional_ordena" placeholder="Id Profesional Ordena">
            {!! $errors->first('id_profesional_ordena', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="orden" class="form-label">{{ __('Orden') }}</label>
            <input type="text" name="orden" class="form-control @error('orden') is-invalid @enderror" value="{{ old('orden', $ordene?->orden) }}" id="orden" placeholder="Orden">
            {!! $errors->first('orden', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $ordene?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_historia" class="form-label">{{ __('Id Historia') }}</label>
            <input type="text" name="id_historia" class="form-control @error('id_historia') is-invalid @enderror" value="{{ old('id_historia', $ordene?->id_historia) }}" id="id_historia" placeholder="Id Historia">
            {!! $errors->first('id_historia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="profesional_externo" class="form-label">{{ __('Profesional Externo') }}</label>
            <input type="text" name="profesional_externo" class="form-control @error('profesional_externo') is-invalid @enderror" value="{{ old('profesional_externo', $ordene?->profesional_externo) }}" id="profesional_externo" placeholder="Profesional Externo">
            {!! $errors->first('profesional_externo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>