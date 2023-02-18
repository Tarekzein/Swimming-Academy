@extends("layouts.captain")

@section("content")
    <div class="container">
        <div class="row mt-1">
            <div class="col"><h5>اهلا يا  {{$user->name}}</h5></div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col text-center"><h4>معلومات تهمك</h4></div>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="data d-flex flex-wrap justify-content-evenly">
                                <div class="icon icon-shape text-center ms-3">
                                    <h3><i class="fa fa-credit-card text-dark text-xl-center"></i></h3>
                                </div>
                                <div>
                                    <h4>متابعة التأخير</h4>
                                    <h5 class="text-secondary">ملتزمة 87%</h5>
                                </div>
                            </div>

                            <div class="col-6 flex-wrap align-items-center ">

                                <div class="progress progress-striped active" style="height: 20px; border-radius: 20px;overflow: hidden">
                                    <div data-cardpercent="87" class="progress-bar h-100 progress-bar-success bg-gradient-primary"
                                         style="width: 0%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-3 justify-content-center">

            <div class="col-lg-6 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center my-auto">
                                <i class="material-icons text-success" style="font-size:50px;">check_circle</i>
                            </div>
                            <div class="info my-auto" style="flex-basis: 80%" >
                                <h4>{{count($captainSchedule)}}</h4>
                                <h5 class="text-secondary"> حصة الشهر ده</h5>
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
                                <h4>5</h4>
                                <h5 class="text-secondary">حصة زيادة</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-3">
            <h5 class="text-secondary text-center">حصص النهاردة</h5>
        </div>
        @if(count($captainSchedule)==0)
            <div class="pt-3">
                <h5 class=" text-sm text-center">لا يوجد...</h5>
            </div>
        @endif

        @foreach($captainSchedule as $cs)
            @php
                $date = $cs->date;
                $timestamp = strtotime($date);
                // Get the day name in Arabic
                $day_name = strftime('%A', $timestamp);
                setlocale(LC_TIME, 'en');
                $day_name_arabic = strftime('%A', $timestamp);
                // Get the month name in Arabic
                $month_name = date('F', $timestamp);
                setlocale(LC_TIME, 'en');
                $month_name_arabic = strftime('%B', $timestamp);
                // Get the day number
                $day_number = date('j', $timestamp);
                // Format the date string with Arabic names
                $date_arabic = $day_name_arabic . ' ' . $day_number . ' ' . $month_name_arabic;
            @endphp
            <div class="row pt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4  z-index-2">
                            <div class="bg-gradient-white d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                                <div class="d-flex pe-3 justify-content-between align-items-center">
                                    @if($cs->attended=='pending')
                                    <h3><i class="fa fa-hourglass-2  text-warning"></i></h3>
                                    @elseif($cs->attended=='attended')
                                    <h3><i class="fa fa-check-circle text-success"></i></h3>
                                    @else
                                        <h3><i class="fa fa-ban  text-danger"></i></h3>
                                    @endif
                                    <h4 class=" text-lg-end text-capitalize pe-3">{{$date_arabic}} <span class="text-sm text-secondary">{{$cs->date}}</span></h4>
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
        @endforeach

        <div class="row mt-5 justify-content-center">
            <div class="col  text-center"><h4 class="text-secondary">اخر الاخبار</h4></div>
        </div>

        @if(count($announcements))
            @foreach($announcements as $a)
                <div class="row mt-2 justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="card shadow-dark">
                            <div class="card-body p-5">
                                <h3 class="text-center text-{{$a->type}}">{{$a->announcement}}</h3>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @else
            <div class="row mt-5 justify-content-center">
                <div class="col text-center text-secondary">
                    <h6 class="text-sm">لا يوجد اخبار ...</h6></div>
            </div>
        @endif

    </div>
@endsection
