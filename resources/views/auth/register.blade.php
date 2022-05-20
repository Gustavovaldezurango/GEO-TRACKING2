@extends('layouts.plantillalogin')
@section('content')
    <div id="caja_form">
        <h3 id="iniciar-sesion">Registrarse</h3>
        <form action="/register" method="POST">
            @csrf
            <div   class="contain">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16" id="icongmail">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </div>
                <div class="mb-3"  id="input">
                    <small>Username</small>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Ingrese su nombre" required value="{{old('username')}} ">
                    @error('username')
                    <small>*{{$message}}</small>
                    @enderror

                </div>

            </div>
            <div   class="contain">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16" id="icongmail">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </div>

                <div class="mb-3" id="input">
                    <small>Email</small>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Ingrese su gmail" required value="{{old('email')}}">
                    @error('email')
                    <small>*{{$message}}</small>
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
                    <input type="password" name="password" class="form-control" id="password" required>
                    @error('password')
                    <small>*{{$message}}</small>
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
                    <small>password_confirmation</small>
                    <input type="password" name="password_confirmation" class="form-control" id="password" required>
                    @error('password_confirmation')
                    <small>*{{$message}}</small>
                    @enderror
                </div>
            </div>





            <div id="caja-button">
                <button id="button" type="submit" class="btn btn-primary">Registrarse</button>

            </div>
        </form>


    </div>


@endsection
