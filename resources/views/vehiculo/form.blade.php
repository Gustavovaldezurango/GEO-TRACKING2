<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear+
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear nuevo vehiculo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/vehiculos" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <small>
                                *Nombre Conductor
                            </small>
                            <input type="text" class="form-control" placeholder=" Nombre Conductor"
                                aria-label="Nombre Conductor" name="conductor" value="{{ old('conductor') }}" required>
                            @error('conductor')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col">
                            <small>
                               *Documeto Conductor
                            </small>
                            <input type="text" class="form-control" placeholder="Documeto Conductor"
                                aria-label="Documeto Conductor" name="documentoconductor"
                                value="{{ old('documentoconductor') }}" required>
                            @error('documentoconductor')
                                <small>{{ 'el campo Documento de Conductor  es obligatorio' }}</small>
                            @enderror
                        </div>
                    </div>


                    <br>

                    <div class="row">

                        <div class="col">
                            <small>
                               *Modelo
                            </small>
                            <input type="text" class="form-control" placeholder="Modelo" aria-label="Modelo"
                                name="modelo" value="{{ old('modelo') }}" required>
                            @error('modelo')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col">
                            <small>
                                *Año
                            </small>
                            <input type="text" class="form-control" placeholder="Año" aria-label="Año" name="anno"
                                value="{{ old('anno') }}" required>
                            @error('anno')
                                <small>{{ 'El campo año es obligatorio.' }}</small>
                            @enderror
                        </div>
                    </div>


                    <br>

                    <div class="row">

                        <div class="col">
                            <small>
                                *Matrícula
                            </small>
                            <input type="text" class="form-control" placeholder="Matricula" aria-label="Matricula"
                                name="matricula" value="{{ old('matricula') }}" required>
                            @error('matricula')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col">
                            <small>
                                *Placa
                            </small>
                            <input type="text" class="form-control" placeholder="Placa" aria-label="Placa"
                                name="placa" value="{{ old('placa') }}" required>
                            @error('placa')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <br>

                    <div class="row">


                        <div class="col">
                            <small>
                                *Técnico-Mecanica
                            </small>
                            <input type="file" class="form-control" placeholder="Tecnico-Mecanica"
                                aria-label="Tecnico-Mecanica" name="tecnomecanica" value="{{ old('tecnomecanica') }}" required>
                            @error('tecnomecanica')
                                <small>{{ 'El campo tecnico mecanica es obligatorio.' }}</small>
                            @enderror
                        </div>

                        <div class="col">
                            <small>
                                *SOAT
                            </small>
                            <input type="file" class="form-control" placeholder="SOAT" aria-label="SOAT" name="soat"
                                value="{{ old('soat') }}" required>
                            @error('soat')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <br>

                    <div class="row">

                        <div class="col">
                            <small>
                                *Tarjeta de Propiedad
                            </small>
                            <input type="file" class="form-control" placeholder="Tarjeta de Propiedad"
                                aria-label="Targeta de Propiedad" name="targetapropiedad"
                                value="{{ old('targetapropiedad') }}" required>
                            @error('targetapropiedad')
                                <small>*{{ 'El campo targeta de propiedad es obligatorio.' }}</small>
                            @enderror
                        </div>

                        <br>


                        <div class="col">
                            <small>
                                *Fecha de Vencimiento
                            </small>
                            <input type="date" class="form-control" placeholder="Fecha de Vencimiento"
                                aria-label="Fecha de Vencimiento" name="fechavencimiento"
                                value="{{ old('fechavencimiento') }}" required>
                            @error('fechavencimiento')
                                <small>*{{ 'El campo fecha de vencimiento es obligatorio.' }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <div class="caja-botonfooter">
                        <button type="submit" class="btn btn-primary" id="botonfooter">Crear</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
