@extends('dashboard.layout')

@section('title')
    <title>Dashboard | Categorias Creadas</title>
@endsection

@section('content')
    <a href="{{ route('category.create') }}">Crear</a>
    <table>
        <thead>
            <tr>
                <th>T&iacute;tulo</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category) }}">Editar</a>
                        <a href="{{ route('category.show', $category) }}">Ver</a>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
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
    {{ $categories->links() }}
@endsection