<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $genPEp?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="razonsocial" class="form-label">{{ __('Razonsocial') }}</label>
            <input type="text" name="razonsocial" class="form-control @error('razonsocial') is-invalid @enderror" value="{{ old('razonsocial', $genPEp?->razonsocial) }}" id="razonsocial" placeholder="Razonsocial">
            {!! $errors->first('razonsocial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nit" class="form-label">{{ __('Nit') }}</label>
            <input type="text" name="nit" class="form-control @error('nit') is-invalid @enderror" value="{{ old('nit', $genPEp?->nit) }}" id="nit" placeholder="Nit">
            {!! $errors->first('nit', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="habilita" class="form-label">{{ __('Habilita') }}</label>
            <input type="text" name="habilita" class="form-control @error('habilita') is-invalid @enderror" value="{{ old('habilita', $genPEp?->habilita) }}" id="habilita" placeholder="Habilita">
            {!! $errors->first('habilita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>