@extends("layouts.manager")

@section("content")

    <div class="container">
        <div class="my-5 d-flex justify-content-center">
            <h1 class="text-center mx-5">Welcome {{$user->name}}</h1>
            <h4>
                <a href="{{route("manager.profile.update",$user->id)}}" class="btn btn-primary mx-5">Update My Info</a>
            </h4>
            <h4>
                <a href="#" class="btn btn-primary mx-5">Change Password</a>
            </h4>
        </div>


        <div class="my-5 d-flex justify-content-evenly">
            <h4>
                <a href="{{route("manager.interns")}}">Show All Interns</a>
            </h4>
            <h4>
                <a href="{{route("manager.addIntern")}}">Add Intern</a>
            </h4>

        </div>


        <div class="my-5 d-flex justify-content-evenly">
            <h4>
                <a href="{{route("manager.captains")}}">Show All Captains</a>
            </h4>
            <h4>
                <a href="{{route("manager.addCaptain")}}">Add Captain</a>
            </h4>

        </div>

    </div>


@endsection
