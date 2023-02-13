<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{url("css/all.css")}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        rel="stylesheet"
    />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{url("css/main.css")}}" />
</head>
<body dir="rtl" >

    @yield("content")
    <div class="position-fixed bottom-1 start-1 z-index-3">

        @if(session()->has("message"))
            <div class="toast fade show p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">

                <div class="toast-header border-0">
                    <i class="material-icons text-success ms-2">check</i>
                    <span class="ms-auto text-success  font-weight-bold">Success</span>
                    <small class="text-body "> من {{now()->second}} ث </small>
                    <i class="fas fa-times  text-md me-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
                </div>

                <hr class="horizontal dark m-0">
                <div class="toast-body font-weight-bold">
                    {{session("message")}}
                </div>
            </div>
        @endif

        @if(session()->has("error"))
            <div class="toast fade show p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">

                <div class="toast-header border-0">
                    <i class="material-icons text-danger ms-2">close</i>
                    <span class="ms-auto text-danger  font-weight-bold">Success</span>
                    <small class="text-body "> من {{now()->second}} ث </small>
                    <i class="fas fa-times  text-md me-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
                </div>

                <hr class="horizontal dark m-0">
                <div class="toast-body font-weight-bold">
                    {{session("error")}}
                </div>
            </div>
        @endif
    </div>

</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
></script>
</body>
</html>
