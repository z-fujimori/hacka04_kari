<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('/style.css')  }}" >
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
</head>
<body>

    <div class='login'>
            @if (Route::has('login'))
                <a href="{{ route('login') }}">ログイン</a>
            @endif
    </div> 
    <h1>Blog Name</h1>
    <div class='posts'>

    @foreach ($posts as $post)
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
    @endforeach
        
    </div>
</body>
</html>