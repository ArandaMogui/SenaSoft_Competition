<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $facPProfesional?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_persona" class="form-label">{{ __('Id Persona') }}</label>
            <input type="text" name="id_persona" class="form-control @error('id_persona') is-invalid @enderror" value="{{ old('id_persona', $facPProfesional?->id_persona) }}" id="id_persona" placeholder="Id Persona">
            {!! $errors->first('id_persona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registro_medico" class="form-label">{{ __('Registro Medico') }}</label>
            <input type="text" name="registro_medico" class="form-control @error('registro_medico') is-invalid @enderror" value="{{ old('registro_medico', $facPProfesional?->registro_medico) }}" id="registro_medico" placeholder="Registro Medico">
            {!! $errors->first('registro_medico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_prof" class="form-label">{{ __('Id Tipo Prof') }}</label>
            <input type="text" name="id_tipo_prof" class="form-control @error('id_tipo_prof') is-invalid @enderror" value="{{ old('id_tipo_prof', $facPProfesional?->id_tipo_prof) }}" id="id_tipo_prof" placeholder="Id Tipo Prof">
            {!! $errors->first('id_tipo_prof', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>