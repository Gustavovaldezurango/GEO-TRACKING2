


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear+
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear nuevo conductor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/conductors" method="post" enctype="multipart/form-data">
                @csrf


                <div class="row">

                <div class="col">
                    <small>Nombre</small>
                    <input type="text" class="form-control"  aria-label="Nombre"   name="nombre"  value="{{ old('nombre')}}">
                    @error('nombre')
                    <small>*{{$message}}</small>
                    @enderror
                </div>

                <div class="col">
                    <small>Apellido</small>
                    <input type="text" class="form-control"  aria-label="apellido" name="apellido" value="{{old('apellido')}}">
                    @error('apellido')
                    <small>*{{$message}}</small>
                    @enderror
                </div>
                </div>


                <br>

                <div class="row">

                    <div class="col">
                        <small>Telefono</small>
                      <input type="text" class="form-control"  aria-label="Telefono" name="telefono" value="{{old('telefono')}}">
                      @error('telefono')
                      <small>*{{$message}}</small>
                      @enderror
                    </div>

                    <div class="col">
                        <small>Direccion</small>
                      <input type="text" class="form-control" placeholder="calle  00 #00-00" aria-label="Direccion" name="direccion" value="{{old('direccion')}}">
                      @error('direccion')
                      <small>*{{$message}}</small>
                      @enderror

                    </div>
                </div>


                <br>

                  <div class="row">

                    <div class="col">
                        <small>Numero De Pase</small>
                      <input type="text" class="form-control" placeholder="03266545646" aria-label="nopase" name="nopase" value="{{old('nopase')}}">
                      @error('nopase')
                      <small>*{{$message}}</small>
                      @enderror

                    </div>

                    <div class="col">
                        <small>Pase</small>
                      <input type="file" class="form-control" placeholder="pase" aria-label="pase" name="pase" value="{{old('pase')}}">
                      @error('pase')
                      <small>*{{$message}}</small>
                      @enderror

                    </div>
                </div>


                <br>

                <div class="row">


                    <div class="col">
                        <small>Cedula</small>
                        <input type="file" class="form-control" placeholder="Cedula" aria-label="cedula" name="cedula" value="{{old('cedula')}}">
                        @error('cedula')
                        <small>*{{$message}}</small>
                        @enderror

                    </div>

                    <div class="col">
                        <small>Hoja De Vida</small>
                        <input type="file" class="form-control" placeholder="hoja de vida" aria-label="hojavida" name="hojavida" value="{{old('hojavida')}}">
                        @error('hojavida')
                        <small>*{{$message}}</small>
                        @enderror

                    </div>
                </div>

                  <br>
                  <div class="modal-footer">
                    <button type="submit"  class="btn btn-primary" tabindex="4">Crear</button>
                  </div>
        </div>
            </form>
      </div>
    </div>
  </div>
