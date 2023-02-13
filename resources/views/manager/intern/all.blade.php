@extends("layouts.manager")

@section("content")
    <div class="container">

        <h5 class="text-secondary mb-5">كل العملاء</h5>


        <div class="row justify-content-center">

            <div class="col-lg-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg start-6 icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
                        >
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <h2 class="text-lg mb-0 text-capitalize"> العملاء في الفرع</h2>
                            <h4 class="mb-0" id="internsCount">{{count($interns)}}</h4>
                        </div>

                    </div>
                    <hr class="dark horizontal my-0" />
                    <div class="card-footer p-3">

                    </div>
                </div>
            </div>


        </div>



        <div class="row mt-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark  flex-wrap d-flex align-items-center shadow-dark border-radius-lg pt-4 pb-3">

                            <div class="title-search flex-wrap d-flex justify-content-evenly align-items-center  ">
                                <h3 class="text-white text-lg-end text-capitalize pe-3">العملاء</h3>
                                <div class="p-3">
                                    <x-searchbar/>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">
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
                                        <td>
                                            <ul
                                                class="list-inline d-flex px-2 py-3 ms-4"
                                            >
                                                <li class="mx-2">
                                                    <a href="{{route("manager.updateIntern",$user->id)}}" class="list-inline-item text-bold text-center link link-primary"><span class="material-symbols-outlined">edit</span></a>
                                                </li>

                                                <li class="mx-2">
                                                    <a href="{{route("manager.deleteIntern",$user->id)}}" class="text-center text-bold list-inline-item link link-danger"><span class="material-symbols-outlined">delete</span></a>
                                                </li>
                                            </ul>
                                            {{--                                            <div class="dropdown text-center s-4">--}}
                                            {{--                                                <a--}}
                                            {{--                                                    class="cursor-pointer"--}}
                                            {{--                                                    id="dropdownTable"--}}
                                            {{--                                                    data-bs-toggle="dropdown"--}}
                                            {{--                                                    aria-expanded="false"--}}
                                            {{--                                                >--}}
                                            {{--                                                    <i class="fa fa-ellipsis-v text-secondary"></i>--}}
                                            {{--                                                </a>--}}
                                            {{--                                                <ul--}}
                                            {{--                                                    class="dropdown-menu dropdown-menu-end px-2 py-3 ms-4"--}}
                                            {{--                                                    aria-labelledby="dropdownTable"--}}
                                            {{--                                                >--}}
                                            {{--                                                    <li class="">--}}
                                            {{--                                                        <a href="{{route("admin.internUpdate",$user->id)}}" class="dropdown-item text-bold text-center link link-primary">تعديل</a>--}}
                                            {{--                                                    </li>--}}

                                            {{--                                                    <li class="">--}}
                                            {{--                                                        <a href="{{route("admin.internDelete",$user->id)}}" class="text-center text-bold dropdown-item link link-danger">مسح</a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                </ul>--}}
                                            {{--                                            </div>--}}


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
