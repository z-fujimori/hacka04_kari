<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
        <title>ララベル試し</title>
    </head>
    <body>
        <h1>ララベル試しホーム</h1>

        <img src="{{ asset('images/inu.png.webp') }}" alt="inu" width="600">

        <h2>以下からページに飛べます</h2>
        <a href="{{url('/ｐ１')}}">p1</a>
        <a href="{{url('/ｐ２')}}">p2</a>
        <a href="{{url('/ｐ３')}}">p3</a>
    </body>
</html>