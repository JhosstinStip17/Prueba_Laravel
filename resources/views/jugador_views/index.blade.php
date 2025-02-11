@extends ('layout')

@section('title', 'Jugadores')

@section( 'content')

<h1 class="text-center">Jugadores</h1>

<button class="btn btn-primary">
    <a href="{{route('jugador.create')}}" class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear una jugador</a>
</button>
<br><br>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Posicion</th>
            <th>Plantilla</th>
            <th>CLub</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jugadores as $jugador)
            <tr>
                <td>{{$jugador->id}}</td>
                <td>{{$jugador->nombre}}</td>
                <td>{{$jugador->edad}}</td>
                <td>{{$jugador->posicion}}</td>
                <td>{{$jugador->plantilla->categoria}}</td>
                <td>{{$jugador->plantilla->club->nombre}}</td>
                <td>
                    <button>
                        <a href="">
                            Editar
                        </a>
                    </button>
                    <button>
                        <a href="">
                            Eliminar
                        </a>
                    </button>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
@endsection
