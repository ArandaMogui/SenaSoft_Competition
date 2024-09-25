<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nivel" class="form-label">{{ __('Nivel') }}</label>
            <input type="text" name="nivel" class="form-control @error('nivel') is-invalid @enderror" value="{{ old('nivel', $facPNivele?->nivel) }}" id="nivel" placeholder="Nivel">
            {!! $errors->first('nivel', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $facPNivele?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_eps" class="form-label">{{ __('Id Eps') }}</label>
            <input type="text" name="id_eps" class="form-control @error('id_eps') is-invalid @enderror" value="{{ old('id_eps', $facPNivele?->id_eps) }}" id="id_eps" placeholder="Id Eps">
            {!! $errors->first('id_eps', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_regimen" class="form-label">{{ __('Id Regimen') }}</label>
            <input type="text" name="id_regimen" class="form-control @error('id_regimen') is-invalid @enderror" value="{{ old('id_regimen', $facPNivele?->id_regimen) }}" id="id_regimen" placeholder="Id Regimen">
            {!! $errors->first('id_regimen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>