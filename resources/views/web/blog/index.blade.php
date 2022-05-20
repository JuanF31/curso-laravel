@extends('web.layout')

@section('content')
    <h1>Listado</h1>
    <x-web.blog.post.index :posts="$posts" />
@endsection