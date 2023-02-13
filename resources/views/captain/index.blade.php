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
                                <h4>19</h4>
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

        <div class="row mt-5 justify-content-center">
            <div class="col text-center"><h4>اخر الاخبار</h4></div>
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
                    <h6>لا يوجد اخبار ...</h6></div>
            </div>
        @endif

    </div>
@endsection
