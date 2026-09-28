<x-layout title="Blog">
    <h1>Reeaaaad</h1>
    @foreach ($posts as $post )
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
        <p>{{ $post->author }}</p>

    
    @endforeach
</x-layout>