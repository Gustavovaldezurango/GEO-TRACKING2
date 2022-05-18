<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <title>Geo-Trancking</title>

</head>

<body>
    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div id="logo-plantilla">
                <img src="img/logo.jpg">
            </div>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Mapa</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="conductors"> conductores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="empresas">Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="vehiculos">Vehiculos</a>
                        </li>
                    </ul>

                </div>

                <div>
                    <ul class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @auth
                                {{ auth()->user()->name ?? auth()->user()->username }}

                            @endauth

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">#</a></li>
                            <li><a class="dropdown-item" href="#">#</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                        </ul>
                    </ul>
                </div>
            </div>

        </nav>

    </header>
    <div class="container">
        @yield('contenido')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
