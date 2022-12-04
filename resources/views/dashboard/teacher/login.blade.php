@extends('layouts.app')

@section('content')

<body>
    <div class="container text-center">
        <h1 class="mb-5 mt-5">Login Profesor</h1>

        <h4 class="text-center mt-3">Si ya tienes una cuenta puedes iniciar sesión.</h4>
        <br>
        <div class="row justify-content-center">
            <div class="col-4">
                <div id="tabla-formulario">

                    <form action="{{ route('teacher.check') }}" method="post" autocomplete="off">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="boton-sesion">Login</button>
                        </div>
                        <br>

                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection
