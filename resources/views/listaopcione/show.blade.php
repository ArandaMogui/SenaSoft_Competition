@extends('layouts.app')

@section('template_title')
    {{ $listaopcione->name ?? __('Show') . " " . __('Listaopcione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Listaopcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('listaopciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Variable:</strong>
                                    {{ $listaopcione->variable }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $listaopcione->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor:</strong>
                                    {{ $listaopcione->valor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $listaopcione->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Abreviacion:</strong>
                                    {{ $listaopcione->abreviacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Habilita:</strong>
                                    {{ $listaopcione->habilita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
