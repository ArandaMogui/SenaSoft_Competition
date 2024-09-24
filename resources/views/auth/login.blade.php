<!doctype html>
<html lang="en">
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link
        href={{ asset('assets/login_estilos.css') }}
        rel="stylesheet"/>
</head>

<body>  
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="{{asset('images/salud.jpg')}}"
                    style="width: 300px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Iniciar Sesión</h4>
                </div>
                <form action="/register" method="POST" class="formulario_registro" id="formulario_registro">
                 @csrf
                <div class="text-center">
                <p>Ingresa los siguientes datos para iniciar sesión</p>
                </div>

                <div class="card shadow-sm" >
                  <div class="card-body">
                    <form>
                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Tipo de identificación</label>
                        <input type="text" id="form2Example11" class="form-control w-100" placeholder="Ejemplo: cédula de ciudadanía" />
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example22">Número de identificación</label>
                        <input type="number" id="form2Example22" class="form-control w-100" />
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form2Example33">Fecha de nacimiento</label>
                        <input type="date" id="form2Example33" class="form-control w-100" />
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg  mb-4 type="button">Ingresar</button>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
                  <div class="col-lg-6 d-flex align-items-center">
          <div class="text-white px-3 py-4 p-md-5 mx-md-4">
            
              <img src="{{asset('images/logoemp.png')}}" class="img-fluid mb-3" alt="Descripción de la imagen 1" />
             
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

</body>
</html>
