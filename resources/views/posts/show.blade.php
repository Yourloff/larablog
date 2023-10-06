<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $post->title }}</title>
</head>
<body>
<div class="container mx-auto">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
        {{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
</div>
</body>
</html>

