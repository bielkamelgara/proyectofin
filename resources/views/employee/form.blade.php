<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('names', $employee->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('surnames', $employee->surnames, ['class' => 'form-control' . ($errors->has('surnames') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('surnames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('phone', $employee->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('sex', $employee->sex, ['class' => 'form-control' . ($errors->has('sex') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('sex', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
