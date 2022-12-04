@extends('layouts.app')

@section('template_title')
Crear Clase
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nueva clase</h1>
    <form method="POST" action="{{ route('admin.clases.store') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('clase.form')
    </form>
</section>
@endsection