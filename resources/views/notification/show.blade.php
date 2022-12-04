@extends('layouts.app')

@section('template_title')
    {{ $notification->name ?? 'Show Notification' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Notification</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.notifications.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Student:</strong>
                            {{ $notification->id_student }}
                        </div>
                        <div class="form-group">
                            <strong>Work:</strong>
                            {{ $notification->work }}
                        </div>
                        <div class="form-group">
                            <strong>Exam:</strong>
                            {{ $notification->exam }}
                        </div>
                        <div class="form-group">
                            <strong>Continuous Assessment:</strong>
                            {{ $notification->continuous_assessment }}
                        </div>
                        <div class="form-group">
                            <strong>Final Note:</strong>
                            {{ $notification->final_note }}
                        </div>
                        <div class="form-group">
                            <strong>Created At:</strong>
                            {{ $notification->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Updated At:</strong>
                            {{ $notification->updated_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
