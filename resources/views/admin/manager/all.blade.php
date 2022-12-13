@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Managers List</h1>
        <x-searchbar/>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Whatsapp Number</th>
                <th scope="col">Study Field</th>
                <th scope="col">Previous Experience</th>
                <th scope="col">Current Employer</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody class="table-body">
            @foreach($managers as $manager)
                @php
                $user=\App\Models\User::find($manager->uid);
                @endphp
                @if($manager->profile_status=="approved")
                    <tr>
                        <th scope="row"><img src="{{url("images/uploads/$manager->profile_photo")}}" alt="" width="100px"></th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->whatsapp}}</td>
                        <td>{{$manager->study_field}}</td>
                        <td>{{$manager->previous_experience}}</td>
                        <td>{{$manager->current_employer}}</td>
                        <td>
                            <ul class="list-inline d-flex">
                                <li class="list-inline-item">
                                    <a href="{{route("admin.managerUpdate",$user->id)}}" class="btn btn-primary btn-sm">Edite</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{route("admin.managerDelete",$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @elseif($manager->profile_status=="pending")
                    <tr style="background-color: #f1f1f1">
                        <th scope="row"><img src="{{url("images/uploads/$manager->profile_photo")}}" alt="" width="100px"></th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->whatsapp}}</td>
                        <td>{{$manager->study_field}}</td>
                        <td>{{$manager->previous_experience}}</td>
                        <td>{{$manager->current_employer}}</td>
                        <td>
                            <ul class="list-inline d-flex align-items-center justify-content-evenly my-auto">
                                <li class="list-inline-item">
                                    <a href="#" class="link-success  h3"><i class="fa-regular fa-circle-check"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="link-danger  h3"><i class="fa-regular fa-circle-xmark"></i></a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
