<div class="row justify-content-center">
    <div class="col-md-4 col-sm-12">

        <div class="form-group">
            <div class="mb-2">
                <div class="d-flex mb-2">
                    <label for="id_student">ID Estudiante</label>
                </div>
                {{ Form::number('id_student', $enrollment->id_student, ['class' => 'form-control' . ($errors->has('id_student') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiante']) }}
                {!! $errors->first('id_student', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="id_course">ID Curso</label>
            </div>
            {{ Form::number('id_course', $enrollment->id_course, ['class' => 'form-control' . ($errors->has('id_course') ? ' is-invalid' : ''), 'placeholder' => 'Id Curso']) }}
            {!! $errors->first('id_course', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="status">Estado</label>
            </div>
            {{ Form::number('status', $enrollment->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>




        <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>


        <div class="form-group mb-5">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('admin.enrollments.index') }}"> Cancelar</a>
            </div>
        </div>
    </div>
</div>