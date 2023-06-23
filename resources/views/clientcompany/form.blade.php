<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre Compañia') }}
            {{ Form::text('name', $clientcompany->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('phone', $clientcompany->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de contacto') }}
            {{ Form::text('contact_name', $clientcompany->contact_name, ['class' => 'form-control' . ($errors->has('contact_name') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('contact_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
