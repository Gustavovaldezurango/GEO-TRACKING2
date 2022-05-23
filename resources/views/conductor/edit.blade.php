@extends('layouts.navbar');

@section('contenido')

<form action="/conductors/{{$conductor->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')


    <div class="row">

    <div class="col">
         <small>Nombre</small>
        <input type="text" class="form-control" aria-label="Nombre"   name="nombre"  value="{{ $conductor->nombre}}">
        @error('nombre')
        <small>{{$message}}</small>
        @enderror
    </div>

    <div class="col">
        <small>Apellido</small>
        <input type="text" class="form-control"  aria-label="apellido" name="apellido" value="{{$conductor->apellido }}">
        @error('apellido')
        <small>{{$message}}</small>
        @enderror
    </div>
    </div>


    <br>

    <div class="row">
        <div class="col">
         <small>Teléfono</small>
            <input type="text" class="form-control"  aria-label="Telefono" name="telefono" value="{{$conductor->telefono}}">
          @error('telefono')
          <small>{{$message}}</small>
          @enderror
        </div>

        <div class="col">
            <small>Dirección</small>
          <input type="text" class="form-control" placeholder="calle  00 #00-00" aria-label="Direccion" name="direccion" value="{{$conductor->direccion}}" >
          @error('direccion')
          <small>{{$message}}</small>
          @enderror

        </div>
    </div>


    <br>

      <div class="row">

        <div class="col">
            <small>Numero De Pase</small>
          <input type="text" class="form-control" placeholder="03266545646" aria-label="nopase" name="nopase" value="{{$conductor->nopase}}">
          @error('nopase')
          <small>{{$message}}</small>
          @enderror

        </div>

        <div class="col">
            <small>Pase</small>
          <input type="file" class="form-control" placeholder="pase" aria-label="pase" name="pase" value="{{$conductor->pase}}">
          @error('pase')
          <small>{{$message}}</small>
          @enderror

        </div>
    </div>


    <br>

    <div class="row">


        <div class="col">
            <small>Cedula</small>

            <input type="text" class="form-control" placeholder="Cedula" aria-label="cedula" name="cedula" value="{{$conductor->cedula}}" >
            @error('cedula')
            <small>{{$message}}</small>
            @enderror

        </div>

        <div class="col">
         <small>Hoja De Vida</small>
            <input type="file" class="form-control" placeholder="hojavida" aria-label="hojavida" name="hojavida" value="{{$conductor->hojavida}}" >
            @error('hojavida')
            <small>{{$message}}</small>
            @enderror

        </div>
    </div>

      <br>
      <div class="caja-botonfooter">
        <button type="submit"  class="btn btn-primary" id="botonfooter">Editar</button>
      </div>
</form>

@endsection
