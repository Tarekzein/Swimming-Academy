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
        <div class="row position-absolute" style="left:50%; top:50%; transform:translate(-50%,-50%)" >
            <div class="row vw-100 justify-content-center" >
                <div class="col d-flex justify-content-center">
                    <h1 class=" mx-auto"><a href="{{route("wecoach")}}"><img src="{{url("images/wecoach/_Path_.png")}}" style="filter: drop-shadow(2px 4px 6px gray);" alt=""></a></h1>
                </div>
                <div class="col d-flex justify-content-center">
                    <h1><a href="{{route("waves")}}"><img src="{{url("images/waves/waveslogo.png")}}" style="filter: drop-shadow(2px 4px 6px gray);" alt=""></a></h1>
                </div>

            </div>
        </div>
    </div>


</body>
</html>
