<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido </h1>
    {{ Auth::user() }}

    @if (Auth::user())
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>Cerrar sesion</button>
        </form>  
    @endif




</body>
</html>