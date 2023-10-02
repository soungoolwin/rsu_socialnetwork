<div class="mx-2 sm:mx-auto">
    @foreach ($posts as $post)
        <div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto my-8">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <p class="text-gray-600 text-base">
                        {{ $post->content }}
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 mr-2">#photography</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600 mr-2">#travel</span>
                    <span
                        class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-600">#winter</span>
                </div>
            </div>
        </div>
    @endforeach
    <button x-data="{ isVisible: false }" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" title="Go to top"
        class="fixed bottom-4 right-4 bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full shadow"
        wire:click='updateFeed'>
        Top
    </button>

</div>
