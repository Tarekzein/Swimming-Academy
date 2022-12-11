@extends("layouts.manager")

@section("content")

    <div class="container">
        <h1 class="text-center my-5">Welcome {{$user->name}}</h1>


        <div class="my-5 d-flex justify-content-evenly">
            <h4>
                <a href="{{route("manager.interns")}}">Show All Interns</a>
            </h4>
            <h4>
                <a href="{{route("manager.addIntern")}}">Add Intern</a>
            </h4>

        </div>

    </div>


@endsection
