@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Editar Categoria - {{ $category->title }}</title>
@endsection
@section('content')
    <h1>Actualizar Post: {{ $category->title }}</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('category.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('dashboard.post._form', ["task" => "edit"])
    </form>
@endsection