<div class="mx-2 sm:mx-auto">
    @foreach ($posts as $post)
        <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <p class="text-gray-600 text-base">
                    {{ $post->content }}
                </p>
            </div>
            <div class="px-6 py-4">
                <span
                    class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 mr-2">{{ $post->user->username }}</span>
                <span
                    class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 mr-2">{{ $post->created_at->diffForHumans() }}</span>
            </div>
        </div>
    @endforeach

    @if ($posts->hasMorePages())
        @livewire('posts.load-more-posts', ['page' => $page, 'perPage' => $perPage, 'key' => 'posts-page-' . $page])
    @endif
</div>
