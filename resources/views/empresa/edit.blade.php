@extends('layouts.navbar');

@section('contenido')
<h1>Editar</h1>
<form action="/empresas/{{$empresa->id}}" method="post"    enctype="multipart/form-data"            >
    @csrf
    @method('put')




    <div class="row">

    <div class="col">
<small>Nombre</small>
        <input type="text" class="form-control" placeholder=" Nombre" aria-label="Nombre"   name="nombre"  value="{{ $empresa->nombre}}" >

        @error('nombre')
        <small>{{$message}}</small>
        @enderror

    </div>

    <div class="col">
        <small>Nit</small>
        <input type="text" class="form-control" placeholder="Kit" aria-label="Kit" name="kit" value="{{$empresa->kit}}" >
        @error('Kit')
        <small>{{$message}}</small>
        @enderror
    </div>
    </div>


    <br>

    <div class="row">

        <div class="col">
            <small>Dirección</small>
          <input type="text" class="form-control" placeholde="calle" aria-label="Direccion" name="direccion" value="{{$empresa->direccion}}">
          @error('direccion')
          <small>{{$message}}</small>
          @enderror
        </div>

        <div class="col">
            Persona de Contacto
          <input type="text" class="form-control" placeholder="Persona de contacto" aria-label="personacontacto" name="personacontacto" value="{{$empresa->personacontacto}}" >
          @error('personacontacto')
          <small>{{$message}}</small>
          @enderror

        </div>
    </div>


    <br>

      <div class="row">

        <div class="col">
            <small>Teléfono de Contacto</small>
          <input type="text" class="form-control" placeholder="Telefono de contacto" aria-label="telefonocontacto" name="telefonocontacto" value="{{$empresa->telefonocontacto}}" >
          @error('telefonocontacto')
          <small>{{$message}}</small>
          @enderror

        </div>

        <div class="col">
            <small>Logo</small>
          <input type="file" class="form-control" placeholder="Logo" aria-label="logo" name="logo"  value="{{$empresa->logo}}" >
          @error('logo')
          <small>{{$message}}</small>
          @enderror

        </div>
    </div>


    <br>

    <div class="row">

        <div class="col">
            <small> Correo</small>
            <input type="email" class="form-control" placeholder="Correo" aria-label="correo" name="correo" value="{{$empresa->correo}}" >
            @error('correo')
            <small>{{$message}}</small>
            @enderror

        </div>
        <div class="col">
            <small> Contraseña</small>
            <input type="password" class="form-control" placeholder="Contraseña" aria-label="contraseña" name="contraseña" value="{{ $empresa->contraseña}}" >
            @error('contraseña')
            <small>{{$message}}</small>
            @enderror

        </div>
    </div>

      <br>

</div>
<div class="caja-botonfooter">
    <button type="submit"  class="btn btn-primary" id="botonfooter">Editar</button>
  </div>
</form>



 @endsection
