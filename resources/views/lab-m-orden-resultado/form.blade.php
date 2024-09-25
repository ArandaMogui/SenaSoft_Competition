<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $labMOrdenResultado?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_orden" class="form-label">{{ __('Id Orden') }}</label>
            <input type="text" name="id_orden" class="form-control @error('id_orden') is-invalid @enderror" value="{{ old('id_orden', $labMOrdenResultado?->id_orden) }}" id="id_orden" placeholder="Id Orden">
            {!! $errors->first('id_orden', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_prueba" class="form-label">{{ __('Id Prueba') }}</label>
            <input type="text" name="id_prueba" class="form-control @error('id_prueba') is-invalid @enderror" value="{{ old('id_prueba', $labMOrdenResultado?->id_prueba) }}" id="id_prueba" placeholder="Id Prueba">
            {!! $errors->first('id_prueba', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_procedimiento" class="form-label">{{ __('Id Procedimiento') }}</label>
            <input type="text" name="id_procedimiento" class="form-control @error('id_procedimiento') is-invalid @enderror" value="{{ old('id_procedimiento', $labMOrdenResultado?->id_procedimiento) }}" id="id_procedimiento" placeholder="Id Procedimiento">
            {!! $errors->first('id_procedimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_pruebaopcion" class="form-label">{{ __('Id Pruebaopcion') }}</label>
            <input type="text" name="id_pruebaopcion" class="form-control @error('id_pruebaopcion') is-invalid @enderror" value="{{ old('id_pruebaopcion', $labMOrdenResultado?->id_pruebaopcion) }}" id="id_pruebaopcion" placeholder="Id Pruebaopcion">
            {!! $errors->first('id_pruebaopcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="res_opcion" class="form-label">{{ __('Res Opcion') }}</label>
            <input type="text" name="res_opcion" class="form-control @error('res_opcion') is-invalid @enderror" value="{{ old('res_opcion', $labMOrdenResultado?->res_opcion) }}" id="res_opcion" placeholder="Res Opcion">
            {!! $errors->first('res_opcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="res_numerico" class="form-label">{{ __('Res Numerico') }}</label>
            <input type="text" name="res_numerico" class="form-control @error('res_numerico') is-invalid @enderror" value="{{ old('res_numerico', $labMOrdenResultado?->res_numerico) }}" id="res_numerico" placeholder="Res Numerico">
            {!! $errors->first('res_numerico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="res_texto" class="form-label">{{ __('Res Texto') }}</label>
            <input type="text" name="res_texto" class="form-control @error('res_texto') is-invalid @enderror" value="{{ old('res_texto', $labMOrdenResultado?->res_texto) }}" id="res_texto" placeholder="Res Texto">
            {!! $errors->first('res_texto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="res_memo" class="form-label">{{ __('Res Memo') }}</label>
            <input type="text" name="res_memo" class="form-control @error('res_memo') is-invalid @enderror" value="{{ old('res_memo', $labMOrdenResultado?->res_memo) }}" id="res_memo" placeholder="Res Memo">
            {!! $errors->first('res_memo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_procesamientos" class="form-label">{{ __('Num Procesamientos') }}</label>
            <input type="text" name="num_procesamientos" class="form-control @error('num_procesamientos') is-invalid @enderror" value="{{ old('num_procesamientos', $labMOrdenResultado?->num_procesamientos) }}" id="num_procesamientos" placeholder="Num Procesamientos">
            {!! $errors->first('num_procesamientos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>