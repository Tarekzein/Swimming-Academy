@extends("layouts.waves")

@section("content")
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-6">
                <form method="post" enctype="multipart/form-data" action="{{route("waintern.profile.edit",$user->id)}}">
                <div class="card">
                    <div class="card-header text-center ">
                        <div class="mx-auto my-3" style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; text-align: center ">
                            <img src="{{url("images/uploads/$captain->profile_photo")}}" style="width: 100px;" alt="">
                        </div>
                        <label for="profile_photo" class="position-relative cursor-pointer my-auto">
                            change photo
                            <i class="fa fa-image  text-lg "></i>
                        </label>
                            <input type="file" name="profile_photo" id="profile_photo" hidden>
                    </div>
                    <div class="card-body">
                            @csrf

                        <div class="row px-5">
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">
{{--                                    <label for="name" class="form-label">{{ __('الاسم') }}</label>--}}
                                    <input id="name" placeholder="الاسم" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">
{{--                                    <label for="email" class="form-label">{{ __('البريد الالكتروني') }}</label>--}}

                                    <input id="email" placeholder="البريد الالكتروني" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
{{--                                    <strong>{{ $message }}</strong>--}}
                                </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row px-5">
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">
{{--                                    <label for="address" class="form-label text-md-end">{{ __('العنوان') }}</label>--}}
                                    <input id="address" placeholder="العنوان" type="text" value="{{$user->address}}" class="form-control" name="address" required >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-group input-group-outline my-3">
{{--                                    <label for="password-confirm" class="form-label text-md-end">{{ __('رقم الواتس اب') }}</label>--}}

                                    <input id="whatsapp" placeholder="رقم الواتس اب" class="form-control" value="{{$user->whatsapp}}" type="text"  name="whatsapp" required >
                                </div>
                            </div>
                        </div>

                        <div class="row px-5">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
{{--                                    <label for="birthdate" class="form-label text-md-end">{{ __('تاريخ الميلاد') }}</label>--}}
                                    <input id="birthdate" placeholder="تاريخ الميلاد" type="date" value="{{$user->birthdate}}" class="form-control" name="birthdate" required >
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center text-end ">
                                <button type="submit"  class="btn my-auto btn-primary">
                                    {{ __('تعديل بياناتك') }}
                                </button>
                            </div>
                        </div>




                    </div>
                </div>
                </form>
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
