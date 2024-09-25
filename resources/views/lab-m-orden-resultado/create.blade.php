@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Lab M Orden Resultado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Lab M Orden Resultado</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('lab-m-orden-resultados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lab-m-orden-resultado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
