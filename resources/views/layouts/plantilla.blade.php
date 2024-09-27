<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- prueba estilos css carpeta -->
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">

    <!-- realmente se necesitan estos estilos? -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- ---- -->
    <!-- Estilos para directorio -->
    <link rel="stylesheet" href="{{ asset('css/directorio.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="row w-100">
        <div class="col-md-2">
            <div class="p-3 flex-shrink-0 bg-dark text-white h-100">
                <!-- Contenido del sidebar -->
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">Cirate10</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    @php
                    $segment = Request::segment(1);
                    @endphp
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ $segment == 'home' ? 'active' : '' }}" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reporte.nuevo') }}" class="nav-link {{ $segment == 'reporte' ? 'active' : '' }}" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#reporte" />
                            </svg>
                            Reportes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('planta.busqueda') }}" class="nav-link {{ $segment == 'planta' ? 'active' : '' }}" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#planta" />
                            </svg>
                            Planta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#directorioSubmenu" class="nav-link {{ $segment == 'directorio' ? 'active' : '' }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="directorioSubmenu">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Directorio
                        </a>
                        <ul class="collapse nav flex-column ms-3 {{ $segment == 'directorio' ? 'show' : '' }}" id="directorioSubmenu">
                            <li class="nav-item">
                                <a href="{{ route('directorio.buscar') }}" class="nav-link">Buscar</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ingresar') }}" class="nav-link">Ingresar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#radioSubmenu" class="nav-link {{ $segment == 'radios' ? 'active' : '' }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="radioSubmenu">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Radios
                        </a>
                        <ul class="collapse nav flex-column ms-3 {{ $segment == 'radios' ? 'show' : '' }}" id="radioSubmenu">
                            <li class="nav-item">
                                <a href="{{ route('radios.buscar') }}" class="nav-link">Buscar grabacion</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('radios.cargaTabla') }}" class="nav-link">Actualizar</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('usuarios.nuevo') }}" class="nav-link {{ $segment == 'usuarios' ? 'active' : '' }}" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#usuarios" />
                            </svg>
                            Usuarios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('bd.backup') }}" class="nav-link {{ $segment == 'bd' ? 'active' : '' }}" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#bd" />
                            </svg>
                            BD
                        </a>
                    </li>

                </ul>
                
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>Opciones</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            @yield('structure')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sidebars.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('scripts')
    
</body>

</html>