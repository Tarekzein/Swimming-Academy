@extends("layouts.dashboard")

@section("content")
    <div class="container">
    <h1 class="text-secondary text-center pb-5">Dashboard</h1>
    <H2>Welcome {{auth()->user()->name}}</H2>
        <div class="my-5 d-flex justify-content-evenly">
    <h3>Interns: {{count($interns)}}</h3>
    <h3>Captains: {{count($captains)}}</h3>
    <h3>Managers: {{count($managers)}}</h3>
        </div>
    <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.managers")}}">Show All Managers</a>
        </h4>
        <h4>
            <a href="{{route("admin.managerAdd")}}">Add Manager</a>
        </h4>

    </div>

    <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.captains")}}">Show All Captains</a>
        </h4>
        <h4>
            <a href="{{route("admin.captainAdd")}}">Add Captain</a>
        </h4>

    </div>

    <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.interns")}}">Show All Interns</a>
        </h4>
        <h4>
            <a href="{{route("admin.internAdd")}}">Add Intern</a>
        </h4>

    </div>
        <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.branches")}}">Show All Branches</a>
        </h4>
        <h4>
            <a href="{{route("admin.branchAdd")}}">Add Branch</a>
        </h4>

    </div>
    </div>
        <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.subscriptions")}}">Show All Subscriptions</a>
        </h4>
        <h4>
            <a href="{{route("admin.subsAdd")}}">Add Subscription</a>
        </h4>

    </div>

    <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.packages")}}">Show All Packages</a>
        </h4>

        <h4>
            <a href="{{route("admin.packageAdd")}}">Add Package</a>
        </h4>

    </div>

    <div class="my-5 d-flex justify-content-evenly">
        <h4>
            <a href="{{route("admin.promocodes")}}">Show All PromoCodes</a>
        </h4>

        <h4>
            <a href="{{route("admin.promoAdd")}}">Add PromoCode</a>
        </h4>

    </div>

    </div>
@endsection
