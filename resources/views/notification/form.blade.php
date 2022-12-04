<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_student') }}
            {{ Form::number('id_student', $notification->id_student, ['class' => 'form-control' . ($errors->has('id_student') ? ' is-invalid' : ''), 'placeholder' => 'Id Student']) }}
            {!! $errors->first('id_student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('work') }}
            {{ Form::number('work', $notification->work, ['class' => 'form-control' . ($errors->has('work') ? ' is-invalid' : ''), 'placeholder' => 'Work']) }}
            {!! $errors->first('work', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exam') }}
            {{ Form::number('exam', $notification->exam, ['class' => 'form-control' . ($errors->has('exam') ? ' is-invalid' : ''), 'placeholder' => 'Exam']) }}
            {!! $errors->first('exam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('continuous_assessment') }}
            {{ Form::number('continuous_assessment', $notification->continuous_assessment, ['class' => 'form-control' . ($errors->has('continuous_assessment') ? ' is-invalid' : ''), 'placeholder' => 'Continuous Assessment']) }}
            {!! $errors->first('continuous_assessment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('final_note') }}
            {{ Form::number('final_note', $notification->final_note, ['class' => 'form-control','step'=>'any' . ($errors->has('final_note') ? ' is-invalid' : ''), 'placeholder' => 'Final Note']) }}
            {!! $errors->first('final_note', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
