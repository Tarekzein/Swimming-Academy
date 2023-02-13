@extends("layouts.dashboard")

@section("content")

{{--    <div class="container">--}}


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 mb-2 align-items-center">
                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex flex-sm-wrap align-items-center justify-content-between">

                                        <div class="d-flex mx-3 align-items-center ">
                                            <div class="icon d-flex align-items-center my-auto">
                                                <i class="material-icons text-secondary" style="font-size:30px;">store</i>
                                            </div>
                                            <h5 class="text-secondary my-auto me-4">اختر الفرع </h5>
                                        </div>

                                        <form action="" id="billing-filter-form" method="get">

                                            <div class="d-flex flex-sm-wrap mx-3 align-items-center align-items-center">


                                                <div>
                                                    <select class="form-select border-dark" id="billing-filter" required name="branch" aria-label="Default select example">
                                                        <option value="0" >كل الفروع</option>

                                                        @foreach($branches as $b)
                                                            <option value="{{$b->id}}" >{{$b->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 mb-4">
                            <div class="row">
                                <div class="avatar-group my-2 text-center">
                                    <img class="avatar avatar-lg" src="{{url("images/wecoach/_Path_.png")}}" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="icon d-flex align-items-center  my-auto">
                                                    <i class="material-icons text-success" style="font-size:50px;">monetization_on</i>
                                                </div>
                                                <div class="info me-5  my-auto" >
                                                    <h4><span id="weIncome">{{$incomeWecoach->totalIncomes}}</span> جنيه</h4>
                                                    <h5 class="text-secondary"> ارادات اليوم</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card mt-2">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="icon d-flex align-items-center my-auto">
                                                    <i class="material-icons text-warning" style="font-size:50px;">monetization_on</i>
                                                </div>
                                                <div class="info me-5 my-auto" >
                                                    <h4><span id="weOutcome">{{$outcomeWecoach->totalOutcome}}</span> جنيه </h4>
                                                    <h5 class="text-secondary">مصروفات اليوم</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>


                        <div class="col-lg-6 col-sm-6 mb-4">
                            <div class="row">
                                <div class="avatar-group my-2 text-center">
                                    <img class="avatar avatar-lg" src="{{url("images/waves/waveslogo.png")}}" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card ">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="icon d-flex align-items-center  my-auto">
                                                    <i class="material-icons text-success" style="font-size:50px;">monetization_on</i>
                                                </div>
                                                <div class="info me-5  my-auto" >
                                                    <h4><span id="wavIncome">{{$incomeWaves->totalIncomes}}</span> جنيه</h4>
                                                    <h5 class="text-secondary"> ارادات اليوم</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col mt-2">
                                    <div class="card">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="icon d-flex align-items-center my-auto">
                                                    <i class="material-icons text-warning" style="font-size:50px;">monetization_on</i>
                                                </div>
                                                <div class="info me-5 my-auto" >
                                                    <h4><span id="wavOutcome">{{$outcomeWaves->totalOutcome}}</span> جنيه</h4>
                                                    <h5 class="text-secondary">مصروفات اليوم</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                        <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة ارادات</h3>
                        <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                    </div>
                </div>
                <div class="card-body form-body px-0 pb-2" style="display:none;">
                    <form method="post" action="{{route("admin.incomeAdd")}}">
                        @csrf


                        <div class="row px-5">
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">

                                    <select class="form-select" id="academyID"  required name="academyID"
                                            aria-label="Default select example">
                                        <option selected>Academy</option>
                                        @foreach($academies as $a)

                                            <option value="{{$a->id}}">{{$a->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">

                                    <select  class="form-select" id="branch" required name="branchID"
                                             aria-label="Default select example">
                                        <option selected >Branch</option>
                                        @foreach($branches as $b)
                                            <option value="{{$b->id}}">{{$b->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row px-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label for="incomeType" class="form-label text-md-end">{{ __('Income Type') }}</label>

                                    <input id="incomeType" type="text"
                                           class="form-control @error('incomeType') is-invalid @enderror" name="incomeType"
                                           value="{{ old('incomeType') }}" required autocomplete="incomeType" autofocus>

                                    @error('incomeType')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label for="value"
                                           class="form-label text-md-end">{{ __('Value	') }}</label>
                                    <input id="value" type="number"
                                           class="form-control @error('discount_percent') is-invalid @enderror" name="value"
                                           value="{{ old('value') }}" required autocomplete="value" autofocus>

                                    @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label for="incomeDate"
                                           class="form-label text-md-end">{{ __('Date') }}</label>

                                    <input id="incomeDate" type="date"
                                           class="form-control @error('incomeDate') is-invalid @enderror" name="incomeDate"
                                           value="{{ old('incomeDate') }}" required autocomplete="incomeDate" autofocus>

                                    @error('incomeDate')
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
                                    {{ __('اضافة ') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                        <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة مصروفات</h3>
                        <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                    </div>
                </div>
                <div class="card-body form-body px-0 pb-2" style="display:none;">
                    <form method="post" action="{{route("admin.outcomeAdd")}}">
                        @csrf


                        <div class="row px-5">
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">

                                    <select class="form-select" id="academyID"  required name="academyID"
                                            aria-label="Default select example">
                                        <option selected>Academy</option>
                                        @foreach($academies as $a)

                                            <option value="{{$a->id}}">{{$a->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">

                                    <select  class="form-select" id="branch" required name="branchID"
                                             aria-label="Default select example">
                                        <option selected >Branch</option>
                                        @foreach($branches as $b)
                                            <option value="{{$b->id}}">{{$b->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row px-5">
                            <div class="col-lg-4 col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label for="outcomeType" class="form-label text-md-end">{{ __('Outcome Type') }}</label>

                                    <input id="outcomeType" type="text"
                                           class="form-control @error('outcomeType') is-invalid @enderror" name="outcomeType"
                                           value="{{ old('outcomeType') }}" required autocomplete="outcomeType" autofocus>

                                    @error('outcomeType')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label for="value"
                                           class="form-label text-md-end">{{ __('Value	') }}</label>
                                    <input id="value" type="number"
                                           class="form-control @error('discount_percent') is-invalid @enderror" name="value"
                                           value="{{ old('value') }}" required autocomplete="value" autofocus>

                                    @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label for="outcomeDate"
                                           class="form-label text-md-end">{{ __('Date') }}</label>

                                    <input id="outcomeDate" type="date"
                                           class="form-control @error('outcomeDate') is-invalid @enderror" name="outcomeDate"
                                           value="{{ old('outcomeDate') }}" required autocomplete="outcomeDate" autofocus>

                                    @error('outcomeDate')
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
                                    {{ __('اضافة ') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header  cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary  flex-wrap d-flex align-items-center  shadow-dark border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-evenly align-items-center">
                                <h3 class="text-white text-lg-end text-capitalize pe-3">كل الارادات</h3>
                                <div class="p-3">
                                    <x-searchbar/>
                                </div>
                            </div>

                    </div>
                </div>

                <div  class="card-body  px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Academy</th>
                                <th scope="col">Branch</th>
                                <th scope="col">Income Type</th>
                                <th scope="col">Value</th>
                                <th scope="col">Date</th>
                                <th scope="col">Options</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            @php
                                $counter=0;
                            @endphp
                            @foreach($incomes as $p)
                                @php
                                    $academy=\App\Models\Academy::find($p->academyID);
                                    $branch=\App\Models\Branch::find($p->branchID);
                                @endphp
                                <tr>
                                    <th scope="row">{{++$counter}}</th>
                                    <td>{{$academy->name}}</td>
                                    <td>{{$branch->name}}</td>
                                    <td>{{$p->incomeType}}</td>
                                    <td>{{$p->value}} EGP</td>
                                    <td>{{$p->incomeDate}}</td>

                                    <td>
                                        <ul
                                            class="list-inline d-flex px-2 py-3 ms-4"
                                        >
                                            <li class="mx-2">
                                                <a href="{{route("admin.incomeUpdate",$p->id)}}" class="list-inline-item text-bold text-center link link-primary"><span class="material-symbols-outlined">edit</span></a>
                                            </li>

                                            <li class="mx-2">
                                                <a href="{{route("admin.incomeDelete",$p->id)}}" class="text-center text-bold list-inline-item link link-danger"><span class="material-symbols-outlined">delete</span></a>
                                            </li>
                                        </ul>
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

    <div class="row pt-5">
        <div class="col-12">
            <div class="card ">
                <div class="card-header  cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning  flex-wrap d-flex align-items-center shadow-dark border-radius-lg pt-4 pb-3">
                            <div class="d-flex justify-content-evenly align-items-center">
                                <h3 class="text-white text-lg-end text-capitalize pe-3">كل المصروفات</h3>
                                <div class="p-3">
                                    <x-searchbar/>
                                </div>
                            </div>

                    </div>
                </div>

                <div  class="card-body  px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Academy</th>
                                <th scope="col">Branch</th>
                                <th scope="col">Outcome Type</th>
                                <th scope="col">Value</th>
                                <th scope="col">Date</th>
                                <th scope="col">Options</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            @php
                                $counter=0;
                            @endphp
                            @foreach($outcomes as $p)
                                @php
                                    $academy=\App\Models\Academy::find($p->academyID);
                                    $branch=\App\Models\Branch::find($p->branchID);
                                @endphp
                                <tr>
                                    <th scope="row">{{++$counter}}</th>
                                    <td>{{$academy->name}}</td>
                                    <td>{{$branch->name}}</td>
                                    <td>{{$p->outcomeType}}</td>
                                    <td>{{$p->value}} EGP</td>
                                    <td>{{$p->outcomeDate}}</td>

                                    <td>
                                        <ul
                                            class="list-inline d-flex px-2 py-3 ms-4"
                                        >
                                            <li class="mx-2">
                                                <a href="{{route("admin.outcomeUpdate",$p->id)}}" class="list-inline-item text-bold text-center link link-primary"><span class="material-symbols-outlined">edit</span></a>
                                            </li>

                                            <li class="mx-2">
                                                <a href="{{route("admin.outcomeDelete",$p->id)}}" class="text-center text-bold list-inline-item link link-danger"><span class="material-symbols-outlined">delete</span></a>
                                            </li>
                                        </ul>

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
{{--    </div>--}}

@endsection
