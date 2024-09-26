<div class="row padding-1 p-1">
    <div class="col-md-12">
        

        <div class="form-group mb-2 mb20">
            <label for="apellido1" class="form-label">{{ __('Apellido1') }}</label>
            <input type="text" name="apellido1" class="form-control @error('apellido1') is-invalid @enderror" value="{{ old('apellido1', $persona?->apellido1) }}" id="apellido1" placeholder="Apellido1">
            {!! $errors->first('apellido1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido2" class="form-label">{{ __('Apellido2') }}</label>
            <input type="text" name="apellido2" class="form-control @error('apellido2') is-invalid @enderror" value="{{ old('apellido2', $persona?->apellido2) }}" id="apellido2" placeholder="Apellido2">
            {!! $errors->first('apellido2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre1" class="form-label">{{ __('Nombre1') }}</label>
            <input type="text" name="nombre1" class="form-control @error('nombre1') is-invalid @enderror" value="{{ old('nombre1', $persona?->nombre1) }}" id="nombre1" placeholder="Nombre1">
            {!! $errors->first('nombre1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre2" class="form-label">{{ __('Nombre2') }}</label>
            <input type="text" name="nombre2" class="form-control @error('nombre2') is-invalid @enderror" value="{{ old('nombre2', $persona?->nombre2) }}" id="nombre2" placeholder="Nombre2">
            {!! $errors->first('nombre2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechanac" class="form-label">{{ __('Fechanac') }}</label>
            <input type="text" name="fechanac" class="form-control @error('fechanac') is-invalid @enderror" value="{{ old('fechanac', $persona?->fechanac) }}" id="fechanac" placeholder="Fechanac">
            {!! $errors->first('fechanac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $persona?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tel_movil" class="form-label">{{ __('Tel Movil') }}</label>
            <input type="text" name="tel_movil" class="form-control @error('tel_movil') is-invalid @enderror" value="{{ old('tel_movil', $persona?->tel_movil) }}" id="tel_movil" placeholder="Tel Movil">
            {!! $errors->first('tel_movil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $persona?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>