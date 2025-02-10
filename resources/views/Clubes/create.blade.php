<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubes</title>
</head>

<body>
    <header>
        <H1> Club</H1>
    </header>

    <main>



        <form action="{{route('clubes.store')}}" method="post">
            @csrf
            <label for="Nombre">Nombre del club</label>
            <input type="text" name="nombre" id="nombre">

            <label for="ciudad"> Nombre de la ciudad</label>
            <input type="text" name="ciudad" id="ciudad">

            <button type="submit">Enviar</button>

        </form>

    </main>
</body>

</html>