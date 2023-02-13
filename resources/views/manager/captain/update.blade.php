@extends("layouts.manager")

@section("content")
    <div class="container">

        <div class="row pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark d-flex align-items-center shadow-dark border-radius-lg pt-4 pb-3">
                            <h3 class="text-white text-lg-end text-capitalize pe-3">تعديل الكابتن</h3>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <form method="post" enctype="multipart/form-data" action="{{route("manager.updateCaptain",$user->id)}}">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="name" class="form-label">{{ __('الاسم') }}</label>
                                        <input id="name" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="email" class="form-label">{{ __('البريد الالكتروني') }}</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                        @error('email')
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
                                        <label for="address" class="form-label text-md-end">{{ __('العنوان') }}</label>
                                        <input id="address" type="text" value="{{$user->address}}" class="form-control" name="address" required >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="password-confirm" class="form-label text-md-end">{{ __('رقم الواتس اب') }}</label>

                                        <input id="whatsapp" class="form-control" value="{{$user->whatsapp}}" type="text"  name="whatsapp" required >
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="birthdate" class="form-label text-md-end">{{ __('تاريخ الميلاد') }}</label>
                                        <input id="birthdate" type="date" value="{{$user->birthdate}}" class="form-control" name="birthdate" required >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="studyfield" class="form-label text-md-end">{{ __('Study field') }}</label>

                                        <input id="studyfield" type="text" value="{{$captain->study_field}}" class="form-control" name="study_field" required >
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5">

                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="current_employer" class="form-label text-md-end">{{ __("Current Employer") }}</label>

                                        <input id="current_employer" type="text" value="{{$captain->current_employer}}" class="form-control" name="current_employer" required >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="previous_experience" class="form-label text-md-end">{{ __("Previous Experience") }}</label>

                                        <input id="previous_experience" type="text" value="{{$captain->previous_experience}}" class="form-control" name="previous_experience" required >
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5">

                                <div class="col-lg-8 col-md-4">
                                    <div class="d-flex ">

                                        <label for="profile_photo" class=" col-md-4 my-auto col-form-label text-md-end">{{ __("profile photo") }}</label>



                                        <div class="input-group input-group-outline my-3">

                                            <input id="profile_photo" type="file" class="form-control" name="profile_photo"  >

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 align-items-center col-md-2">
                                    <span class="my-auto">Previous: </span>
                                    <img class="avatar-lg" src="{{url("images/uploads/".$captain->profile_photo)}}" alt="">
                                </div>
                            </div>

                            <div class="row px-5">
                                <div class="col-lg-8 col-md-4">
                                    <div class="d-flex ">

                                        <label for="personal_id" class="col-md-4 my-auto col-form-label text-md-end">{{ __("personal id") }}</label>



                                        <div class="input-group input-group-outline my-3">

                                            <input id="personal_id" type="file" class="form-control" name="personal_id"  >

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 align-items-center col-md-2">
                                    <span>Previous: </span>
                                    <img class="avatar-lg" src="{{url("images/uploads/".$captain->personal_id)}}" alt="no photo">
                                </div>

                            </div>

                            <div class="row px-5">
                                <div class="col-lg-8 col-md-4">
                                    <div class="d-flex ">

                                        <label for="rescue_certificate" class="col-md-4 my-auto col-form-label text-md-end">{{ __("Rescue Certificate") }}</label>



                                        <div class="input-group input-group-outline my-3">

                                            <input id="rescue_certificate" type="file" class="form-control" name="rescue_certificate"  >

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 align-items-center col-md-2">
                                    <span>Previous: </span>
                                    <img class="avatar-lg" src="{{url("images/uploads/".$captain->rescue_certificate)}}" alt="no photo">
                                </div>

                            </div>

                            <div class="row px-5">
                                <div class="col-lg-8 col-md-4">
                                    <div class="d-flex ">

                                        <label for="rescue_card" class="col-md-4 my-auto col-form-label text-md-end">{{ __("Rescue Card") }}</label>



                                        <div class="input-group input-group-outline my-3">

                                            <input id="rescue_card" type="file" class="form-control" name="rescue_card"  >

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 align-items-center col-md-2">
                                    <span>Previous: </span>
                                    <img class="avatar-lg" src="{{url("images/uploads/".$captain->rescue_card)}}" alt="no photo">
                                </div>


                            </div>

                            <div class="row px-5 mb-0">
                                <div class="col offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('تعديل ') }}
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
