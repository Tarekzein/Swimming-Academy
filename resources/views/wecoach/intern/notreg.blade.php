@extends('layouts.wecoach')

@section('content')
    <div class="container vh-100">
        <div class="row position-absolute" style="left: 50%;top: 50%; transform: translate(-50%,-50%);">
            <div class="col-lg-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center text-white">لم تشتركي بعد</h3>
                <h5 class="text-center text-white"><a href="{{route("wecoach.apply")}}" class="btn btn-primary">اشتركي الان</a></h5>
            </div>
        </div>
    </div>
@endsection
