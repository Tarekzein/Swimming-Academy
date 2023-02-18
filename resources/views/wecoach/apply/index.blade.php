@extends('layouts.wecoach')

@section('content')

    <div class="container px-2">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">تسجيل في الخدمات</h4>
                </div>
                <div class="card-body">
                    <form action="{{route("wecoach.apply")}}" method="POST">
                        <input type="hidden" value="{{$academy->id}}">
                        @csrf
                        <div class="row ">
                            <div class="col-lg-6 mb-3">
                                <select class="form-select border-secondary" disabled id="subs" required name="subType" aria-label="Default select example">
                                    <option selected value="null">الخدمة</option>
                                </select>
                                <h6 class="text-danger text-sm select-message"></h6>

                            </div>
                            <div class="col-lg-6 mb-3">
                                <select class="form-select border-secondary" id="branch" required name="branchID" aria-label="Default select example">
                                    <option value="null" selected>الفرع</option>
                                    @foreach($branches as $b)
                                        <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                </select>
                                <h6 class="text-danger text-sm select-message"></h6>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <select class="form-select border-secondary" disabled id="pack" required name="group_type" aria-label="Default select example">
                                    <option selected value="null">الباكدج</option>
                                </select>
                                <h6 class="text-danger text-sm select-message"></h6>

                            </div>
                            <div class="col-lg-6 mb-3">
                                <select class="form-select border-secondary" disabled id="cap" required name="capID" aria-label="Default select example">
                                    <option selected value="null">الكباتن في الفرع</option>
                                </select>
                                <h6 class="text-danger text-sm select-message"></h6>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 d-flex justify-content-end align-items-center text-end">
                                <h5> <span id="total-price" class="text-danger my-auto">0EGP</span> :السعر النهائي </h5>

                            </div>
                            <div class="col-lg-6 text-end ms-auto mb-3">
                                {!! Form::label('start-time', 'الساعة') !!}
                                {!! Form::text('start-time', null, ['class' => 'form-control', 'id' => 'start-time']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 text-end">

                            </div>
                            <div class="col-lg-6 text-end">
                                <div>
                                    {!! Form::label('payment', ' : طرق الدفع') !!}
                                    <br>
                                    {!! Form::label('vodafone-cash', 'Vodafone Cash') !!}
                                    {!! Form::radio('payment_method', 'vodafone-cash', false, ['id' => 'vodafone-cash']) !!}
                                    <br>
                                    {!! Form::label('cash-on-site', 'Cash on Site') !!}
                                    {!! Form::radio('payment_method', 'cash-on-site', true, ['id' => 'cash-on-site']) !!}
                                    <br>
                                    {!! Form::label('bank-transfer', 'Bank Transfer') !!}
                                    {!! Form::radio('payment_method', 'bank-transfer', false, ['id' => 'bank-transfer']) !!}
                                    <br>
                                    <br>

                                </div>
                                <div class="form-check mb-3">
                                    <label class="form-check-label" for="remember">
                                        اوافق علي الشروط و الاحكام
                                    </label>
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-end">
                                <button class="btn  btn-primary" type="submit">اشتراك</button>
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

            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="material-icons text-success ms-2">check</i>
                    <strong class="mr-auto">Success</strong>
                    <small class="text-body "> من {{now()->second}} ث </small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
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
