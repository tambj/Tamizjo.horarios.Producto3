@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $user->username }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Nif:</strong>
                            {{ $user->nif }}
                        </div>
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $user->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Telephone:</strong>
                            {{ $user->telephone }}
                        </div>
                        <div class="form-group">
                            <strong>Date Registered:</strong>
                            {{ $user->date_registered }}
                        </div>
                        <div class="form-group">
                            <strong>Created At:</strong>
                            {{ $user->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Updated At:</strong>
                            {{ $user->updated_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
