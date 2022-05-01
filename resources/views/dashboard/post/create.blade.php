<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="title">T&iacute;tulo</label>
        <input type="text" name="title" id="title">
        
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">

        <label for="category_id">Categoria</label>
        <select name="category_id" id="category_id">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="posted">Posteado</label>
        <select name="posted" id="posted">
            <option value="not">No</option>
            <option value="yes">Si</option>
        </select>

        <label for="content">Contenido</label>
        <textarea name="content" id="content"></textarea>

        <label for="content">Descripci&oacute;n</label>
        <textarea name="description" id="description"></textarea>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>