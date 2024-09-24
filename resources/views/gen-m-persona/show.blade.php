@extends('layouts.app')

@section('template_title')
    {{ $genMPersona->name ?? __('Show') . " " . __('Gen M Persona') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Gen M Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('gen-m-personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Numeroid:</strong>
                                    {{ $genMPersona->numeroid }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido1:</strong>
                                    {{ $genMPersona->apellido1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido2:</strong>
                                    {{ $genMPersona->apellido2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre1:</strong>
                                    {{ $genMPersona->nombre1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre2:</strong>
                                    {{ $genMPersona->nombre2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechanac:</strong>
                                    {{ $genMPersona->fechanac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $genMPersona->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tel Movil:</strong>
                                    {{ $genMPersona->tel_movil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $genMPersona->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipoid:</strong>
                                    {{ $genMPersona->id_tipoid }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Sexobiologico:</strong>
                                    {{ $genMPersona->id_sexobiologico }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
