@extends('layouts.wecoach')

@section('content')
    <div class="mobContainer mobile" >
        <div style="text-align: center;"> <div class="mx-auto my-3" style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; text-align: center "><img src="{{url("images/team-3.jpg")}}" style="width: 100px;" alt=""></div> </div>

        <div><i class="fa-solid fa-circle-check fa-1x greenicon "></i> <p style="font-size:23px" class="rDivP" >فاطمة أحمد</p></div>
        <div><p class="rDivP" style="font-size: 18px;">عميلة</p></div>
        <div class="mobTitle">
            <p>
                <button class="btnTitle" id="appointmentsBtn">مواعيدك</button>
                <span>|</span>
                <button class="btnTitle" id="achivementsBtn">إنجازات</button>
                <span>|</span>
                <button class="btnTitle" id="yourDataBtn">بياناتك</button>
            </p>
        </div>
    </div>
    <section id="yourData">
        <div class="row gap-1 justify-content-center">
            <div class=" col-10">
                <div class=" mobEvalDiv row">
                    <div class="col-10">
                        <p class="mobEval"> باقة ال 8 حصص</p>
                        <p class="mobCval">تخسيس مائي </p>
                    </div>
                    <div class="col-2"><i class="fa-solid fa-trophy  normIcon" style="color:#ee9961; display:inline"></i></div>

                </div>
            </div>
        </div>
        <div class="row gap-1 justify-content-center">
            <div class=" col-10">
                <div class=" mobEvalDiv row">
                    <div class="col-10"><p class="mobEval">عدلي بيناتك </p></div>
                    <div class="col-2"><i class="fa-solid fa-circle-check  greenicon normIcon "></i> </div>

                </div>
            </div>
        </div>
        <div class="row gap-1 justify-content-center">
            <div class=" col-10">
                <div class=" mobEvalDiv row">
                    <div class="col-10"><p class="mobEval"><a href="#" class="link link-dark">عدلي بيناتك </a></p></div>
                    <div class="col-2"><i class="fa-solid fa-star normIcon" style="color: #ee9961;"></i> </div>


                </div>
            </div>
        </div>

    </section>
    <section id="achivementsSection">
        <div class="row">
            <div class="col">
                <div class="row gap-1 justify-content-center">
                    <div class=" col-10">
                        <div class="Container datadiv" style="height: 90px;">
                            <span class="dataSpan">مستوى 2</span>
                            <i class="fa-solid fa-2 normIcon" style="color:rgb(149, 139, 52); margin-right: 1%; background-color: #FFD700;padding: 8px;border-radius: 100px;"></i>
                            <div class="progress-container">
                                <div class="progressbar" style="background-color: #FFD700;"></div>
                            </div>
                            <br>
                            <p class="dataCardP"> شد حيلك ناقصلك 500 نقطة </p>
                        </div>
                    </div>
                </div>
                <p class="mobtitle">مدربه معتمده فى</p>
                <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDivCarousle ">
                                    <div><i class="fa-solid fa-medal normIcon midIcon gold"></i></div>
                                    <div><span class="dataCenter" >علاج مائي</span></div>
                                    <div><span class="achivement">حصلت عليها</span></div>

                                </div>
                                <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDivCarousle ">
                                    <div><i class="fa-solid fa-medal normIcon midIcon selver"></i></div>
                                    <div><span class="dataCenter" >إسعافات أولية</span></div>
                                    <div><span class="achivement">حصلت عليها</span></div>

                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDivCarousle ">
                                    <div><i class="fa-solid fa-medal normIcon midIcon bronze"></i></div>
                                    <div><span class="dataCenter" >إعداد معلم</span></div>
                                    <div><span class="achivement">حصلت عليها</span></div>

                                </div>
                                <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDivCarousle ">
                                    <div><i class="fa-solid fa-medal normIcon midIcon selver"></i></div>
                                    <div><span class="dataCenter" >إنقاذ غرقى</span></div>
                                    <div><span class="achivement">حصلت عليها</span></div>

                                </div>
                            </div>
                        </div>




                    </div>
                    <button class="carousel-control-prev" style="right: 50px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="mobtitle">أخر الأخبار</p>
                <div class="row justify-content-center " >

                    <div class="col-10">
                        <div class="noteDiv">
                            <div style="text-align: center; font-weight:bold"><p>هام جدا</p></div>
                            <div style="text-align: center; font-weight:bold; color:#9098A3"><p>دلوقتي تقدر تشترك شهرين بسعر شهر واحد في أي فرع ولأي خدمة من خدماتنا   </p></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="yourAppointments">
        <div class="row gap-5 col-11 justify-content-center">
            <div class=" datadiv">
                <span class="dataSpan">تابعي اشتراكك</span>
                <i class="fa-solid fa-credit-card  greenicon normIcon" style="margin-right: 1%;"></i>
                <div class="progress-container">
                    <div class="progressbar" style="background-color: #4eedab;"></div>
                </div>
                <br>
                <p class="dataCardP"> متبقي <span style="font-weight: bold; color: black;">%87</span></p>
            </div>
        </div>
        <p class="achmobtitle">مواعيدك الشهر ده</p>
        <div class="row gap-5 col-11 justify-content-center">
            <div class="scheduleDiv" >
                <div class="row">
                    <div class="col-7">
                        <div style="display: inline;"><i class="fa-solid fa-bolt dateIcon redicon" ></i></div>
                        <div class="mobdateDiv"><p  class="dateP">السبت 25 أكتوبر <span style="color: #9098A3;">05:30 بليل</span></p></div>
                    </div>
                    <div class="col-5">
                        <div class="stHalf"><p>القوات الجوية</p> </div>
                        <div class="mobsecHalf"><p style="display: inline; color:#4F77B0;">مستوى 3</p> <br><p style="display: inline; color:#4F77B0;">4 متدربة</p></div>
                    </div>
                </div>
            </div>
            <div class="scheduleDiv" >
                <div class="row">
                    <div class="col-7">
                        <div style="display: inline;"><i class="fa-solid fa-bolt dateIcon redicon" ></i></div>
                        <div class="mobdateDiv"><p  class="dateP">السبت 25 أكتوبر <span style="color: #9098A3;">05:30 بليل</span></p></div>
                    </div>
                    <div class="col-5">
                        <div class="stHalf"><p>القوات الجوية</p> </div>
                        <div class="mobsecHalf"><p style="display: inline; color:#4F77B0;">مستوى 3</p> <br><p style="display: inline; color:#4F77B0;">4 متدربة</p></div>
                    </div>
                </div>
            </div>
            <div class="scheduleDiv" >
                <div class="row">
                    <div class="col-7">
                        <div style="display: inline;"><i class="fa-solid fa-bolt dateIcon redicon" ></i></div>
                        <div class="mobdateDiv"><p  class="dateP">السبت 25 أكتوبر <span style="color: #9098A3;">05:30 بليل</span></p></div>
                    </div>
                    <div class="col-5">
                        <div class="stHalf"><p>القوات الجوية</p> </div>
                        <div class="mobsecHalf"><p style="display: inline; color:#4F77B0;">مستوى 3</p> <br><p style="display: inline; color:#4F77B0;">4 متدربة</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container datacontainer">
        <div class="row">
            <div class="col">
                <p class="title"> انجازاتك</p>
                <div class="row gap-1 justify-content-center">
                    <div class=" col-sm">
                        <div class="Container datadiv">
                            <span class="dataSpan">مستوى 2</span>
                            <i class="fa-solid fa-2 normIcon" style="color:rgb(149, 139, 52); margin-right: 1%; background-color: #FFD700;padding: 8px;border-radius: 100px;"></i>
                            <div class="progress-container">
                                <div class="progressbar" style="background-color: #FFD700;"></div>
                            </div>
                            <br>
                            <p class="dataCardP"> شد حيلك ناقصلك 500 نقطة </p>
                        </div>
                    </div>
                </div>
                <div class="row gap-1 justify-content-center">
                    <div class=" col-sm">
                        <div class="Container datadiv">
                            <span class="dataSpan">تابعي اشتراكك</span>
                            <i class="fa-solid fa-credit-card  greenicon normIcon" style="margin-right: 1%;"></i>
                            <div class="progress-container">
                                <div class="progressbar" style="background-color: #4eedab;"></div>
                            </div>
                            <br>
                            <p class="dataCardP"> متبقي <span style="font-weight: bold; color: black;">%87</span></p>
                        </div>
                    </div>
                </div>
                <div class="row gap-4 justify-content-center">
                    <div class="col-lg-5  col-md-5 col-sm-4 col-xm-3 datadivth1">
                        <span class="dataSpan" >83%</span>
                        <i class="fa-solid fa-trophy  normIcon" style="color:#ee9961"></i>
                        <br>
                        <p class="dataP">درجة التقدم</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-4 col-xm-2 datadivth1">
                        <span class="dataSpan">83%</span>
                        <i class="fa-solid fa-circle-check  greenicon normIcon "></i>
                        <br>
                        <p class="dataP"> درجة الحضور</p>
                    </div>
                </div>
                <div class="row gap-3 justify-content-center w-l ">
                    <div class="title2">مدربه معتمده فى</div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDiv ">
                        <div><i class="fa-solid fa-medal normIcon midIcon gold"></i></div>
                        <div><span class="dataCenter" >علاج مائي</span></div>
                        <div><span class="achivement">حصلت عليها</span></div>

                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDiv ">
                        <div><div><i class="fa-solid fa-medal normIcon midIcon selver"></i></div></div>
                        <div><span class="dataCenter" >إسعافات أولية</span></div>
                        <div><span class="achivement">حصلت عليها</span></div>

                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDiv ">
                        <div><div><i class="fa-solid fa-medal normIcon midIcon gold"></i></div></div>
                        <div><span class="dataCenter" >إعداد معلم</span></div>
                        <div><span class="achivement">حصلت عليها</span></div>

                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xm-2 certifiedDiv ">
                        <div><div><i class="fa-solid fa-medal normIcon midIcon bronze"></i></div></div>
                        <div><span class="dataCenter" >إنقاذ غرقى</span></div>
                        <div><span class="achivement">حصلت عليها</span></div>

                    </div>

                </div>
                <div class="row gap-5 justify-content-center">
                    <p class="title2">مواعيدك الشهر ده</p>
                    <div class="scheduleDiv" >
                        <div class="row">
                            <div class="col-6">
                                <div style="display: inline;"><i class="fa-solid fa-bolt dateIcon redicon"></i></div>
                                <div class="dateDiv"><p  class="dateP">السبت 25 أكتوبر <span style="color: #9098A3;">05:30 بليل</span></p></div>
                            </div>
                            <div class="col-6">
                                <div class="stHalf"><p style="display: inline;">القوات الجوية</p> </div>
                                <div class="secHalf"><p style="display: inline; color:#4F77B0;">مستوى 3</p> <br><p style="display: inline; color:#4F77B0;">4 متدربة</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="scheduleDiv" >
                        <div class="row">
                            <div class="col-6">
                                <div style="display: inline;"><i class="fa-solid fa-circle-check dateIcon greenicon"></i></div>
                                <div class="dateDiv"><p  class="dateP">السبت 25 أكتوبر <span style="color: #9098A3;">05:30 بليل</span></p></div>
                            </div>
                            <div class="col-6">
                                <div class="stHalf"><p style="display: inline;">القوات الجوية</p> </div>
                                <div class="secHalf"><p style="display: inline; color:#4F77B0;">مستوى 3</p> <br><p style="display: inline; color:#4F77B0;">4 متدربة</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center " >
                    <div class="col-sm">
                        <p class="title3">أخر الأخبار</p>
                        <div class="noteDiv">
                            <div style="text-align: center; font-weight:bold"><p>هام جدا</p></div>
                            <div style="text-align: center; font-weight:bold; color:#9098A3"><p>بنأكد علي جميع المدربات في الفرع عدم التأخير </p></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4 col-lg-3 col-md-4 datadivcard bigDiv w-l" id="sideDiv">
                <div style="text-align: center;"> <div class="mx-auto my-3" style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; text-align: center "><img src="{{url("images/team-3.jpg")}}" style="width: 100px;" alt=""></div> </div>

                <div style="text-align: center;">
                    <p class="rDivP" >
                    {{$user->name}}
                    </p>
                </div>
                <div style="text-align: center;"><p class="rDivP" style="color: #DD2E2E">عميلة</p></div>
                <hr>

                <div class="row">

                    <div class=" col-sm-7 col-lg-8 col-md-8">
                        <p class="rDivP"> باقة ال 8 حصص</p>
                        <p class="rDivP" style="display: block;color: #DD2E2E">تخسيس مائي </p>
                    </div>
                    <div class="col-1"><i class="fa-solid fa-trophy normIcon " style="color:#ee9961"></i></div>

                </div>
                <hr>
                <div class="row" style="margin-bottom: 20px;">

                    <div class=" col-sm-7 col-lg-8 col-md-8">
                        <p class="rDivP" style="    position: relative;top: 7px;"><a href="#" class="link-dark link">عدلي بيناتك </a></p>
                    </div>
                    <div class="col-1"><i class="fa-solid fa-circle-check normIcon greenicon changeicon" ></i></div>

                </div>
                <hr>
                <div class="row">

                    <div class=" col-sm-7 col-lg-8 col-md-8">
                        <p class="rDivP" style="    position: relative;top: 7px;">قيمي الكابتن </p>
                    </div>
                    <div class="col-1"><i class="fa-solid fa-star normIcon" style="color: #ee9961;"></i> </div>

                </div>
            </div>
        </div>
    </div>
@endsection
