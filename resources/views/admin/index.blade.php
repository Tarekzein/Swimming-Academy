@extends("layouts.dashboard")

@section("content")


    <div class="row">
        <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
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

        <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
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

        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg start-6 icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
                    >
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <h2 class="text-lg mb-0 text-capitalize">المتدربات</h2>
                        <h4 class="mb-0">{{count($interns)}}</h4>
                    </div>

                </div>
                <hr class="dark horizontal my-0" />
                <div class="card-footer p-3">

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-lg-0 ">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg start-6 icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute"
                    >
                        <i class="material-icons opacity-10">store</i>
                    </div>
                    <div class="text-end pt-1">
                        <h2 class="text-lg mb-0 text-capitalize">الفروع</h2>
                        <h4 class="mb-0">{{count($branches)}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0" />
                <div class="card-footer p-3">
                </div>
            </div>
        </div>


    </div>

    <div class="row mt-2 ">
{{--        <div class="col-lg-8 col-sm-6 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="text-center">كارت الماية</h4>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6 align-items-center">--}}
{{--                            <div class="row">--}}
{{--                                <h5 class="text-secondary my-auto">متبقي: <span id="watercard-val">{{$watercard}} % </span></h5>--}}
{{--                            </div>--}}
{{--                            <div class="progress mt-3 progress-striped active">--}}
{{--                                <div data-cardpercent="{{$watercard}}" class="progress-bar progress-bar-success bg-gradient-success"--}}
{{--                                     style="width: 0%;">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-6 align-items-center">--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div  style="flex: 30%;">--}}
{{--                                    <h5 class="text-secondary my-auto">الفرع: </h5>--}}
{{--                                </div>--}}

{{--                                <select class="form-select  mt-3 border-dark" id="watercard-filter" required name="branch" aria-label="Default select example">--}}
{{--                                    @php--}}
{{--                                        $i=1;--}}
{{--                                    @endphp--}}
{{--                                    @foreach($branches as $b)--}}
{{--                                        <option value="{{$b->id}}" {{$i==1? 'selected': ''}}>{{$b->name}}</option>--}}
{{--                                        @php--}}
{{--                                            $i+=1;--}}
{{--                                        @endphp--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

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
                                    <h4>{{$incomeWecoach->totalIncomes}} جنيه</h4>
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
                                    <h4>{{$outcomeWecoach->totalOutcome}} جنيه</h4>
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
                                    <h4>{{$incomeWaves->totalIncomes}} جنيه</h4>
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
                                    <h4>{{$outcomeWaves->totalOutcome}} جنيه</h4>
                                    <h5 class="text-secondary">مصروفات الشهر</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>

    </div>

    <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h6>الفروع</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 ps-2 pb-2">
                    <div class="table-responsive ">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th
                                    class="text-uppercase text-secondary text-lg font-weight-bolder opacity-7"
                                >
                                    الفرع
                                </th>
                                <th
                                    class="text-uppercase text-secondary text-lg font-weight-bolder opacity-7 ps-2"
                                >
                                    عدد العملاء
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-lg font-weight-bolder opacity-7"
                                >
                                    الاداريات
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-lg font-weight-bolder opacity-7"
                                >
                                    كرت المياه
                                </th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($branches as $b)
                                @php
                                $interns=\App\Models\intern\Intern::all()->where("branch",$b->id);
                                $managers=\App\Models\manager\Manager::all()->where("branchID",$b->id);
                                $watercard=\App\Models\WaterCard::Where("branchID",$b->id)->get()->first();
                                $cardpercent=$watercard?($watercard->card_credit/5000)*100:0;
                                @endphp
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div
                                                class="icon icon-lg icon-shape text-center "
                                            >
                                                <i class="material-icons opacity-10 text-dark">store</i>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-center"
                                            >
                                                <h6 class="mb-0 text-sm"><a href="{{route("admin.branch",$b->id)}}" class="link-dark link-info">{{$b->name}}</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>{{count($interns)}}</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <h6>{{count($managers)}}</h6>

                                    </td>
                                    <td class="align-middle ">
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-info">
                                                <div class="progress-percentage">
                                                    <span class="text-xs font-weight-bold"
                                                    >{{$cardpercent}}%</span
                                                    >
                                                </div>
                                            </div>
                                            <div class="progress progress-striped  active">
                                                <div  class="progress-bar progress-bar-success bg-gradient-success"
                                                     style="width: {{$cardpercent}}%;">
                                                </div>
                                            </div>
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
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>نظرة عامة على الطلبات</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                        <span class="font-weight-bold">24%</span> هذا الشهر
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-success text-gradient"
                      >notifications</i
                      >
                    </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                    $2400, تغييرات في التصميم
                                </h6>
                                <p
                                    class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                >
                                    22 DEC 7:20 PM
                                </p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-danger text-gradient"
                      >code</i
                      >
                    </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                    طلب جديد #1832412
                                </h6>
                                <p
                                    class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                >
                                    21 DEC 11 PM
                                </p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-info text-gradient"
                      >shopping_cart</i
                      >
                    </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                    مدفوعات الخادم لشهر أبريل
                                </h6>
                                <p
                                    class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                >
                                    21 DEC 9:34 PM
                                </p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-warning text-gradient"
                      >credit_card</i
                      >
                    </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                    تمت إضافة بطاقة جديدة للطلب #4395133
                                </h6>
                                <p
                                    class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                >
                                    20 DEC 2:20 AM
                                </p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-primary text-gradient"
                      >key</i
                      >
                    </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                    فتح الحزم من أجل التطوير
                                </h6>
                                <p
                                    class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                >
                                    18 DEC 4:54 AM
                                </p>
                            </div>
                        </div>
                        <div class="timeline-block">
                    <span class="timeline-step">
                      <i class="material-icons text-dark text-gradient"
                      >payments</i
                      >
                    </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">
                                    طلب جديد #9583120
                                </h6>
                                <p
                                    class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                >
                                    17 DEC
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="row mt-4">--}}
{{--        <div class="col-lg-4 col-md-6 mt-4 mb-4">--}}
{{--            <div class="card z-index-2">--}}
{{--                <div--}}
{{--                    class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent"--}}
{{--                >--}}
{{--                    <div--}}
{{--                        class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"--}}
{{--                    >--}}
{{--                        <div class="chart">--}}
{{--                            <canvas--}}
{{--                                id="chart-bars"--}}
{{--                                class="chart-canvas"--}}
{{--                                height="170"--}}
{{--                            ></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <h6 class="mb-0">مشاهدات الموقع</h6>--}}
{{--                    <p class="text-sm">آخر أداء للحملة</p>--}}
{{--                    <hr class="dark horizontal" />--}}
{{--                    <div class="d-flex">--}}
{{--                        <i class="material-icons text-sm my-auto ms-1">schedule</i>--}}
{{--                        <p class="mb-0 text-sm">الحملة أرسلت قبل يومين</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-6 mt-4 mb-4">--}}
{{--            <div class="card z-index-2">--}}
{{--                <div--}}
{{--                    class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent"--}}
{{--                >--}}
{{--                    <div--}}
{{--                        class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1"--}}
{{--                    >--}}
{{--                        <div class="chart">--}}
{{--                            <canvas--}}
{{--                                id="chart-line"--}}
{{--                                class="chart-canvas"--}}
{{--                                height="170"--}}
{{--                            ></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <h6 class="mb-0">المبيعات اليومية</h6>--}}
{{--                    <p class="text-sm">--}}
{{--                        (<span class="font-weight-bolder">+15%</span>) زيادة في مبيعات--}}
{{--                        اليوم.--}}
{{--                    </p>--}}
{{--                    <hr class="dark horizontal" />--}}
{{--                    <div class="d-flex">--}}
{{--                        <i class="material-icons text-sm my-auto ms-1">schedule</i>--}}
{{--                        <p class="mb-0 text-sm">تم التحديث منذ 4 دقائق</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 mt-4 mb-3">--}}
{{--            <div class="card z-index-2">--}}
{{--                <div--}}
{{--                    class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent"--}}
{{--                >--}}
{{--                    <div--}}
{{--                        class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1"--}}
{{--                    >--}}
{{--                        <div class="chart">--}}
{{--                            <canvas--}}
{{--                                id="chart-line-tasks"--}}
{{--                                class="chart-canvas"--}}
{{--                                height="170"--}}
{{--                            ></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <h6 class="mb-0">المهام المكتملة</h6>--}}
{{--                    <p class="text-sm">آخر أداء للحملة</p>--}}
{{--                    <hr class="dark horizontal" />--}}
{{--                    <div class="d-flex">--}}
{{--                        <i class="material-icons text-sm my-auto me-1">schedule</i>--}}
{{--                        <p class="mb-0 text-sm">تم تحديثه للتو</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



@endsection

