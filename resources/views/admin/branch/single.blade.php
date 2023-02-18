@extends("layouts.dashboard")

@section("content")
    <div class="container">


    <div class="pt-5 d-flex flex-column justify-content-center ">
        <h5 class="text-secondary text-center"> بيانات  {{$branch->name}}</h5>
        <h6 class="text-secondary  text-center"><a href="{{route("admin.branchDelete",$branch->id)}}">مسح الفرع</a></h6>
    </div>

    <div class="row pt-3">
        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg start-6 icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"
                    >
                        <i class="material-icons opacity-10">manage_accounts</i>
                    </div>

                    <div class="text-end pt-1">
                        <h2 class="text-lg mb-0 text-capitalize">الاداريات</h2>
                        <h4 class="mb-0">{{count($managers)}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0" />
                <div class="card-footer p-3">

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg start-6 icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute"
                    >
                        <i class="material-icons opacity-10">pool</i>
                    </div>
                    <div class="text-end pt-1">
                        <h2 class="text-lg mb-0 text-capitalize">الكباتن</h2>
                        <h4 class="mb-0">{{count($captains)}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0" />
                <div class="card-footer p-3">

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg start-6 icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
                    >
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <h2 class="text-lg mb-0 text-capitalize">العملاء</h2>
                        <h4 class="mb-0">{{count($interns)}}</h4>
                    </div>

                </div>
                <hr class="dark horizontal my-0" />
                <div class="card-footer p-3">

                </div>
            </div>
        </div>



    </div>

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
                                        <h5 class="text-secondary"> ارادات الشهر</h5>
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
                                        <h5 class="text-secondary">مصروفات الشهر</h5>
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
                                        <h5 class="text-secondary"> ارادات الشهر</h5>
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
                                        <h5 class="text-secondary">مصروفات الشهر</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="data d-flex flex-wrap justify-content-evenly">
                            <div class="icon icon-shape text-center ms-3">
                                <h3><i class="fa fa-credit-card text-dark text-xl-center"></i></h3>
                            </div>
                            <div>
                                <h4>متابعة كارت الماية</h4>
                                <h5 class="text-secondary"> متبقي {{$cardPercent}} %</h5>
                            </div>
                        </div>

                        <div class="col-6 flex-wrap align-items-center ">

                            <div class="progress progress-striped active" style="height: 20px; border-radius: 20px;overflow: hidden">
                                <div data-cardpercent="{{$cardPercent}}" class="progress-bar h-100 progress-bar-success bg-gradient-primary"
                                     style="width: 0%;">
                                </div>
                            </div>
                        </div>

                        <form method="post" action="{{route("admin.watercardAdd")}}">
                            @csrf
                            <input id="branchID"  name="branchID" value="{{$branch->id}}" hidden >
                            <input id="card_credit" hidden  type="number" class="form-control @error('card_credit') is-invalid @enderror" name="card_credit" value="5000" required autocomplete="card_credit" autofocus>
                            <button type="submit" class="btn my-auto btn-success {{$cardPercent>30? 'disabled': ''}} ">اعادة الشحن</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="pt-5">
        <h5 class="text-secondary text-center">حصص النهاردة</h5>
    </div>

    <div class="row pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4  z-index-2">
                    <div class="bg-gradient-white d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <h4 class=" text-lg-end text-capitalize pe-3">السبت 25 اكتوبر <span class="text-sm text-secondary">{{now()}}</span></h4>
                        </div>
                        <h3 class=" text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h3>
                    </div>
                </div>
                <div class="card-body overflow-scroll form-body px-0 pb-2" style="display:none; max-height: 500px">
                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>

                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>

                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>

                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>


                </div>

            </div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4  z-index-2">
                    <div class="bg-gradient-white d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <h4 class=" text-lg-end text-capitalize pe-3">السبت 25 اكتوبر <span class="text-sm text-secondary">{{now()}}</span></h4>
                        </div>
                        <h3 class=" text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h3>
                    </div>
                </div>
                <div class="card-body overflow-scroll form-body px-0 pb-2" style="display:none; max-height: 500px">
                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>

                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>

                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>

                    <div class="bg-gradient-white d-flex align-items-center justify-content-between pt-4 pb-3 cardLink">
                        <div class="d-flex pe-3 justify-content-between align-items-center">
                            <h3><i class="fa fa-check-circle text-success"></i></h3>
                            <div class="d-flex flex-column">
                                <h4 class=" text-lg-end text-capitalize pe-3">منار احمد <span class="text-sm text-secondary">حصة رقم 3 </span></h4>
                                <h4><span class="text-lg text-secondary mt-0 pe-3"> تخسيس مائي</span></h4>
                            </div>
                        </div>
                        <h4 class="text-danger text-xl ps-3">مستوي 3</h4>
                    </div>


                </div>

            </div>

        </div>
    </div>

        <div class="pt-5">
            <h5 class="text-secondary text-center">معلومات الفرع</h5>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                            <h3 class="text-white text-lg-end text-capitalize pe-3">بيانات الفرع</h3>
                            <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                        </div>
                    </div>
                    <div class="card-body form-body px-0 pb-2" style="display:none;">
                        <form method="post" action="{{route("admin.branchUpdate",$branch->id)}}">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="name" class="form-label text-md-end">{{ __('') }}</label>
                                        <input id="name" placeholder="الاسم" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $branch->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">

                                        <label for="address" class="form-label text-md-end">{{ __('') }}</label>
                                        <input id="address" placeholder="العنوان" type="text" class="form-control @error('address') is-invalid @enderror" value="{{$branch->address}}" name="address" required >

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row px-5">
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <textarea class="form-text form-control" placeholder="المواعيد" name="dates" id="date" cols="30" rows="10">{{$branch->dates}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('تعديل الفرع') }}
                                    </button>
                                </div>
                            </div>

                        </form>
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


@endsection
