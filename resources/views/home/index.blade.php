@extends('layouts.navbar')

@section('contenido')




    @guest
        <p>para ver el contenido <a href="/login">inicia sesion</a> </p>
    @endguest


@endsection


