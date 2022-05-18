@extends('layouts.plantillalogin')
@section('content')
    <div id="caja_form">
        <h3 id="iniciar-sesion">Iniciar Sesion</h3>
        <form action="/login" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                <label for="floatingInput">UserName/Email</label>
                @error('username')
                <small>*{{$message}}</small>
                @enderror
              </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <input type="checkbox" name="vercontraseña " id="vercontraseña" onclick="mostrarContrasena()" > ver contraseña
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">recordar</label>
                @error('password')
                <small>*{{$message}}</small>
                @enderror
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
        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
      </script>
@endsection
