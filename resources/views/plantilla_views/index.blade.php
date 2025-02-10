@extends ('layout')

@section('title', 'Plantillas')

@section( 'content')

<h1 class="text-center">Plantilla</h1>

<button class="btn btn-primary">
    <a href="{{route('plantilla.create')}}" class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear una plantilla</a>
</button>
<br><br>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Catergoria</th>
            <th>Club</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($plantillas as $plant)
            <tr>
                <td>{{$plant->id}}</td>
                <td>{{$plant->categoria}}</td>
                <td>{{$plant->club->nombre}}</td>
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
