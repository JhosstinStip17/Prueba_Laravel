@extends ('layout')

@section('title', 'Crear Plantilla')

@section('content')

<h1 class="text-center">Crear una plantilla</h1>

<form action="{{route('plantilla.store')}}" method="post">

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
            <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
            <input type="text" name="categoria" value="{{old('categoria')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <label for="id_club">Club</label>
    <select class="form-select" aria-label="Default select example" name="id_club" id="id_club" >
        @foreach ($clubes as $club)
            <option value="{{$club->id}}">{{$club->nombre}}</option>
        @endforeach
    </select>
    <br>

    <button type="sumbit" class="btn btn-success">
        Guardar
    </button>
    <button class="btn btn-danger">
        <a href="{{route('plantilla.index')}}"  class="link-light link-offset-2 link-underline link-underline-opacity-0">
            Cancelar
        </a>
    </button>
</form>

@endsection