<x-layouts.app title="home">
    <x-layouts.navigation/>
    <h1>Blog</h1>
    @for($i = 0; $i<3;$i++)
        <h2>{{$posts[$i]}}</h2>
    @endfor
</x-layouts.app>
