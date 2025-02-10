@extends ('layout')

@section('title', 'Clubes menu')

@section( 'content')

<h1 class="text-center">Clubes</h1>

<table class="table table-striped">

    <a href="clubes/create">Crear club</a>

    <br>

    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Acciones</th>
    </thead>

    <tbody>
        @foreach ($clubs as $club)
        <tr>
            <td>{{$club->id}}</td>
            <td>{{$club->nombre}}</td>
            <td>{{$club->ciudad}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

<br>

@endsection