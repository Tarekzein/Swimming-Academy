@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Add Promocode Form</h1>

        <form method="post" action="{{route("admin.promoAdd")}}">
            @csrf

            <div class="row mb-3">
                <label for="subs" class="col-md-4 col-form-label text-md-end">{{ __('Academy') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="subs"  required name="academyID"
                            aria-label="Default select example">
                        <option selected></option>
                        @foreach($academies as $a)

                            <option value="{{$a->id}}">{{$a->name}} </option>
                        @endforeach
                    </select>
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
                <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Promo Code') }}</label>

                <div class="col-md-6">
                    <input id="code" type="text"
                           class="form-control @error('code') is-invalid @enderror" name="code"
                           value="{{ old('code') }}" required autocomplete="code" autofocus>

                    @error('code')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="discount_percent"
                       class="col-md-4 col-form-label text-md-end">{{ __('Discount Value (%)') }}</label>

                <div class="col-md-6">
                    <input id="discount_percent" type="number"
                           class="form-control @error('discount_percent') is-invalid @enderror" name="discount_percent"
                           value="{{ old('discount_percent') }}" required autocomplete="discount_percent" autofocus>

                    @error('discount_percent')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="start_date" class="col-md-4 col-form-label text-md-end">{{ __('Start Date') }}</label>

                <div class="col-md-6">
                    <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror"
                           name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date" autofocus>

                    @error('start_date')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="end_date" class="col-md-4 col-form-label text-md-end">{{ __('End Date') }}</label>

                <div class="col-md-6">
                    <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror"
                           name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>

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
                        {{ __('Create Code') }}
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
