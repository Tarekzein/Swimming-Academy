@extends("layouts.dashboard")

@section("content")
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-6">
                <form method="post" enctype="multipart/form-data" action="{{route("admin.profile")}}">
                <div class="card">
                    <div class="card-header text-center ">
                        <div class="avatar-group">
                            <img class="avatar shadow  avatar-xxl mt-n6 mx-auto" src="{{url("images/uploads/pngegg.png")}}" alt="">

                        </div>
                        <label for="profile_photo" class="position-relative cursor-pointer my-auto">
                            <i class="fa fa-image  text-lg "></i>
                            change photo
                        </label>
                            <input type="file" name="profile_photo" id="profile_photo" hidden>
                    </div>
                    <div class="card-body">
                            @csrf

                            <div class="row px-5">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="name" class="form-label">{{ __('الاسم') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

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

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" required autocomplete="email">

                                        @error('email')
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
                                        <label for="address" class="form-label text-md-end">{{ __('العنوان') }}</label>
                                        <input id="address" type="text" value="{{$user->address}}" class="form-control" name="address" required >
                                    </div>
                                </div>


                            </div>

                            <div class="row px-5">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="birthdate" class="form-label text-md-end">{{ __('تاريخ الميلاد') }}</label>
                                        <input id="birthdate" type="date" value="{{$user->birthdate}}"  class="form-control" name="birthdate" required >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="password-confirm"  class="form-label text-md-end">{{ __('رقم الواتس اب') }}</label>

                                        <input id="whatsapp" class="form-control whatsapp" value="{{$user->whatsapp}}" type="text"  name="whatsapp" required >
                                    </div>
                                </div>
                            </div>

                            <div class="row px-5 mb-0">
                                <div class="col offset-md-4">
                                    <button type="submit" disabled class="btn btn-primary">
                                        {{ __('تعديل بياناتك') }}
                                    </button>
                                </div>
                            </div>


                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
@endsection
