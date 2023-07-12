<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/scss/home.scss')

</head>

<body>

    <div>

        <div class="flex">
            @foreach ($movies as $movie)
                <div class="card">
                    <div class="title">
                        <h2>Title: {{ $movie->title }}</h2>
                        <h3>Original title: {{ $movie->original_title }}</h3>
                    </div>

                    <div class="info">
                        <h3>Nationality: {{ $movie->nationality }}</h3>
                        <h3>date: {{ $movie->date }}</h3>
                        <h3>vote: {{ $movie->vote }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
