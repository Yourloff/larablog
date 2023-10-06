<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
        Посты</h1>

    @if($message)
        {{ $message }}
    @else
        <div class="group-cards">
            @foreach($posts as $post)
                <a href="/posts/{{$post->id}}"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
                </a>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>
