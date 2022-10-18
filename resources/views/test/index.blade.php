<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <!--問3：コメントアウトをはずす-->
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            <!--問3：$POSTSを$postsに変更-->
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <!--問3：nameをtitleに変更-->
                        <!--問4：詳細ページに飛ぶルーティングに変えましょう-->
                        <a href="/test/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>