@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Crear Post</title>
@endsection
@section('content')
    <h1>Crear Post</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="title">T&iacute;tulo</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug') }}">

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
        <textarea name="content" id="content">{{ old('content') }}</textarea>

        <label for="content">Descripci&oacute;n</label>
        <textarea name="description" id="description">{{ old('description') }}</textarea>

        <button type="submit">Enviar</button>
    </form>
@endsection