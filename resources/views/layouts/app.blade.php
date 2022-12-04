<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Paytone+One&display=swap" rel="stylesheet">
    <!-- Libreria de iconos de FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />   
    <!-- Hoja de estilos css  -->
    <link href="{{ asset('css\styles.css') }}" rel="stylesheet">
    <!-- Calendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg nav-tamizjo">  
            <div class="container">
                 
                 @guest<a class="navbar-brand" href="/">@endguest
                 @auth('admin')<a class="navbar-brand" href="{{ route('admin.home') }}">@endauth
                 @auth('teacher')<a class="navbar-brand" href="{{ route('teacher.home') }}">@endauth
                 @auth('web')<a class="navbar-brand" href="{{ route('user.home') }}">@endauth
                    <img src="{{ asset('img\tamizjo.png') }}" alt="" width="35" height="35" class="d-inline-block align-text-top">
                    Tamizjo.horarios
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @auth('admin')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-eye-fill"></i> Vistas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('admin.home') }}"><i class="bi bi-house"></i> Inicio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.users.index') }}"><i class="bi bi-mortarboard-fill"></i> Alumnos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.teachers.index') }}"><i class="bi bi-briefcase-fill"></i> Profesores</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.courses.index') }}"><i class="bi bi-clipboard-check"></i> Cursos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.enrollments.index') }}"><i class="bi bi-journal-text"></i> Matrículas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.schedules.index') }}"><i class="bi bi-alarm-fill"></i> Horarios</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.clases.index') }}"><i class="bi bi-easel"></i> Clases</a></li>                                                       
                                </ul>
                            </li>
                        @endauth

                        @auth('teacher')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-eye-fill"></i> Vistas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('user.home') }}"><i class="bi bi-house"></i> Inicio</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.home') }}"><i class="bi bi-mortarboard-fill"></i> Alumnos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.home') }}"><i class="bi bi-clipboard-check"></i> Cursos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.home') }}"><i class="bi bi-book"></i> Asignaturas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.home') }}"><i class="bi bi-journal-bookmark-fill"></i> Trabajos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.home') }}"><i class="bi bi-ui-checks"></i> Examenes</a></li>

                                                               
                                </ul>
                            </li>
                        @endauth

                        @auth('web')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-eye-fill"></i> Vistas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('teacher.home') }}"><i class="bi bi-house"></i> Inicio / Calendario</a></li>
                                    <li><a class="dropdown-item" href="{{ route('teacher.home') }}"><i class="bi bi-clipboard-check"></i> Cursos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('teacher.home') }}"><i class="bi bi-book"></i> Asignaturas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('teacher.home') }}"><i class="bi bi-journal-bookmark-fill"></i> Trabajos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('teacher.home') }}"><i class="bi bi-ui-checks"></i> Examenes</a></li>

                                                               
                                </ul>
                            </li>
                        @endauth

                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi bi-person-fill"></i>    
                                    {{ Auth::user()->name }}
                                    
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-file-person"></i> Mi perfil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-arrow-bar-left"></i>
                                        {{ __('Cerrar sesión') }}
                                    </a></li>
                                </ul>


                                    
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
</body>

<!-- Footer -->
<footer class="text-center text-white fixed-bottom footer-tamizjo">
    <!-- Copyright -->
    <div class="text-center p-3"> TAMIZJO</div>
    <!-- Copyright -->
</footer>

</html>
