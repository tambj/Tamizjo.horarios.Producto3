@extends('layouts.app')

@section('template_title')
Nuevo alumno
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nuevo alumno</h1>
    <form method="POST" action="{{ route('admin.users.create') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('user.form')
    </form>
</section>
@endsection
