<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-gray-300">
            <a href="/posts/{{$post['slug']}}" class="transition-all hover:underline">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{$post['title']}}</h2>
            </a>
            <div class="text-base text-gray-500">
                By
                <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{$post->author->name}}</a>
                in
                <a href="#" class="hover:underline">Web Programming</a>|
            </div>
            <p class="my-4 font-light">{{Str::limit($post['body'], 200)}}</p>
            <a href="/posts/{{$post['slug']}}" class="font-medium text-blue-500 transition-all hover:underline">Read more
                &raquo;</a>
        </article>
    @endforeach
</x-layout>