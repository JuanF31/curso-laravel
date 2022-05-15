@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Editar Categoria - {{ $category->title }}</title>
@endsection
@section('content')
    <h1>Actualizar categoria: {{ $category->title }}</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.category._form')
    </form>
@endsection