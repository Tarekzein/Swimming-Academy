@extends("layouts.dashboard")

@section("content")
    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                            <h3 class="text-white text-lg-end text-capitalize pe-3">اضافة برومو كود</h3>
                            <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                        </div>
                    </div>
                    <div class="card-body form-body px-0 pb-2" style="display:none;">
                        <form method="post" action="{{route("admin.promoAdd")}}">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <select class="form-select" id="subs"  required name="academyID"
                                                aria-label="Default select example">
                                            <option selected>الاكاديمية</option>
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
                                            <option selected >الفرع</option>
                                            @foreach($branches as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="code" class="form-label text-md-end">{{ __('الكود') }}</label>
                                        <input id="code" type="text"
                                               class="form-control @error('code') is-invalid @enderror" name="code"
                                               value="{{ old('code') }}" required autocomplete="code" autofocus>

                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="discount_percent" class="form-label text-md-end">{{ __('نسبة الخصم %') }}</label>
                                        <input id="discount_percent" type="number"
                                               class="form-control @error('discount_percent') is-invalid @enderror" name="discount_percent"
                                               value="{{ old('discount_percent') }}" required autocomplete="discount_percent" autofocus>

                                        @error('discount_percent')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="start_date" class="form-label text-md-end">{{ __('تاريخ البدء') }}</label>
                                        <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror"
                                               name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date" autofocus>

                                        @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="end_date" class="form-label text-md-end">{{ __('تاريخ الانتهاء') }}</label>
                                        <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror"
                                               name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>

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
                                        {{ __('اضافة البرومو كود') }}
                                    </button>
                                </div>
                            </div>

                        </form>
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

    </div>
@endsection
