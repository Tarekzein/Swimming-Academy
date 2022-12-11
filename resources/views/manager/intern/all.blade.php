@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Interns List</h1>
        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Whatsapp Number</th>
                <th scope="col">Academy</th>
                {{--                <th scope="col">Study Field</th>--}}
                {{--                <th scope="col">Previous Experience</th>--}}
                {{--                <th scope="col">Current Employer</th>--}}
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @foreach($interns as $intern)
                @php
                    $user=\App\Models\User::find($intern->uid);
                    $academy=\App\Models\Academy::find($intern->academyID);
                @endphp
                <tr>
                    <th scope="row"><img src="{{url("images/uploads/$intern->profile_photo")}}" alt="" width="100px">
                    </th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->whatsapp}}</td>
                    <td>{{$academy->name}}</td>
                    {{--                <td>{{$manager->study_field}}</td>--}}
                    {{--                <td>{{$manager->previous_experience}}</td>--}}
                    {{--                <td>{{$manager->current_employer}}</td>--}}
                    <td>
                        <ul class="list-inline d-flex">
                            <li class="list-inline-item">
                                <a href="{{route("manager.updateIntern",$user->id)}}" class="btn btn-primary btn-sm">Edite</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{route("manager.deleteIntern",$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
