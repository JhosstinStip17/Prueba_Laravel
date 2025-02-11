@extends ('layout')

@section('title', 'Crear Jugador')

@section('content')

<h1 class="text-center">Crear un Jugador</h1>

<form action="{{route('jugador.store')}}" method="post">

    @csrf

    @if($errors->any)
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Edad</span>
            <input type="number" name="edad" value="{{old('edad')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <label for="posicion">Posicion</label>
    <select class="form-select" aria-label="Default select example" name="posicion" id="posicion" >
            <option value="Delantero">Delantero</option>
            <option value="Mediocampista">Mediocampista</option>
            <option value="Defensa">Defensa</option>
            <option value="Portero">Portero</option>
    </select>
    <label for="id_plantilla">Plantilla</label>
    <select class="form-select" aria-label="Default select example" name="id_plantilla" id="id_plantilla" >
        @foreach ($plantillas as $plant)
            <option value="{{$plant->id}}">{{$plant->categoria}}</option>
        @endforeach
    </select>
    <br>

    <button type="sumbit" class="btn btn-success">
        Guardar
    </button>
    <button class="btn btn-danger">
        <a href="{{route('jugador.index')}}"  class="link-light link-offset-2 link-underline link-underline-opacity-0">
            Cancelar
        </a>
    </button>
</form>

@endsection