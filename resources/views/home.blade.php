<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container {
                width: 80%;
                display:flex;
                margin: auto;
                flex-wrap: wrap;
                padding: 50px;
            }
            .card {
                width: calc(20% - 20px);
                padding: 20px;
                background-color: lightblue;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Film:</h1>
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <h4>{{ $movie->original_title }}</h4>
                    <h5>{{ $movie->nationality }}</h5>
                    <h5>{{ $movie->date }}</h5>
                    <small>{{ $movie->vote }}</small>
                </div>
            @endforeach  
            </div>
            </div>
        </div>
    </body>
</html>
