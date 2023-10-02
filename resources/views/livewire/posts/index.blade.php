<div>
    @foreach ($posts as $post)
        <p>{{ $post->content }}</p>
        <p>{{ $post->user_id }}</p>
        <p>xxxxxxxxxxxxxxxxxxxxxxxxx</p>
    @endforeach
</div>
