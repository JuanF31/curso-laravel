@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Crear Categoria</title>
@endsection
@section('content')
    <h1>Crear Post</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection