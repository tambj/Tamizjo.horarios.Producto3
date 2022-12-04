<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_course') }}
            {{ Form::number('id_course', $percentage->id_course, ['class' => 'form-control' . ($errors->has('id_course') ? ' is-invalid' : ''), 'placeholder' => 'Id Course']) }}
            {!! $errors->first('id_course', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_class') }}
            {{ Form::number('id_class', $percentage->id_class, ['class' => 'form-control' . ($errors->has('id_class') ? ' is-invalid' : ''), 'placeholder' => 'Id Class']) }}
            {!! $errors->first('id_class', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('continuous_assessment') }}
            {{ Form::number('continuous_assessment', $percentage->continuous_assessment, ['class' => 'form-control' , 'step'=>'any' . ($errors->has('continuous_assessment') ? ' is-invalid' : ''), 'placeholder' => 'Continuous Assessment']) }}
            {!! $errors->first('continuous_assessment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exams') }}
            {{ Form::number('exams', $percentage->exams, ['class' => 'form-control','step'=>'any' . ($errors->has('exams') ? ' is-invalid' : ''), 'placeholder' => 'Exams']) }}
            {!! $errors->first('exams', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
