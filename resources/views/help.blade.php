<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @vite('resources/css/app.css')
    <body>
    <div id="app">
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col lg-3">
                <a href="{{ asset('/welcome') }}"><p class="text-center text-light display-4 pt-2" style="font-weight: bold; text-decoration: none;" > Adilo </p></a>
                </div>
                <div class="row text-center text-" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <div class="col md-3 text-left text-light pt-2 display-7" style="font-size: px;">
                        <p><a href="{{ asset('/projects') }}" style="text-decoration: none;">Projects</a></p>
                    </div>
                    <div class="col md-3 text-left text-light pt-2 display-7">
                        <p><a href="{{ asset('/tools') }}" style="text-decoration: none;">Tools & App</a> </p>
                    </div>
                    <div class="col md-3 text-left text-light pt-2 display-7" style="font-size: px;">
                        <p><a href="{{ asset('/help') }}" style="text-decoration: none;">Help</a></p>
                    </div>
                </div>
            </div>

            <h5>Let Us Help You.</h5>
        </div>
    </body>

