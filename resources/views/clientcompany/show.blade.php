@extends('layouts.app')

@section('template_title')
    {{ $clientcompany->name ?? "{{ __('Show') Clientcompany" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Compañia cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientcompanies.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre compañia:</strong>
                            {{ $clientcompany->name }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $clientcompany->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de contacto:</strong>
                            {{ $clientcompany->contact_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
