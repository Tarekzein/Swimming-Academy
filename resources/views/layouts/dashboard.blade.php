<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{url("css/dashboard.css")}}" rel="stylesheet">
    <link href="{{url("css/all.css")}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<main class="py-4">
    @yield("content")
</main>
<script src="{{url("js/jquery-3.6.0.min.js")}}" ></script>
<script src="{{url("js/admin.js")}}" ></script>
<script src="{{url("js/searchFunc.js")}}" ></script>
</body>
</html>
