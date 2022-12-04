<div class="row justify-content-center">
    <div class="col-md-4 col-sm-12">
        
        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="id_course">Username</label>
            </div>
            {{ Form::text('username', $user->username, ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => 'Username']) }}
            {!! $errors->first('username', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
        <div class="d-flex mb-2">
                <label for="id_course">Email</label>
            </div>
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        <div class="d-flex mb-2">
                <label for="id_course">Nombre del alumno</label>
            </div>
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del alumno']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        <div class="d-flex mb-2">
                <label for="id_course">Apellido del alumno</label>
            </div>
            {{ Form::text('surname', $user->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido del alumno']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
        <div class="d-flex mb-2">
                <label for="id_course">NIF del alumno</label>
            </div>
            {{ Form::text('nif', $user->nif, ['class' => 'form-control' . ($errors->has('nif') ? ' is-invalid' : ''), 'placeholder' => 'NIF del alumno']) }}
            {!! $errors->first('nif', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
        <div class="d-flex mb-2">
                <label for="id_course">Teléfono</label>
            </div>
            {{ Form::text('telephone', $user->telephone, ['class' => 'form-control' . ($errors->has('telephone') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('telephone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        <div class="d-flex mb-2">
                <label for="id_course">Fecha de matrícula</label>
            </div>
            {{ Form::date('date_registered', $user->date_registered, ['class' => 'form-control' . ($errors->has('date_registered') ? ' is-invalid' : ''), 'placeholder' => 'Date Registered']) }}
            {!! $errors->first('date_registered', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>
        <div class="form-group">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('admin.users.index') }}"> Cancelar</a>
            </div>
        </div>
    </div>    
</div>