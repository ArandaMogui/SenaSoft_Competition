<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_prueba" class="form-label">{{ __('Id Prueba') }}</label>
            <input type="text" name="id_prueba" class="form-control @error('id_prueba') is-invalid @enderror" value="{{ old('id_prueba', $labPPruebasOpcione?->id_prueba) }}" id="id_prueba" placeholder="Id Prueba">
            {!! $errors->first('id_prueba', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="opcion" class="form-label">{{ __('Opcion') }}</label>
            <input type="text" name="opcion" class="form-control @error('opcion') is-invalid @enderror" value="{{ old('opcion', $labPPruebasOpcione?->opcion) }}" id="opcion" placeholder="Opcion">
            {!! $errors->first('opcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor_ref_min_f" class="form-label">{{ __('Valor Ref Min F') }}</label>
            <input type="text" name="valor_ref_min_f" class="form-control @error('valor_ref_min_f') is-invalid @enderror" value="{{ old('valor_ref_min_f', $labPPruebasOpcione?->valor_ref_min_f) }}" id="valor_ref_min_f" placeholder="Valor Ref Min F">
            {!! $errors->first('valor_ref_min_f', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor_ref_max_f" class="form-label">{{ __('Valor Ref Max F') }}</label>
            <input type="text" name="valor_ref_max_f" class="form-control @error('valor_ref_max_f') is-invalid @enderror" value="{{ old('valor_ref_max_f', $labPPruebasOpcione?->valor_ref_max_f) }}" id="valor_ref_max_f" placeholder="Valor Ref Max F">
            {!! $errors->first('valor_ref_max_f', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor_ref_min_m" class="form-label">{{ __('Valor Ref Min M') }}</label>
            <input type="text" name="valor_ref_min_m" class="form-control @error('valor_ref_min_m') is-invalid @enderror" value="{{ old('valor_ref_min_m', $labPPruebasOpcione?->valor_ref_min_m) }}" id="valor_ref_min_m" placeholder="Valor Ref Min M">
            {!! $errors->first('valor_ref_min_m', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor_ref_max_m" class="form-label">{{ __('Valor Ref Max M') }}</label>
            <input type="text" name="valor_ref_max_m" class="form-control @error('valor_ref_max_m') is-invalid @enderror" value="{{ old('valor_ref_max_m', $labPPruebasOpcione?->valor_ref_max_m) }}" id="valor_ref_max_m" placeholder="Valor Ref Max M">
            {!! $errors->first('valor_ref_max_m', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>