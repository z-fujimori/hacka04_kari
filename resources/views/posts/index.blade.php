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
    @guest
        @if (Route::has('login'))
            <div class='login'>
                    <a href="{{ route('login') }}">ログイン</a>
            </div>
        @endif

        @if (Route::has('register'))
            <div class="register">
                <a href="{{ route('register') }}">ユーザー登録</a>
            </div>
        @endif
    @else
        <div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf<!-- 悪意のある攻撃を防御、 -->
            </form>
        </div>
    @endif

    <h1>Blog Name</h1>

    <a href="/posts/create">投稿作成</a>

    <div class='posts'>
        
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
        @endforeach
        
    </div>
</body>
</html>