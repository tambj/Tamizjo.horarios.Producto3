@extends('layouts.app')

@section('template_title')
Modificar alumno
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Modificar alumno</h1>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}" role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        @include('user.form')
    </form>
</section>
@endsection