@extends("layouts.manager")

@section("content")



@endsection



<div class="container">
    <div class="my-5 d-flex justify-content-center">
        <div>
            <h1 class="text-center mx-5">Welcome {{$user->name}}</h1>
            <h3 class="text-center mx-5">Branch: <a href="{{route("manager.branch",$branch->id)}}" class="link link-dark">{{$branch->name}}</a> </h3>
        </div>
        <h4>
            <a href="{{route("manager.profile.update")}}" class="btn btn-primary mx-5">Update My Info</a>
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


    <div class="my-5 d-flex justify-content-evenly">

        <h4>
            <a href="{{route("manager.watercardAdd")}}?branch={{$branch->id}}">Add Water Card</a>
        </h4>

    </div>

    <div class="my-5 d-flex justify-content-evenly">

        <h4>
            <a href="{{route("manager.incomes")}}">Show All Incomes</a>
        </h4>

        <h4>
            <a href="{{route("manager.incomeAdd")}}">Add Income</a>
        </h4>

    </div>

    <div class="my-5 d-flex justify-content-evenly">

        <h4>
            <a href="{{route("manager.outcomes")}}">Show All Outcomes</a>
        </h4>

        <h4>
            <a href="{{route("manager.outcomeAdd")}}">Add Outcome</a>
        </h4>

    </div>

    <div class="my-5 text-center">

        <h1 class="mb-5">Announcements</h1>

        @foreach($announcements as $announcement)
            <div style="border-radius: 10px" class="row w-50 mx-auto p-2 my-2 bg-{{$announcement->type}}">
                <h4 class="text-center text-white">{{$announcement->announcement}}</h4>
            </div>
        @endforeach


    </div>

</div>
