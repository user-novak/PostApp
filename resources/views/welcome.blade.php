<x-layouts.app
    title="Home"
    meta-description="Home page"
>
    <h1 class="h1">Home</h1>
    @auth
        <div class="text-white">
            Authenticated User: {{ Auth::user()->name }}
        </div>
    @endauth
</x-layouts.app>
