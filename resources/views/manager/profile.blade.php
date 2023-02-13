@extends("layouts.manager")

@section("content")


<div class="container">


        <div class="pt-5">
            <h5 class="text-secondary text-center"> بيانات  {{$branch->name}}</h5>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-6">
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

        <div class="row pt-3 justify-content-center">

        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon d-flex align-items-center my-auto">
                            <i class="material-icons text-success" style="font-size:50px;">monetization_on</i>
                        </div>
                        <div class="info my-auto" style="flex-basis: 80%" >
                            <h4>15223 جنيه</h4>
                            <h5 class="text-secondary"> الارادات النهاردة</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="icon d-flex align-items-center my-auto">
                            <i class="material-icons text-warning" style="font-size:50px;">monetization_on</i>
                        </div>
                        <div class="info  my-auto" style="flex-basis: 80%" >
                            <h4>15223 جنيه</h4>
                            <h5 class="text-secondary">المصروفات النهاردة</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

        <div class="pt-3">
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

    </div>




@endsection

