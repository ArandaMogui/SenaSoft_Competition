<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="variable" class="form-label">{{ __('Variable') }}</label>
            <input type="text" name="variable" class="form-control @error('variable') is-invalid @enderror" value="{{ old('variable', $listaopcione?->variable) }}" id="variable" placeholder="Variable">
            {!! $errors->first('variable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $listaopcione?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor" class="form-label">{{ __('Valor') }}</label>
            <input type="text" name="valor" class="form-control @error('valor') is-invalid @enderror" value="{{ old('valor', $listaopcione?->valor) }}" id="valor" placeholder="Valor">
            {!! $errors->first('valor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $listaopcione?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="abreviacion" class="form-label">{{ __('Abreviacion') }}</label>
            <input type="text" name="abreviacion" class="form-control @error('abreviacion') is-invalid @enderror" value="{{ old('abreviacion', $listaopcione?->abreviacion) }}" id="abreviacion" placeholder="Abreviacion">
            {!! $errors->first('abreviacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="habilita" class="form-label">{{ __('Habilita') }}</label>
            <input type="text" name="habilita" class="form-control @error('habilita') is-invalid @enderror" value="{{ old('habilita', $listaopcione?->habilita) }}" id="habilita" placeholder="Habilita">
            {!! $errors->first('habilita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>