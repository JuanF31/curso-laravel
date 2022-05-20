<div>
    <h1>Listado de Posts</h1>

    <div class="card card-white mb-2">
        @forelse ($posts as $post)
            <h3>{{ $post->title }}</h3>
            <h3>{{ $post->description }}</h3>
            <h3>{{ $post->image }}</h3>
            <img src="{{ asset('image/'. $post->image) }}" alt="">
        @empty
            <h3>No hay datos para mostrar</h3>
        @endforelse
    </div>
</div>