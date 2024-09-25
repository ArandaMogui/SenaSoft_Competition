
<body>  
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-5"> 
                <div class="text-center  text-primary">
                  <h4 class="mt-1 mb-5 pb-1">Iniciar Sesión</h4>
                </div>
                <div class="text-center">
                  <p>Ingresa los siguientes datos para iniciar sesión</p>
                </div>
                <div class="card shadow-sm">
                  <div class="card-body">

                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('login_error'))
                    <div class="alert alert-danger">{{ session('login_error') }}</div>
                @endif

                   <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="tipoIdentificacion">Tipo de identificación</label>
                        <select id="tipoIdentificacion" name="tipoIdentificacion" class="form-control w-100">
                            <option value="" disabled selected>Seleccione un tipo de identificación</option>
                            <option value="cedula">Cédula de ciudadanía</option>
                            <option value="tarjeta">Tarjeta de identidad</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="numeroIdentificacion">Número de identificación</label>
                        <input type="number" id="numeroIdentificacion" name="numeroIdentificacion" class="form-control w-100" required />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control w-100" required />
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <button type="submit" class="btn btn-primary btn-block fa-lg mb-4">Ingresar</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <img src="{{asset('images/logoemp.png')}}" class="img-fluid mb-3" alt="logoempresa" />
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
