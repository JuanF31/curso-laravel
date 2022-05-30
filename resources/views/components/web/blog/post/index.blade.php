<div>
    {{ $slot }}
    @forelse ($posts as $post)
        <div class="card card-white mb-2">
            <h3>{{ $post->title }}</h3>
            <h3>{{ $post->description }}</h3>
            <a href="{{ route('web.blog.show', $post) }}">Ver</a>
        </div>

        {{ $posts->links() }}
    @empty
        <h3>No hay datos para mostrar</h3>
    @endforelse
</div>