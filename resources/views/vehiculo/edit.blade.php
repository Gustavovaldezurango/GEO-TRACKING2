@extends('layouts.navbar');

@section('contenido')
<form action="/vehiculos/{{$vehiculo->id}}" method="post"  enctype="multipart/form-data">

    @csrf
@method('put')
    <div class="row">
    <div class="col">
<small>Nombre</small>
        <input type="text" class="form-control" placeholder=" Nombre Conductor" aria-label="Nombre Conductor"   name="conductor"  value="{{$vehiculo->conductor}}">
        @error('conductor')
        <small>*{{$message}}</small>
        @enderror
    </div>

    <div class="col">
        <small>Documento</small>
        <input type="text" class="form-control" placeholder="Documeto Conductor" aria-label="Documeto Conductor" name="documentoconductor" value="{{$vehiculo->documentoconductor}}">
        @error('documentoconductor')
        <small>*{{'El campo Documento  es obligatorio.'}}</small>
        @enderror
    </div>
    </div>


    <br>

    <div class="row">

        <div class="col">
            <small>Modelo</small>
          <input type="text" class="form-control" placeholder="Modelo" aria-label="Modelo" name="modelo" value="{{$vehiculo->modelo}}">
          @error('modelo')
          <small>*{{$message}}</small>
          @enderror
        </div>

        <div class="col">
            <small>Año</small>
          <input type="text" class="form-control" placeholder="Año" aria-label="Año" name="anno" value="{{$vehiculo->anno}}">
           @error('anno')
            <small>*{{'El campo año es obligatorio.'}}</small>
            @enderror
        </div>
    </div>


    <br>

      <div class="row">

        <div class="col">
            <small>Matricula</small>
          <input type="text" class="form-control" placeholder="Matricula" aria-label="Matricula" name="matricula" value="{{$vehiculo->matricula}}">
          @error('matricula')
          <small>*{{$message}}</small>
          @enderror
        </div>

        <div class="col">
            <small>Placa</small>
          <input type="text" class="form-control" placeholder="Placa" aria-label="Placa" name="placa" value="{{$vehiculo->placa}}">
          @error('placa')
          <small>*{{$message}}</small>
          @enderror
        </div>
    </div>


    <br>

    <div class="row">


        <div class="col">
            <small>tecnico mecanica</small>
            <input type="file" class="form-control" placeholder="Tecnico-Mecanica" aria-label="Tecnico-Mecanica" name="tecnomecanica" value="{{$vehiculo->tecnomecanica}}">
            @error('tecnomecanica')
            <small>*{{'El campo tecnico mecanica es obligatorio.'}}</small>
            @enderror
        </div>

        <div class="col">
            <small>SOAT</small>
            <input type="file" class="form-control" placeholder="SOAT" aria-label="SOAT" name="soat" value="{{$vehiculo->soat}}">
            @error('soat')
          <small>*{{$message}}</small>
          @enderror
        </div>
    </div>


    <br>

    <div class="row">

        <div class="col">
            <small>Tarjeta De Propiedad</small>
            <input type="file" class="form-control"  aria-label="Targeta de Propiedad" name="targetapropiedad" value="{{$vehiculo->targetapropiedad}}">
            @error('targetapropiedad')
            <small>*{{'El campo targeta de propiedad es obligatorio.'}}</small>
            @enderror
        </div>


        <br>

        <div class="col">
            <small>Fecha De Vencimiento</small>
          <input type="date" class="form-control" placeholder="Fecha de Vencimiento" aria-label="Fecha de Vencimiento" name="fechavencimiento" value="{{$vehiculo->fechavencimiento}}">
          @error('fechavencimiento')
          <small>*{{'El campo fecha de vencimiento es obligatorio.'}}</small>
        @enderror
        </div>
      </div>

      <br>
      <div class="modal-footer">
        <button type="submit"  class="btn btn-primary" tabindex="4">editar</button>
      </div>
</div>
</form>

@endsection
