@extends('layouts.plantillalogin')
@section('content')
    <div id="caja_form">
        <h3 id="iniciar-sesion">Iniciar Sesion</h3>
        <form action="/login" method="POST">
            @csrf
            @if($message = Session::get('Error'))
            <div class="col alert alert-danger alert-dismissable fade show">
                {{$message}}
            </div>
            @endif
            <div class="form-floating mb-3">
                <input type="text" class="form-control"  placeholder="name@example.com" name="username"  required>
                <label for="floatingInput">UserName/Email</label>
                @error('username')
                <small>*{{$message}}</small>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="name@example.com" name="password"  required>
                <label for="floatingInput">Password</label>
                <input type="checkbox" name="vercontraseña " id="vercontraseña" onclick="mostrarContrasena()" > ver contraseña
                @error('password')
                <small>*{{$message}}</small>
                @enderror
              </div>


            <div class="mb-3">


                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">recordar</label>

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
