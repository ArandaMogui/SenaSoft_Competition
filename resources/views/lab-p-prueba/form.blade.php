<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_procedimiento" class="form-label">{{ __('Id Procedimiento') }}</label>
            <input type="text" name="id_procedimiento" class="form-control @error('id_procedimiento') is-invalid @enderror" value="{{ old('id_procedimiento', $labPPrueba?->id_procedimiento) }}" id="id_procedimiento" placeholder="Id Procedimiento">
            {!! $errors->first('id_procedimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_resultado" class="form-label">{{ __('Id Tipo Resultado') }}</label>
            <input type="text" name="id_tipo_resultado" class="form-control @error('id_tipo_resultado') is-invalid @enderror" value="{{ old('id_tipo_resultado', $labPPrueba?->id_tipo_resultado) }}" id="id_tipo_resultado" placeholder="Id Tipo Resultado">
            {!! $errors->first('id_tipo_resultado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_prueba" class="form-label">{{ __('Codigo Prueba') }}</label>
            <input type="text" name="codigo_prueba" class="form-control @error('codigo_prueba') is-invalid @enderror" value="{{ old('codigo_prueba', $labPPrueba?->codigo_prueba) }}" id="codigo_prueba" placeholder="Codigo Prueba">
            {!! $errors->first('codigo_prueba', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_prueba" class="form-label">{{ __('Nombre Prueba') }}</label>
            <input type="text" name="nombre_prueba" class="form-control @error('nombre_prueba') is-invalid @enderror" value="{{ old('nombre_prueba', $labPPrueba?->nombre_prueba) }}" id="nombre_prueba" placeholder="Nombre Prueba">
            {!! $errors->first('nombre_prueba', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="unidad" class="form-label">{{ __('Unidad') }}</label>
            <input type="text" name="unidad" class="form-control @error('unidad') is-invalid @enderror" value="{{ old('unidad', $labPPrueba?->unidad) }}" id="unidad" placeholder="Unidad">
            {!! $errors->first('unidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="habilita" class="form-label">{{ __('Habilita') }}</label>
            <input type="text" name="habilita" class="form-control @error('habilita') is-invalid @enderror" value="{{ old('habilita', $labPPrueba?->habilita) }}" id="habilita" placeholder="Habilita">
            {!! $errors->first('habilita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>