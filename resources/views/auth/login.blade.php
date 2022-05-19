@extends('layouts.plantillalogin')
@section('content')
    <div id="caja_form">
        <h3 id="iniciar-sesion">Iniciar Sesion</h3>
        <form action="/login" method="POST">
            @csrf
            @if ($message = Session::get('Error'))
                <div class="col alert alert-danger alert-dismissable fade show">
                    {{ $message }}
                </div>
            @endif
            <div class="contain">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16" id="icongmail">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </div>

                <div class="mb-3" id="input">
                    <small>Username/Email</small>

                    <input type="text" name="username" class="form-control" id="username" aria-describedby="username"
                        placeholder="Ingrese su nombre" required>
                    @error('username')
                        <small>*{{ $message }}</small>
                    @enderror

                </div>
            </div>
            <div class="contain">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16" id="icongmail">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                      </svg>
                </div>
                <div class="mb-3" id="input">
                    <small>Password</small>
                    <input type="password" name="password" class="form-control" id="password" aria-describedby="password" required>
                    @error('password')
                        <small>*{{ $message }}</small>
                    @enderror
                    <input type="checkbox" name="vercontraseña " id="vercontraseña" onclick="mostrarContrasena()"> ver
                    contraseña
                    <div>
                        <input type="checkbox" >
                        <label class="form-check-label" for="exampleCheck1">recordar</label>
                    </div>
                </div>
            </div>







            <div id="caja-button">
                <button id="button" type="submit" class="btn btn-primary">Iniciar Sesion</button>

            </div>
        </form>
        <div id="caja-link">
            <a href="/register">Registrarse</a>
        </div>

    </div>
    <script>
        function mostrarContrasena() {
            var tipo = document.getElementById("password");
            if (tipo.type == "password") {
                tipo.type = "text";
            } else {
                tipo.type = "password";
            }
        }
    </script>
@endsection
