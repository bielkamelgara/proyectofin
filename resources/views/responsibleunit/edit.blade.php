@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Responsibleunit
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Responsable de unidad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('responsibleunits.update', $responsibleunit->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('responsibleunit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
