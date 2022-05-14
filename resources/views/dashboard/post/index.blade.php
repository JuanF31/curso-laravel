@extends('dashboard.layout')

@section('title')
    <title>Dashboard | Post Creados</title>
@endsection

@section('content')
    <a href="{{ route('post.create') }}">Crear</a>
    <table>
        <thead>
            <tr>
                <th>T&iacute;tulo</th>
                <th>Categoria</th>
                <th>Posteado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->title }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post) }}">Editar</a>
                        <a href="{{ route('post.show', $post) }}">Ver</a>
                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td>No hay informaci&oacute;n para mostrar</td>
            @endforelse
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection