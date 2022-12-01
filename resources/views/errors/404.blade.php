@extends("layouts.errors")

@section("content")

    <div class="container">
        <div class="col text-center m-auto position-absolute" style="top:50%;left: 50%;transform: translate(-50%,-50%);">
            <h1 class="mb-5 text-dark text-xl-center">Error 404</h1>
            <a href="@php  back(); @endphp" class="btn btn-primary">Back To Page</a>
        </div>
    </div>

@endsection
