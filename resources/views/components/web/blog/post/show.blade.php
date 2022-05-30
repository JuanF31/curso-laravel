<h1>{{ $post->title }}</h1>
<p>{{ $post->created_at }}</p>
<p>{{ $post->content }}</p>
<img src="{{ asset('image/'. $post->image) }}" alt="">