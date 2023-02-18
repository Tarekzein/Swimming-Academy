<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Dashboard</title>

    <link rel="icon" type="image/png" href="{{url("images/favicon.png")}}" />
    <!--     Fonts and icons     -->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"
    />
    <!-- Nucleo Icons -->
    <link href="{{url("css/admin/nucleo-icons.css")}}" rel="stylesheet" />
    <link href="{{url("css/admin/nucleo-svg.css")}}" rel="stylesheet" />
    <link href="{{url("css/dashboard.css")}}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script
        src="https://kit.fontawesome.com/42d5adcbca.js"
        crossorigin="anonymous"
    ></script>

    <!-- Material Icons -->

    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
        rel="stylesheet"
    />
    <!-- CSS Files -->

    <link
        id="pagestyle"
        href="{{url("css/admin/material-dashboard.css?v=3.0.4")}}"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">



    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>
<body class="g-sidenav-show rtl" style="background-color: #e1e1e1">

    @include("constants.captain.sideNav")

<main
    class="main-content position-relative min-vh-100 h-100 border-radius-lg overflow-x-hidden"

>


    @include("constants.captain.topNav")

    <div class="container-fluid py-4">
        @yield("content")
    </div>

    @include("constants.admin.footer")
</main>

<script src="{{url("js/jquery-3.6.0.min.js")}}" ></script>
<script src="{{url("js/admin.js")}}" ></script>
<script src="{{url("js/searchFunc.js")}}" ></script>
<script src="{{url("js/common.js")}}" ></script>
<!--   Core JS Files   -->
<script src="{{url("js/core/popper.min.js")}}"></script>
<script src="{{url("js/core/bootstrap.min.js")}}"></script>
<script src="{{url("js/core/bootstrap.bundle.min.js")}}"></script>
<script src="{{url("js/plugins/perfect-scrollbar.min.js")}}"></script>
<script src="{{url("js/plugins/smooth-scrollbar.min.js")}}"></script>
<script src="{{url("js/plugins/fullcalendar.min.js")}}"></script>
<script src="{{url("js/plugins/chartjs.min.js")}}"></script>

<script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
            damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
</script>

<script>
    $(".progress-bar").animate({
        width: `${$(".progress-bar").attr("data-cardpercent")}%`
    }, 2000);
</script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url("js/material-dashboard.min.js?v=3.0.4")}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>

        $('#dates').datepicker({
            multidate: true,
            format: "yyyy-mm-dd"
        });
    </script>
</body>
</html>
