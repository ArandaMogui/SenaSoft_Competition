@extends('layouts.app')

@section('template_title')
    {{ $labPPruebasOpcione->name ?? __('Show') . " " . __('Lab P Pruebas Opcione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lab P Pruebas Opcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lab-p-pruebas-opciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Prueba:</strong>
                                    {{ $labPPruebasOpcione->id_prueba }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Opcion:</strong>
                                    {{ $labPPruebasOpcione->opcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Min F:</strong>
                                    {{ $labPPruebasOpcione->valor_ref_min_f }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Max F:</strong>
                                    {{ $labPPruebasOpcione->valor_ref_max_f }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Min M:</strong>
                                    {{ $labPPruebasOpcione->valor_ref_min_m }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Max M:</strong>
                                    {{ $labPPruebasOpcione->valor_ref_max_m }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
