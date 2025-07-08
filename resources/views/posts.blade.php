<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/post/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['tittle'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 1 Juli 2025
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 150, preserveWords: true) }}</p>
            <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
