
@extends('dashboard.layout')

@section('title')
    <title>Dashboard | Post Creados</title>
@endsection

@section('content')
    <a class="btn btn-success my-3" href="{{ route('post.create') }}">Crear</a>
    <table class="table mb-3">
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
                    <td>{{ $post->posted == 'yes' ? 'Si' : 'No' }}</td>
                    <td>
                        <a class="mt-2 btn btn-primary" href="{{ route('post.edit', $post) }}">Editar</a>
                        <a class="mt-2 btn btn-primary" href="{{ route('post.show', $post) }}">Ver</a>
                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="mt-2 btn btn-danger" type="submit">Eliminar</button>
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