<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista de Exercicios')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            padding-top: 70px; /* Adjust as needed for navbar height */
        }
        .main-content {
            padding: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">  {{-- Updated Navbar Classes --}}
        <div class="container">
            <a class="navbar-brand" href="#">@yield('app_name', 'Exercicios')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">  {{-- Added ID for toggling --}}
                <ul class="navbar-nav">
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="{{ route('lista-um-ex-um') }}">Exercício 1</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="{{ route('lista-um-ex-dois') }}">Exercício 2</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 3</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 5</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 6</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 7</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 8</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 9</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 10</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 11</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 12</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 13</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 14</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                    <li class="nav-item">  {{-- Add Bootstrap class to <li> --}}
                        <a class="nav-link" href="#">Exercício 15</a>  {{-- Add Bootstrap class to <a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row justify-content-center">  {{-- Centering with Bootstrap 5 --}}
            <div class="col-md-8 main-content">  {{-- Updated column class --}}
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>