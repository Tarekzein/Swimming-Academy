@extends("layouts.dashboard")

@section("content")

{{--    <div class="container">--}}
        <div class="row">
            <div class="col-lg-12 col-sm-6 mb-4 align-items-center">
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
                                            <option value="all" >كل الفروع</option>

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
        <div class="row mt-3 justify-content-center">

            <div class="col-lg-4 col-sm-6 mb-4">
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

            <div class="col-lg-4 col-sm-6 mb-4">

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

{{--    </div>--}}

@endsection
