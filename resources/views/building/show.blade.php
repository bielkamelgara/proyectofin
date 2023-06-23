@extends('layouts.app')

@section('template_title')
    {{ $building->name ?? "{{ __('Show') Building" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Edificio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('buildings.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $building->address }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $building->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
