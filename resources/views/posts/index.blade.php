@foreach($posts as $post)
    <p><a href="{{ route('post.show', $post->slug) }}">{{ $post->name }}
        </a></p>
    @endforeach