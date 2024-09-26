@include('include.barra')

@extends('layouts.app')

@section('template_title')
Personas
@endsection

@section('content')
<div class="d-flex">
    <div class="main-content">
        <div class="content-wrapper">

            <head>
                <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            </head>

            <div class="container-fluid my-4">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title" class="w-100 text-center">
                                {{ __('Usuario') }}
                            </span>
                        
                        </div>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body bg-white">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="thead">
                                            <tr>
                                                <th>Documento</th>
                                                <th>Primer Apellido</th>
                                                <th>Segundo Apellido</th>
                                                <th>Primer Nombre</th>
                                                <th>Segundo Nombre</th>
                                                <th>Fecha Nacimiento</th>
                                                <th>Direccion</th>
                                                <th>Tel Movil</th>
                                                <th>Email</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($personas as $persona)
                                            <tr>
                                                <td>{{ $persona->numeroid }}</td>
                                                <td>{{ $persona->apellido1 }}</td>
                                                <td>{{ $persona->apellido2 }}</td>
                                                <td>{{ $persona->nombre1 }}</td>
                                                <td>{{ $persona->nombre2 }}</td>
                                                <td>{{ $persona->fechanac }}</td>
                                                <td>{{ $persona->direccion }}</td>
                                                <td>{{ $persona->tel_movil }}</td>
                                                <td>{{ $persona->email }}</td>
                                                <td>
                                                    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary" href="{{ route('personas.show', $persona->id) }}">
                                                            <i class="fa fa-fw fa-eye"></i> 
                                                        </a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('personas.edit', $persona->id) }}">
                                                            <i class="fa fa-fw fa-edit"></i> 
                                                        </a>
                                                       
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $personas->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('js/datatable.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>

<script>
    document.getElementById('menu_toggle').addEventListener('click', function() {
        const menuSide = document.getElementById('menu_side');
        menuSide.classList.toggle('active'); // Alterna la clase 'active'
        document.body.classList.toggle('body_move'); // Alterna la clase 'body_move' para ajustar el margen del body
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener('click', function(event) {
        const menuSide = document.getElementById('menu_side');
        const menuToggle = document.getElementById('menu_toggle');
        const isClickInsideMenu = menuSide.contains(event.target);
        const isClickOnToggle = menuToggle.contains(event.target);

        // Si el menú está abierto y el clic no es en el menú ni en el botón de hamburguesa
        if (menuSide.classList.contains('active') && !isClickInsideMenu && !isClickOnToggle) {
            menuSide.classList.remove('active'); // Cerrar el menú
            document.body.classList.remove('body_move'); // Ajustar el margen del body
        }
    });
</script>
