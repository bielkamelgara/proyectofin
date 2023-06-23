@extends('layouts.app')

@section('template_title')
    {{ $projectchief->name ?? "{{ __('Show') Projectchief" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Jefe de proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projectchiefs.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $projectchief->name }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $projectchief->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $projectchief->sex }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
