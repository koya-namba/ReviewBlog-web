<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='post'>
            <!--問5-->
            {{-- title、body、タグ名を表示させましょう --}}
            <h2 class="title">{{ $post->title }}</h2>
            <p class="body">{{ $post->body }}</p>
            <p class="tag">{{ $tag->name }}</p>
        </div>
        <a href="/test">戻る</a>
    </body>
</html>
