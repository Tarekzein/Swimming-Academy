@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Make announcement</h1>

        <form method="post" action="{{route("admin.announcement")}}">
            @csrf

            <div class="row mb-3">
                <label for="branch" class="col-md-4 col-form-label text-md-end">{{ __('Announcement') }}</label>
                <div class="col-md-6">
                    <textarea class="form-text form-control" name="announcement" id="announcement" cols="30" rows="10"></textarea>
                </div>

            </div>

            <div class="row mb-3">
                <label for="branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select  class="form-select" id="branch" required name="branchID"
                            aria-label="Default select example">
                        <option selected ></option>
                        @foreach($branches as $b)
                            <option value="{{$b->id}}">{{$b->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row mb-3">
                <label for="userType" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>
                <div class="col-md-6">
                    <select  class="form-select" id="userType" required name="userType"
                            aria-label="Default select example">
                        <option selected value="all">all</option>
                        <option  value="manager">Managers</option>
                        <option  value="captain">Captains</option>
                        <option  value="intern">Interns</option>
                    </select>
                </div>

            </div>

            <div class="row mb-3">
                <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Announcement Type') }}</label>
                <div class="col-md-6">
                    <select  class="form-select" id="type" required name="type"
                             aria-label="Default select example">

                        <option selected ></option>
                        <option value="danger">Warning</option>
                        <option value="success">prize</option>
                        <option value="primary">normal</option>

                    </select>
                </div>

            </div>


            <div class="row mb-3">
                <label for="value"
                       class="col-md-4 col-form-label text-md-end">{{ __('End Date') }}</label>

                <div class="col-md-6">
                    <input id="end_date" type="date"
                           class="form-control @error('incomeDate') is-invalid @enderror" name="end_date"
                           value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>

                    @error('end_date')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Announce') }}
                    </button>
                </div>
            </div>

        </form>
        @if(session()->has("message"))
            <h3 class="text-success text-center">{{session("message")}}</h3>
        @endif

        @if(session()->has("error"))
            <h3 class="text-danger text-center">{{session("error")}}</h3>
        @endif

    </div>

@endsection
