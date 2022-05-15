@extends('dashboard.layout')

@section('title')
    <title>Dashboard | Categorias Creadas</title>
@endsection

@section('content')
    <a class="btn btn-success my-3" href="{{ route('category.create') }}">Crear</a>
    <table class="table mb-3">
        <thead>
            <tr>
                <th>T&iacute;tulo</th>
                <th>Slug</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a class="mt-2 btn btn-primary" href="{{ route('category.edit', $category) }}">Editar</a>
                        <a class="mt-2 btn btn-primary" href="{{ route('category.show', $category) }}">Ver</a>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
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
    {{ $categories->links() }}
@endsection