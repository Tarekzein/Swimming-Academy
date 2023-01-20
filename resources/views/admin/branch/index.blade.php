@extends("layouts.dashboard")

@section("content")

        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                            <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة فرع</h3>
                            <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                        </div>
                    </div>
                    <div class="card-body form-body px-0 pb-2" style="display:none;">
                        <form method="post" action="{{route("admin.branchAdd")}}">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="name" class="form-label text-md-end">{{ __('الاسم') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="address" class="form-label text-md-end">{{ __('العنوان') }}</label>
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required >

                                        @error('address')
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
                                        {{ __('اضافة الفرع') }}
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
                            <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة خدمة</h3>
                            <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                        </div>
                    </div>
                    <div class="card-body form-body px-0 pb-2" style="display:none;">
                        <form method="post" action="{{route("admin.subsAdd")}}">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="name" class="form-label text-md-end">{{ __('الاسم') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">

                                        <select class="form-select border-secondary" required name="branchID" aria-label="Default select example">
                                            <option selected>الفرع</option>
                                            @foreach($branches as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('address')
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
                                        {{ __('اضافة الخدمة') }}
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
                            <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة باكدج</h3>
                            <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                        </div>
                    </div>
                    <div class="card-body form-body px-0 pb-2" style="display:none;">
                        <form method="post" action="{{route("admin.packageAdd")}}">
                            @csrf


                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">

                                        <select class="form-select border-secondary" id="branch" required name="branchID" aria-label="Default select example">
                                            <option selected>الفرع</option>
                                            @foreach($branches as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <select class="form-select border-secondary"  id="subs" disabled required name="subsID" aria-label="Default select example">
                                            <option selected>الخدمة</option>
                                            @foreach($subscription as $s)
                                                @php
                                                    $branch=\App\Models\Branch::find($s->branchID);
                                                @endphp
                                                <option value="{{$s->id}}">{{$s->name}} - {{$branch->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row px-5">
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-group input-group-outline my-3">

                                        <label for="name" class="form-label text-md-end">{{ __('Package Name') }}</label>
                                        <input id="package_name" type="text" class="form-control @error('package_name') is-invalid @enderror" name="package_name" value="{{ old('package_name') }}" required autocomplete="package_name" autofocus>

                                        @error('package_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="sessions_number" class="form-label text-md-end">{{ __('Sessions Number') }}</label>
                                        <input id="sessions_number" type="number" class="form-control @error('sessions_number') is-invalid @enderror" name="sessions_number" value="{{ old('sessions_number') }}" required autocomplete="sessions_number" autofocus>

                                        @error('sessions_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="price" class="form-label text-md-end">{{ __('Price') }}</label>
                                        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                        @error('price')
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
                                        {{ __('اضافة الباكدج') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>

        <div class="pt-5">
        <h3 class="text-secondary text-center">الفروع</h3>
        </div>
        <div class="row py-5">

            @foreach($branches as $b)
            <div class="col-lg-4 pb-3 col-md-6">
                <a href="{{route("admin.branch",$b->id)}}" class="card-link link-dark">
                    <div class="card cardLink">
                        <div class="card-body py-1">
                            <div class="d-flex justify-content-between">
                                <div
                                    class="icon icon-lg icon-shape text-center "
                                >
                                    <i class="material-icons opacity-10 text-dark">store</i>
                                </div>
                                <h5 class="mx-3 me-0 my-auto" style="flex-basis: 70%">{{$b->name}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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



@endsection
