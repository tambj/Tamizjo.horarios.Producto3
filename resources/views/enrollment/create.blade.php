@extends('layouts.app')

@section('template_title')
Nueva matrícula
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nueva matrícula</h1>
    <form method="POST" action="{{ route('admin.enrollments.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
        @include('enrollment.form')
    </form>
</section>
@endsection
