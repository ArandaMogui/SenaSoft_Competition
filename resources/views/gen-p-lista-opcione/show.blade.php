@extends('layouts.app')

@section('template_title')
    {{ $genPListaOpcione->name ?? __('Show') . " " . __('Gen P Lista Opcione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Gen P Lista Opcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('gen-p-lista-opciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Variable:</strong>
                                    {{ $genPListaOpcione->variable }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $genPListaOpcione->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor:</strong>
                                    {{ $genPListaOpcione->valor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $genPListaOpcione->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Abreviacion:</strong>
                                    {{ $genPListaOpcione->abreviacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Habilita:</strong>
                                    {{ $genPListaOpcione->habilita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
