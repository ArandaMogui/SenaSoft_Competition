<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_cups" class="form-label">{{ __('Id Cups') }}</label>
            <input type="text" name="id_cups" class="form-control @error('id_cups') is-invalid @enderror" value="{{ old('id_cups', $labPProcedimiento?->id_cups) }}" id="id_cups" placeholder="Id Cups">
            {!! $errors->first('id_cups', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_grupo_laboratorio" class="form-label">{{ __('Id Grupo Laboratorio') }}</label>
            <input type="text" name="id_grupo_laboratorio" class="form-control @error('id_grupo_laboratorio') is-invalid @enderror" value="{{ old('id_grupo_laboratorio', $labPProcedimiento?->id_grupo_laboratorio) }}" id="id_grupo_laboratorio" placeholder="Id Grupo Laboratorio">
            {!! $errors->first('id_grupo_laboratorio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="metodo" class="form-label">{{ __('Metodo') }}</label>
            <input type="text" name="metodo" class="form-control @error('metodo') is-invalid @enderror" value="{{ old('metodo', $labPProcedimiento?->metodo) }}" id="metodo" placeholder="Metodo">
            {!! $errors->first('metodo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>