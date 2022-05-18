@extends('layouts.plantillalogin')
@section('content')
    <div id="caja_form">
        <h3 id="iniciar-sesion">Registrarse</h3>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <small>Username</small>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Ingrese su nombre">
                @error('username')
                <small>*{{$message}}</small>
                @enderror

            </div>
            <div class="mb-3">
                <small>Email</small>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Ingrese su gmail">
                @error('email')
                <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <small>Password</small>
                <input type="password" name="password" class="form-control" id="password">
                @error('password')
                <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <small>password_confirmation</small>
                <input type="password" name="password_confirmation" class="form-control" id="password">
                @error('password_confirmation')
                <small>*{{$message}}</small>
                @enderror
            </div>

            <div id="caja-button">
                <button id="button" type="submit" class="btn btn-primary">Registrarse</button>

            </div>
        </form>


    </div>


@endsection
