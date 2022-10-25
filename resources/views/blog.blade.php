<x-layouts.app title="home">
    <x-layouts.navigation/>
    <h1>Blog</h1>
    @foreach($posts as $post)
        {{$post->title}}
    @endforeach
</x-layouts.app>
