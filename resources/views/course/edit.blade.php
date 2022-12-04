@extends('layouts.app')

@section('template_title')
    Update Course
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Editar curso</h1>
    <form method="POST" action="{{ route('admin.courses.update', $course->id) }}" role="form" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
        @csrf
        @include('course.form')
    </form>
</section>
@endsection