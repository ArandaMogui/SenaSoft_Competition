@extends('layouts.app')

@section('template_title')
    {{ $genPListaOpcion->name ?? __('Show') . " " . __('Gen P Lista Opcion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Gen P Lista Opcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('gen-p-lista-opcions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Variable:</strong>
                                    {{ $genPListaOpcion->variable }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $genPListaOpcion->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor:</strong>
                                    {{ $genPListaOpcion->valor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $genPListaOpcion->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Abreviacion:</strong>
                                    {{ $genPListaOpcion->abreviacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Habilita:</strong>
                                    {{ $genPListaOpcion->habilita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
