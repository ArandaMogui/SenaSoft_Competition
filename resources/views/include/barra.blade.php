<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilosbarra.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/estilos_accesibilidad.css')}}">
    <link href="{{ asset('css/estilos_footer.css')}}" rel="stylesheet">
    <script src="https://cdn.userway.org/widget.js" data-account="whmJm4JFhq"></script>
    <script src="{{asset('js/tooltips.js')}}" defer></script>
</head>

<body id="body">
<header>
    <div class="icon__menu" style="display:none">
        <i class='bx bx-menu' id="btn_open"></i>
    </div>
    <div class="menu__toggle" id="menu_toggle">
        <i class='bx bx-menu'></i>
    </div>
    <div class="titulo">
        <h1>Órdenes de laboratorio</h1>
    </div>
</header>


    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i><img class="logos" src="{{ asset('img/LogoBlanco_Ferreteria.png') }}" alt=""></i>
        </div>
        <span id="liPanel" class="li">Panel</span>
        <div id="onlinePanel" class="online"></div>

        <div class="options__menu">

            <a tooltip="tooltip" data-bs-placement="right" title="ordenes" href="/ordenes" class="{{ request()->route()->named('ordenes') ? 'selected' : '' }}">
                <div class="option">
                    <i class="fas fa-home"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a tooltip="tooltip" data-bs-placement="right" title="ordenes" href="/personas" class="{{ request()->route()->named('personas') ? 'selected' : '' }}">
                <div class="option">
                    <i class="fas fa-user"></i>
                    <h4>Perfil</h4>
                </div>
            </a>


        </div>
    </div>
    <script src="{{ asset('js/acceso.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>