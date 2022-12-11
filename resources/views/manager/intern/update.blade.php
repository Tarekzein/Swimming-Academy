@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Update Intern Form</h1>

        <form method="post" action="{{route("manager.updateIntern",$user->id)}}" enctype="multipart/form-data">
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
                <label for="academy" class="col-md-4 col-form-label text-md-end">{{ __('Academy') }}</label>
                <div class="col-md-6">
                    <select class="form-select" name="academyID" aria-label="Default select example">
{{--                        <option></option>--}}
                        @foreach($academies as $a)
                            <option value="{{$a->id}}" {{$a->id==$intern->academyID? 'selected': '' }}>{{$a->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

{{--            <div class="row mb-3">--}}
{{--                <label for="profile_photo" class="col-md-4 my-auto col-form-label text-md-end">{{ __("profile photo") }}</label>--}}

{{--                <div class="col-md-3 my-auto">--}}
{{--                    <input id="profile_photo" type="file" class="form-control" name="profile_photo"  >--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <span>Previous: </span>--}}
{{--                    <img width="150px" src="{{url("images/uploads/".$intern->profile_photo)}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Intern') }}
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
