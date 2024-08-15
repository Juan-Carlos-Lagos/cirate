<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    @section('title','Registro Usuario')

    @section('content')
    <div class="container d-flex">
        <form action="" method="POST" class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
            @csrf
            <h2 class="text-center">
                Registro usuario
            </h2>

            <div class="form-group">
                <label for="exampleInputNombres">Nombres</label>
                <input name="nombres" type="text" class="form-control" id="exampleInputNombres" placeholder="Ingrese sus nombres">
                @error('nombres')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputApellidos">Apellidos</label>
                <input name="apellidos" type="text" class="form-control" id="exampleInputApellidos" placeholder="Ingrese sus apellidos">
                @error('apellidos')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@email.com">
                @error('email')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPasswordConfirmation">Password confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPasswordConfirmation" placeholder="Confirm Password">
                @error('password_confirmation')
                <small class="text-danger mt-1">
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>

            <div class="mt-3 text-center">
                <a href="{{ route('login') }}">Ingresar</a>
            </div>

        </form>
    </div>
</body>

</html>