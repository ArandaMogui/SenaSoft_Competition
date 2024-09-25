@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? __('Show') . " " . __('Persona') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Numeroid:</strong>
                                    {{ $persona->numeroid }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido1:</strong>
                                    {{ $persona->apellido1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido2:</strong>
                                    {{ $persona->apellido2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre1:</strong>
                                    {{ $persona->nombre1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre2:</strong>
                                    {{ $persona->nombre2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechanac:</strong>
                                    {{ $persona->fechanac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $persona->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tel Movil:</strong>
                                    {{ $persona->tel_movil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $persona->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipoid:</strong>
                                    {{ $persona->id_tipoid }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Sexobiologico:</strong>
                                    {{ $persona->id_sexobiologico }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
