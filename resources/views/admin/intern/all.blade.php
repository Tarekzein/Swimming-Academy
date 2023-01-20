@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h5 class="text-secondary mb-5">كل المتدربات</h5>

        <div class="card">
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-lg-6 d-flex align-items-center col-sm-3">
                        <h6 class="text-secondary mx-5 ">الفرع:</h6>
                        <select class="form-select border-dark  " id="watercard-filter" required name="branch" aria-label="Default select example">
                            <option value="1">option 1</option>
                            <option value="1">option 1</option>
                            <option value="1">option 1</option>
                            <option value="1">option 1</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-6 mb-lg-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg start-6 icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"
                                >
                                    <i class="material-icons opacity-10">person</i>
                                </div>

                                <div class="text-end pt-1">
                                    <h2 class="text-lg mb-0 text-capitalize">المتدربات</h2>
                                    <h4 class="mb-0">5</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0" />
                            <div class="card-footer p-3">

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg start-6 icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
                                >
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h2 class="text-lg mb-0 text-capitalize">المتدربات</h2>
                                    <h4 class="mb-0">5</h4>
                                </div>

                            </div>
                            <hr class="dark horizontal my-0" />
                            <div class="card-footer p-3">

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <div class="row mt-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark d-flex align-items-center shadow-primary border-radius-lg pt-4 pb-3">

                            <div class="title-search d-flex justify-content-evenly align-items-center flex-grow-1 ">
                            <h3 class="text-white text-lg-end text-capitalize pe-3">المتدربات</h3>
                            <x-searchbar/>

                            </div>

                            <div class="filters d-flex px-3 flex-grow-1">
                               <div class="filter-item flex-grow-1 px-2">
                                   <h4 class="text-white text-sm">filter 1</h4>
                                   <select class="form-select bg-white  border-white" id="watercard-filter" required name="branch" aria-label="Default select example">
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                   </select>
                               </div>
                                <div class="filter-item flex-grow-1 px-2">
                                   <h4 class="text-sm text-white">filter 2</h4>
                                   <select class="form-select bg-white border-white" id="watercard-filter" required name="branch" aria-label="Default select example">
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                   </select>
                               </div>
                                <div class="filter-item flex-grow-1 px-2">
                                   <h4 class="text-white text-sm">filter 3</h4>
                                   <select class="form-select bg-white border-white" id="watercard-filter" required name="branch" aria-label="Default select example">
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                       <option value="1">option 1</option>
                                   </select>
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
                                        {{--                <td>{{$manager->study_field}}</td>--}}
                                        {{--                <td>{{$manager->previous_experience}}</td>--}}
                                        {{--                <td>{{$manager->current_employer}}</td>--}}
                                        <td>
                                            <div class="dropdown text-center s-4">
                                                <a
                                                    class="cursor-pointer"
                                                    id="dropdownTable"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                    <i class="fa fa-ellipsis-v text-secondary"></i>
                                                </a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu-end px-2 py-3 ms-4"
                                                    aria-labelledby="dropdownTable"
                                                >
                                                    <li class="">
                                                        <a href="{{route("admin.internUpdate",$user->id)}}" class="dropdown-item text-bold text-center link link-primary">تعديل</a>
                                                    </li>

                                                    <li class="">
                                                        <a href="{{route("admin.internDelete",$user->id)}}" class="text-center text-bold dropdown-item link link-danger">مسح</a>
                                                    </li>
                                                </ul>
                                            </div>

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
