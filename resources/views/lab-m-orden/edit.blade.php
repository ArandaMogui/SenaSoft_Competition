@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Lab M Orden
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Lab M Orden</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('lab-m-ordens.update', $labMOrden->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('lab-m-orden.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
