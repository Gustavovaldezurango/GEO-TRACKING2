@extends('layouts.navbar');

@section('contenido')



<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope= "col">Nombre</th>
            <th scope= "col">kit</th>
            <th scope= "col">Dirección</th>
            <th scope= "col">nombre de contacto</th>
            <th scope= "col">Teléfono de contacto</th>
            <th scope= "col">correo</th>
            <th scope= "col">Logo</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->kit}}</td>
            <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->personacontacto}}</td>
            <td>{{$empresa->telefonocontacto}}</td>
            <td>{{$empresa->correo}}</td>
            <td>{{$empresa->logo}}</td>
        </tr>


    </tbody>




</table>

<div class="caja-botonfooter">

    <a href="/empresas"  class=" btn btn-success" id="botonfooter">Volver</a>
  </div>


@endsection
