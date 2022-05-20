<div id="div-index">

    @if ($message = Session::get('ErrorInsert'))
        <div class="col-4 alert alert-danger alert-dismissable fade show">
            <small>{{ 'Por favor llenar todos los campos correctamente' }}</small>
        </div>
    @endif





    @if ($message = Session::get('Listo'))
        <div class="col-3 alert alert-success alert-dismissable fade show">
            <small>{{ $message }}</small>
        </div>
    @endif


    <nav id="nav-index">
        <form action="{{ 'empresas' }}" method="get">

            <input type="text" placeholder=" Buscar" id="buscar" name="texto" value="{{ $texto }}">
            <input type="submit" value="Filtar" class="btn btn-primary">
        </form>
    </nav>
    <nav id="lnk-create">
        @include('empresa.form');
    </nav>



</div>

<table class="  table table-dart table-striped mt-4" id="table-index">

    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Kit</th>
            <th scope="col">Direccion</th>
            <th scope="col">Persona Contacto</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
        </tr>
    </thead>
    <tbody>
        @if (count($empresas) <= 0)
            <tr>
                <td colspan="6"> no se encuentran registros</td>
            </tr>
        @else
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->nombre }}</td>
                    <td>{{ $empresa->kit }}</td>
                    <td>{{ $empresa->direccion }}</td>
                    <td>{{ $empresa->personacontacto }}</td>
                    <td>{{ $empresa->telefonocontacto }}</td>
                    <td>{{ $empresa->correo }}</td>
                    <td>
                        <form action="{{ route('empresas.destroy', $empresa->id) }}" method="post">

                            <a href="/empresas/{{ $empresa->id }}/edit" class="btn btn-primary btn-sm"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg></a>
                            <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-success  btn-sm" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="ver"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye" viewBox="0 0 16 16" >
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg></a>

                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger  btn-sm" onclick=" return confirmareliminar()"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dash-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                                </svg></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<script>
    function confirmareliminar() {

        var pregunta = confirm('Estas segudo que deseas eliminar?')
        if (pregunta == true) {
            return true;
        } else {
            return false;

        }
    }
</script>
