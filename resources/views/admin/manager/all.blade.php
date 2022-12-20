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
                    <tr style="background-color: #f1f1f1" id="manager-{{$user->id}}">
                        <th scope="row"><img src="{{url("images/uploads/$manager->profile_photo")}}" alt="" width="100px"></th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->whatsapp}}</td>
                        <td>{{$manager->study_field}}</td>
                        <td>{{$manager->previous_experience}}</td>
                        <td>{{$manager->current_employer}}</td>
                        <td id="cell-{{$user->id}}">
                            <ul id="options-{{$user->id}}" class="list-inline d-flex align-items-center justify-content-evenly my-auto">
                                <li class="list-inline-item">
                                    <a href="#" data-userID="{{$user->id}}" class="link-success acceptManager h3"><i class="fa-regular fa-circle-check"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-userID="{{$user->id}}" class="link-danger rejectManager h3"><i class="fa-regular fa-circle-xmark"></i></a>
                                </li>
                            </ul>

                            <ul id="edite-options-{{$user->id}}" class="list-inline d-none">
                                <li class="list-inline-item">
                                    <a href="{{route("admin.managerUpdate",$user->id)}}" class="btn btn-primary btn-sm">Edite</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{route("admin.managerDelete",$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </li>
                            </ul>

                            <ul class="list-inline d-flex align-items-center justify-content-evenly my-auto">
                                <li class="list-inline-item">
                                    <select style="display:none;" class="form-select " id="branch-select-{{$user->id}}" required name="branchID" aria-label="Default select example">
                                        <option selected value="false">Choose Branch</option>
                                        @foreach($branches as $b)
                                            <option value="{{$b->id}}">{{$b->name}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="list-inline-item">
                                    <button style="display:none;" disabled class="btn  btn-success" id="accept-{{$user->id}}">accept</button>
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
