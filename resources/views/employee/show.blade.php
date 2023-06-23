@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostar') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $employee->names }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $employee->surnames }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $employee->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $employee->sex }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
