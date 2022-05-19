
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear+
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Crear nuevo conductor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/conductors" method="post" enctype="multipart/form-data">
                @csrf


                <div class="row">

                <div class="col">
                    <small>Nombre</small>
                    <input type="text" class="form-control"  aria-label="Nombre"   name="nombre"  value="{{ old('nombre')}}" required>
                    @error('nombre')
                    <small>*{{$message}}</small>
                    @enderror
                </div>

                <div class="col">
                    <small>Apellido</small>
                    <input type="text" class="form-control"  aria-label="apellido" name="apellido" value="{{old('apellido')}}" required>
                    @error('apellido')
                    <small>*{{$message}}</small>
                    @enderror
                </div>
                </div>


                <br>

                <div class="row">

                    <div class="col">
                        <small>Telefono</small>
                      <input type="text" class="form-control"  aria-label="Telefono" name="telefono" value="{{old('telefono')}}" required>
                      @error('telefono')
                      <small>*{{$message}}</small>
                      @enderror
                    </div>

                    <div class="col">
                        <small>Direccion</small>
                      <input type="text" class="form-control" placeholder="calle  00 #00-00" aria-label="Direccion" name="direccion" value="{{old('direccion')}}" required>
                      @error('direccion')
                      <small>*{{$message}}</small>
                      @enderror

                    </div>
                </div>


                <br>

                  <div class="row">

                    <div class="col">
                        <small>Numero De Pase</small>
                      <input type="text" class="form-control" placeholder="03266545646" aria-label="nopase" name="nopase" value="{{old('nopase')}}" required>
                      @error('nopase')
                      <small>*{{$message}}</small>
                      @enderror

                    </div>

                    <div class="col">
                        <small>Pase</small>
                      <input type="file" class="form-control" placeholder="pase" aria-label="pase" name="pase" value="{{old('pase')}}" required>
                      @error('pase')
                      <small>*{{$message}}</small>
                      @enderror

                    </div>
                </div>


                <br>

                <div class="row">


                    <div class="col">
                        <small>Cedula</small>
                        <input type="file" class="form-control" placeholder="Cedula" aria-label="cedula" name="cedula" value="{{old('cedula')}}" required>
                        @error('cedula')
                        <small>*{{$message}}</small>
                        @enderror

                    </div>

                    <div class="col">
                        <small>Hoja De Vida</small>
                        <input type="file" class="form-control" placeholder="hoja de vida" aria-label="hojavida" name="hojavida" value="{{old('hojavida')}}" required>
                        @error('hojavida')
                        <small>*{{'El campo hoja de vida es obligatorio'}}</small>
                        @enderror

                    </div>
                </div>

                  <br>
                  <div class="caja-botonfooter">
                    <button type="submit"  class="btn btn-primary" id="botonfooter">Crear</button>
                  </div>
        </div>
            </form>
      </div>
    </div>
  </div>

</body>
</html>

