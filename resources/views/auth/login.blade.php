@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link href="{{ asset('css/estiloslogin.css') }}" rel="stylesheet"/>
</head>
<body>  
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body p-5"> 
                            <div class="text-center text-primary">
                                <h4 >Iniciar Sesión</h4>
                            </div>
                            <br>
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

                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">
                                        <label class="form-label fw-bold" for="tipoIdentificacion">Tipo de identificación</label>
                                        <select id="tipoIdentificacion" name="tipoIdentificacion" class="form-control w-100" required>
                                            <option value="" disabled selected>Seleccione el tipo de identificación</option>
                                            <option value="cedula">Cédula de ciudadanía</option>
                                            <option value="tarjeta">Tarjeta de identidad</option>
                                            <option value="cedula_extranjeria">Cédula de extranjería</option>
                                            <option value="registro_civil">Registro civil</option>
                                            <option value="pasaporte">Pasaporte</option>
                                            <option value="adulto_sin_identificacion">Adulto sin identificación</option>
                                            <option value="menor_sin_identificacion">Menor sin identificación</option>
                                            <option value="numero_unico">Número único de identificación</option>
                                            <option value="certificado_nacido_vivo">Certificado de nacido vivo</option>
                                            <option value="salvoconducto">Salvoconducto</option>
                                            <option value="carnet_diplomatico">Carnet diplomático</option>
                                            <option value="permiso_especial">Permiso especial de permanencia</option>
                                            <option value="residente_paz">Residente especial para la paz</option>
                                            <option value="permiso_proteccion">Permiso por protección temporal</option>
                                            <option value="documento_extranjero">Documento extranjero</option>
                                        </select>
                                    </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label fw-bold" for="numeroIdentificacion">Número de identificación</label>
                                            <input type="number" id="numeroIdentificacion" name="numeroIdentificacion" class="form-control w-100" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label fw-bold" for="numeroIdentificacion">Número de identificación</label>
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
                            <img src="{{ asset('images/logoemp.png') }}" class="img-fluid mb-3" alt="logoempresa" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
