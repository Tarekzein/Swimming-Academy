@extends("layouts.captain")

@section("content")
    <div class="container">
        @if(count($schedules)!==0)
        <div class="row mt-4">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark  flex-wrap d-flex align-items-center shadow-dark border-radius-lg pt-4 pb-3">

                            <div class="title-search flex-wrap d-flex align-items-center ">
                                <h3 class="text-white text-lg-end text-capitalize pe-3">مواعيدك</h3>
                                <div class="p-3">
                                    <x-searchbar/>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th scope="col" >الفرع</th>
                                    <th scope="col">التاريخ</th>
                                    {{--                <th scope="col">Study Field</th>--}}
                                    {{--                <th scope="col">Previous Experience</th>--}}
                                    {{--                <th scope="col">Current Employer</th>--}}
                                    <th scope="col">Options</th>
                                </tr>
                                </thead>
                                <tbody class="table-body">
                                @foreach($schedules as $schedule)
                                    @php
                                        $branch=\App\Models\Branch::find($schedule->branchID);
                                    @endphp
                                    <tr>
                                        <td>{{$branch->name}}</td>
                                        <td>{{$schedule->date}}</td>
                                        <td>
                                            <ul
                                                class="list-inline d-flex px-2 py-3 ms-4"
                                            >
                                                <li class="mx-2">
                                                    <a href="#" class="list-inline-item text-bold text-center link link-primary"><span class="material-symbols-outlined">edit</span></a>
                                                </li>

                                                <li class="mx-2">
                                                    <a href="#" class="text-center text-bold list-inline-item link link-danger"><span class="material-symbols-outlined">delete</span></a>
                                                </li>
                                            </ul>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="row pt-5">
            <h3 class="text-center text-secondary">لم يتم اختيار مواعيد</h3>
            </div>
        @endif

            <div class="row pt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header form-header cursor-pointer p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark d-flex align-items-center justify-content-between shadow-dark border-radius-lg pt-4 pb-3">
                                <h3 class="text-white text-lg-end text-capitalize pe-3">اختيار المواعيد</h3>
                                <h2 class="text-white text-lg-end iconchange text-capitalize ps-3"><i class="fa fa-plus-circle text-xl-center"></i></h2>
                            </div>
                        </div>
                        <div class="card-body form-body px-0 pb-2" style="display: none">
                            <form method="post" action="#">
                                @csrf
                                <div class="row px-5">
                                    <div class="col-lg-6">
                                        <div class="input-group input-group-outline my-3">
                                            {!! Form::text('dates', null, ['class' => 'form-control', 'id' => 'dates']) !!}
                                            <label for="birthdate" class="form-label text-md-end">{{ __('تاريخ المواعيد') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group input-group-outline my-3">
                                            <select class="form-select border-secondary" required name="branchID" aria-label="Default select example">
                                                <option value="null" selected>الفرع</option>
                                                @foreach($branches as $b)
                                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <h6 class="text-danger text-sm select-message"></h6>

                                    </div>

                                </div>



                                <div class="row px-5">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('اضافة المواعيد') }}
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
