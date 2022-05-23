@extends('layouts.navbar');

@section('contenido')


<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">Apellido</th>
            <th scope= "col">Dirección</th>
            <th scope= "col">Dirección</th>
            <th scope= "col">No. Pase</th>
            <th scope= "col">Pase</th>
            <th scope= "col">Cedula</th>
            <th scope= "col">Hoja de Vida</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$conductor->nombre}}</td>
            <td>{{$conductor->apellido}}</td>
            <td>{{$conductor->telefono}}</td>
            <td>{{$conductor->direccion}}</td>
            <td>{{$conductor->nopase}}</td>
            <td>{{$conductor->pase}}</td>
            <td>{{$conductor->cedula}}</td>
            <td>{{$conductor->hojavida}}</td>



        </tr>


    </tbody>
</table>


<div class="caja-botonfooter">

    <a href="/conductors"  class=" btn btn-success" id="botonfooter">Volver</a>
  </div>
@endsection
