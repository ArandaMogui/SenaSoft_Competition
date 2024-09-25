@extends('layouts.app')

@section('template_title')
    {{ $pruebasopcione->name ?? __('Show') . " " . __('Pruebasopcione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pruebasopcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pruebasopciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Prueba:</strong>
                                    {{ $pruebasopcione->id_prueba }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Opcion:</strong>
                                    {{ $pruebasopcione->opcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Min F:</strong>
                                    {{ $pruebasopcione->valor_ref_min_f }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Max F:</strong>
                                    {{ $pruebasopcione->valor_ref_max_f }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Min M:</strong>
                                    {{ $pruebasopcione->valor_ref_min_m }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Ref Max M:</strong>
                                    {{ $pruebasopcione->valor_ref_max_m }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
