<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('username') }}
            {{ Form::text('username', auth()->user()->username, ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => 'Username']) }}
            {!! $errors->first('username', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', auth()->user()->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', auth()->user()->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nif') }}
            {{ Form::text('nif', auth()->user()->nif, ['class' => 'form-control' . ($errors->has('nif') ? ' is-invalid' : ''), 'placeholder' => 'Nif']) }}
            {!! $errors->first('nif', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname') }}
            {{ Form::text('surname',auth()->user()->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Surname']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telephone') }}
            {{ Form::text('telephone', auth()->user()->telephone, ['class' => 'form-control' . ($errors->has('telephone') ? ' is-invalid' : ''), 'placeholder' => 'Telephone']) }}
            {!! $errors->first('telephone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_registered') }}
            {{ Form::text('date_registered', auth()->user()->date_registered, ['class' => 'form-control' . ($errors->has('date_registered') ? ' is-invalid' : ''), 'placeholder' => 'Date Registered']) }}
            {!! $errors->first('date_registered', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('created_at') }}
            {{ Form::text('created_at',auth()->user()->created_at, ['class' => 'form-control' . ($errors->has('created_at') ? ' is-invalid' : ''), 'placeholder' => 'Created At']) }}
            {!! $errors->first('created_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_at') }}
            {{ Form::text('updated_at',auth()->user()->updated_at, ['class' => 'form-control' . ($errors->has('updated_at') ? ' is-invalid' : ''), 'placeholder' => 'Updated At']) }}
            {!! $errors->first('updated_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
