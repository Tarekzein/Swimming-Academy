@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Captains List</h1>

        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Whatsapp Number</th>
                {{--                <th scope="col">Study Field</th>--}}
                {{--                <th scope="col">Previous Experience</th>--}}
                {{--                <th scope="col">Current Employer</th>--}}
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody id="captainsTable" class="table-body">
            @foreach($captains as $captain)
                @php
                    $user=\App\Models\User::find($captain->uid);
                @endphp
                <tr>
                    <th scope="row"><img src="{{url("images/uploads/$captain->profile_photo")}}" alt="" width="100px">
                    </th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->whatsapp}}</td>
                    {{--                <td>{{$manager->study_field}}</td>--}}
                    {{--                <td>{{$manager->previous_experience}}</td>--}}
                    {{--                <td>{{$manager->current_employer}}</td>--}}
                    <td>
                        <ul class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="{{route("admin.captainUpdate",$user->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("admin.captainDelete",$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h1 class="mt-5">Pending Captains</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Whatsapp Number</th>
                {{--                <th scope="col">Study Field</th>--}}
                {{--                <th scope="col">Previous Experience</th>--}}
                {{--                <th scope="col">Current Employer</th>--}}
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody id="pendingTable" class="table-body">
            @foreach($pendingCaptains as $captain)
                @php
                    $user=\App\Models\User::find($captain->uid);
                @endphp
                <tr id="captain-{{$user->id}}">
                    <th scope="row"><img src="{{url("images/uploads/$captain->profile_photo")}}" alt="" width="100px">
                    </th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->whatsapp}}</td>
                    {{--                <td>{{$manager->study_field}}</td>--}}
                    {{--                <td>{{$manager->previous_experience}}</td>--}}
                    {{--                <td>{{$manager->current_employer}}</td>--}}
                    <td>
                        <ul id="approveOptions-{{$user->id}}" class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="#" data-userID="{{$user->id}}" class="link-success acceptCaptain h3"><i class="fa-regular fa-circle-check"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-userID="{{$user->id}}" class="link-danger rejectCaptain h3"><i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                        </ul>
                        <ul id="options-{{$user->id}}" class="list-inline d-none">
                            <li class="list-inline-item">
                                <a href="{{route("admin.captainUpdate",$user->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("admin.captainDelete",$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
