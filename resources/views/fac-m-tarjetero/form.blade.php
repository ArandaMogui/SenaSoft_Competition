<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="historia" class="form-label">{{ __('Historia') }}</label>
            <input type="text" name="historia" class="form-control @error('historia') is-invalid @enderror" value="{{ old('historia', $facMTarjetero?->historia) }}" id="historia" placeholder="Historia">
            {!! $errors->first('historia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_persona" class="form-label">{{ __('Id Persona') }}</label>
            <input type="text" name="id_persona" class="form-control @error('id_persona') is-invalid @enderror" value="{{ old('id_persona', $facMTarjetero?->id_persona) }}" id="id_persona" placeholder="Id Persona">
            {!! $errors->first('id_persona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_regimen" class="form-label">{{ __('Id Regimen') }}</label>
            <input type="text" name="id_regimen" class="form-control @error('id_regimen') is-invalid @enderror" value="{{ old('id_regimen', $facMTarjetero?->id_regimen) }}" id="id_regimen" placeholder="Id Regimen">
            {!! $errors->first('id_regimen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_eps" class="form-label">{{ __('Id Eps') }}</label>
            <input type="text" name="id_eps" class="form-control @error('id_eps') is-invalid @enderror" value="{{ old('id_eps', $facMTarjetero?->id_eps) }}" id="id_eps" placeholder="Id Eps">
            {!! $errors->first('id_eps', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_nivel" class="form-label">{{ __('Id Nivel') }}</label>
            <input type="text" name="id_nivel" class="form-control @error('id_nivel') is-invalid @enderror" value="{{ old('id_nivel', $facMTarjetero?->id_nivel) }}" id="id_nivel" placeholder="Id Nivel">
            {!! $errors->first('id_nivel', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>