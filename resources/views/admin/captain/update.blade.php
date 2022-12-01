@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Update Manager Form</h1>

        <form method="post" action="{{route("admin.captainUpdate",$user->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                <div class="col-md-6">
                    <input id="address" type="text" value="{{$user->address}}" class="form-control" name="address" required >
                </div>
            </div>

            <div class="row mb-3">
                <label for="whatsapp" class="col-md-4 col-form-label text-md-end">{{ __('Whatsapp Number') }}</label>

                <div class="col-md-6">
                    <input id="whatsapp" class="form-control" value="{{$user->whatsapp}}" type="text" class="whatsapp" name="whatsapp" required >
                </div>
            </div>

            <div class="row mb-3">
                <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('BirthDate') }}</label>

                <div class="col-md-6">
                    <input id="birthdate" type="date" value="{{$user->birthdate}}" class="form-control" name="birthdate" required >
                </div>
            </div>

            <div class="row mb-3">
                <label for="studyfield" class="col-md-4 col-form-label text-md-end">{{ __('Study field') }}</label>

                <div class="col-md-6">
                    <input id="studyfield" type="text" value="{{$captain->study_field}}" class="form-control" name="study_field" required >
                </div>
            </div>
            <div class="row mb-3">
                <label for="current_employer" class="col-md-4 col-form-label text-md-end">{{ __("Current Employer") }}</label>

                <div class="col-md-6">
                    <input id="current_employer" type="text" value="{{$captain->current_employer}}" class="form-control" name="current_employer" required >
                </div>
            </div>

            <div class="row mb-3">
                <label for="previous_experience" class="col-md-4 col-form-label text-md-end">{{ __("Previous Experience") }}</label>

                <div class="col-md-6">
                    <input id="previous_experience" type="text" value="{{$captain->previous_experience}}" class="form-control" name="previous_experience" required >
                </div>
            </div>


            <div class="row mb-3">
                <label for="profile_photo" class="col-md-4 my-auto col-form-label text-md-end">{{ __("profile photo") }}</label>

                <div class="col-md-3 my-auto">
                    <input id="profile_photo" type="file" class="form-control" name="profile_photo"  >
                </div>
                <div class="col-md-3">
                    <span>Previous: </span>
                    <img width="150px" src="{{url("images/uploads/".$captain->profile_photo)}}" alt="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="personal_id" class="col-md-4 my-auto col-form-label text-md-end">{{ __("personal id") }}</label>

                <div class="col-md-3 my-auto">
                    <input id="personal_id" type="file" class="form-control" name="personal_id"  >
                </div>
                <div class="col-md-3">
                    <span>Previous: </span>
                    <img width="150px" src="{{url("images/uploads/".$captain->personal_id)}}" alt="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="facility_receipt" class="col-md-4 my-auto col-form-label text-md-end">{{ __("Rescue Certificate") }}</label>

                <div class="col-md-3 my-auto">
                    <input id="facility_receipt" type="file" class="form-control" name="facility_receipt"  >
                </div>
                <div class="col-md-3">
                    <span>Previous: </span>
                    <img width="150px" src="{{url("images/uploads/".$captain->rescue_certificate)}}" alt="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="facility_receipt" class="col-md-4 my-auto col-form-label text-md-end">{{ __("Rescue Card") }}</label>

                <div class="col-md-3 my-auto">
                    <input id="facility_receipt" type="file" class="form-control" name="facility_receipt"  >
                </div>
                <div class="col-md-3">
                    <span>Previous: </span>
                    <img width="150px" src="{{url("images/uploads/".$captain->rescue_card)}}" alt="">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Captain') }}
                    </button>
                </div>
            </div>

        </form>
        @if(session()->has("message"))
            <h3 class="text-success">{{session("message")}}</h3>
        @endif

        @if(session()->has("error"))
            <h3 class="text-danger">{{session("error")}}</h3>
        @endif

    </div>


@endsection
