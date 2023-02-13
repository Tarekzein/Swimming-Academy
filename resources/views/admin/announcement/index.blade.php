@extends("layouts.dashboard")

@section("content")
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                            <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة خبر</h3>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <form method="post" action="{{route("admin.announcement")}}">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <textarea class="form-text form-control" placeholder="Announcement" name="announcement" id="announcement" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <select  class="form-select" id="branch" required name="branchID"
                                                 aria-label="Default select example">
                                            <option selected >الفرع</option>
                                            @foreach($branches as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <select  class="form-select" id="userType" required name="userType"
                                                 aria-label="Default select example">
                                            <option selected>User Type</option>
                                            <option  value="all">all</option>
                                            <option  value="manager">Managers</option>
                                            <option  value="captain">Captains</option>
                                            <option  value="intern">Interns</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <select  class="form-select" id="type" required name="type"
                                                 aria-label="Default select example">

                                            <option selected >Announcement Type</option>
                                            <option value="danger">Warning</option>
                                            <option value="success">prize</option>
                                            <option value="primary">normal</option>

                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="value"
                                               class="form-label text-md-end">{{ __('End Date') }}</label>

                                        <input id="end_date" type="date"
                                               class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                                               value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>

                                        @error('end_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>




                            <div class="row px-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('نشر الخبر') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>

{{--        <div class="row pt-5">--}}
{{--            <div class="col-12">--}}
{{--                <div class="card my-4">--}}
{{--                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">--}}
{{--                        <div class="bg-gradient-warning d-flex flex-wrap align-items-center shadow-warning border-radius-lg pt-4 pb-3">--}}
{{--                            <div class="title-search flex-wrap d-flex justify-content-evenly align-items-center flex-grow-1 ">--}}
{{--                                <h3 class="text-white flex-grow-1 text-lg-end text-capitalize pe-3">كباتن تحت الاختبار</h3>--}}
{{--                                <div class="p-3"> <x-searchbar/></div>--}}

{{--                            </div>--}}

{{--                            <div class="filters d-flex flex-wrap px-3 flex-grow-1">--}}
{{--                                <div class="filter-item flex-grow-1 px-2">--}}
{{--                                    <h4 class="text-white text-sm">filter 1</h4>--}}
{{--                                    <select class="form-select bg-white  border-white" id="watercard-filter" required name="branch" aria-label="Default select example">--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="filter-item flex-grow-1 px-2">--}}
{{--                                    <h4 class="text-sm text-white">filter 2</h4>--}}
{{--                                    <select class="form-select bg-white border-white" id="watercard-filter" required name="branch" aria-label="Default select example">--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="filter-item flex-grow-1 px-2">--}}
{{--                                    <h4 class="text-white text-sm">filter 3</h4>--}}
{{--                                    <select class="form-select bg-white border-white" id="watercard-filter" required name="branch" aria-label="Default select example">--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                        <option value="1">option 1</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="card-body  px-0 pb-2">--}}
{{--                        <div class="table-responsive min-vh-50 p-0">--}}
{{--                            <table class="table align-items-center mb-0 ">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th scope="col">#</th>--}}
{{--                                    <th scope="col">Academy</th>--}}
{{--                                    <th scope="col">Branch</th>--}}
{{--                                    <th scope="col">Promo Code</th>--}}
{{--                                    <th scope="col">Discount Percent</th>--}}
{{--                                    <th scope="col">Start Date</th>--}}
{{--                                    <th scope="col">End Date</th>--}}
{{--                                    <th scope="col">Options</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody class="table-body">--}}
{{--                                @php--}}
{{--                                    $counter=0;--}}
{{--                                @endphp--}}
{{--                                @foreach($promocodes as $p)--}}
{{--                                    @php--}}
{{--                                        $academy=\App\Models\Academy::find($p->academyID);--}}
{{--                                        $branch=\App\Models\Branch::find($p->branchID);--}}
{{--                                    @endphp--}}
{{--                                    <tr class="text-center">--}}
{{--                                        <th scope="row">{{++$counter}}</th>--}}
{{--                                        <td>{{$academy->name}}</td>--}}
{{--                                        <td>{{$branch->name}}</td>--}}
{{--                                        <td>{{$p->code}}</td>--}}
{{--                                        <td>{{$p->discount_percent}}</td>--}}
{{--                                        <td>{{$p->start_date}}</td>--}}
{{--                                        <td>{{$p->end_date}}</td>--}}

{{--                                        <td>--}}
{{--                                            <div class="dropdown text-center s-4">--}}
{{--                                                <a--}}
{{--                                                    class="cursor-pointer"--}}
{{--                                                    id="dropdownTable"--}}
{{--                                                    data-bs-toggle="dropdown"--}}
{{--                                                    aria-expanded="false"--}}
{{--                                                >--}}
{{--                                                    <i class="fa fa-ellipsis-v text-secondary"></i>--}}
{{--                                                </a>--}}
{{--                                                <ul class="dropdown-menu dropdown-menu-start px-2 py-3 ms-4">--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="{{route("admin.promoUpdate",$p->id)}}" class="dropdown-item text-bold text-center link link-primary">Edite</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="">--}}
{{--                                                        <a href="{{route("admin.promoDelete",$p->id)}}" class="text-center text-bold dropdown-item link link-danger">Delete</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}


{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


        <div class="position-fixed bottom-1 start-1 z-index-3">

            @if(session()->has("message"))
                <div class="toast fade show p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">

                    <div class="toast-header border-0">
                        <i class="material-icons text-success ms-2">check</i>
                        <span class="ms-auto text-success  font-weight-bold">Success</span>
                        <small class="text-body "> من {{now()->second}} ث </small>
                        <i class="fas fa-times  text-md me-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
                    </div>

                    <hr class="horizontal dark m-0">
                    <div class="toast-body font-weight-bold">
                        {{session("message")}}
                    </div>
                </div>
            @endif

            @if(session()->has("error"))
                <div class="toast fade show p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">

                    <div class="toast-header border-0">
                        <i class="material-icons text-danger ms-2">close</i>
                        <span class="ms-auto text-danger  font-weight-bold">Success</span>
                        <small class="text-body "> من {{now()->second}} ث </small>
                        <i class="fas fa-times  text-md me-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
                    </div>

                    <hr class="horizontal dark m-0">
                    <div class="toast-body font-weight-bold">
                        {{session("error")}}
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
