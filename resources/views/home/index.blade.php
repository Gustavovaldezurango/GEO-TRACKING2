@extends('layouts.navbar')

@section('contenido')


@if($message = Session::get('listo'))
<div class="col-3 alert alert-success alert-dismissable fade show">
     @auth
       <small> Bienvenido {{ auth()->user()->name ?? auth()->user()->username }}, a Geo Tracking</small>

    @endauth
</div>
@endif

    @guest
        <p>para ver el contenido <a href="/login">inicia sesion</a> </p>
    @endguest


@endsection


