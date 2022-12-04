@extends('layouts.app')

@section('template_title')
Nuevo curso
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nuevo curso</h1>
    <form method="POST" action="{{ route('admin.courses.store') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('course.form')
    </form>
</section>
@endsection