<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      
    </head>
    <body class="antialiased">
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='edit'>
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class='content'>
            <div class=content_post>
                <h3>本文</h3>
                <p class=body>{{ $post->body }}</p>
            </div>
        </div>
        <div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>

