<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swimming Academies</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex h-100 justify-content-center">
            <div class="col">
                <h1><a href="{{route("wecoach")}}">We Coach</a></h1>
            </div>
            <div class="col">
                <h1><a href="{{route("waves")}}">Waves</a></h1>
            </div>
        </div>
    </div>


</body>
</html>
