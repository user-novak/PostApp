<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostApp - {{ $title ?? 'BookRegisterApp' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    @vite(['resources/js/app.js','resources/css/styles.css'])
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">
<x-layouts.navigation />

@if(session('status'))
    <div class="status">
        {{ session('status') }}
    </div>
@endif

{{ $slot }}

</body>
</html>
