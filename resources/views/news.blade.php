<!DOCTYPE html>
<html>

<head>
    <title>Berita Dari NewsApi</title>
    <style>
        img {
            width: 450px;
            height: 250px;
        }
    </style>
</head>

<body>
    <h1>Berita Terbaru</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h3>{{ $article['title'] }}</h3>
                <img src="{{ $article['urlToImage'] }}">
                <p>{{ $article['description'] }}</p>
                <a href="{{ $article['url'] }}" target="_blank">Read more</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
