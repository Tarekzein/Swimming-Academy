<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We Coach</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{url("css/wecoach/main.css")}}" rel="stylesheet">
    <link href="{{url("css/wecoach/user.css")}}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body style="overflow-x: hidden;background-image: url('{{url("images/waves/_Compound Path_.png")}}'); background-size: contain;width: 100%;">
@include("wecoach.constants.nav")

@yield("content")

@include("wecoach.constants.footer")


<script src="https://kit.fontawesome.com/0f1050bc68.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="
    https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.js
    "></script>
<script src="{{url("js/jquery-3.6.0.min.js")}}"></script>
<script src="{{url("js/wecoach/js2.js")}}"></script>
<script src="{{url("js/wecoach/main.js")}}"></script>
<script src="{{url("js/wecoach/sliderjs.js")}}"></script>
<script src="{{url("js/internAjax.js")}}"></script>
</body>
</html>
