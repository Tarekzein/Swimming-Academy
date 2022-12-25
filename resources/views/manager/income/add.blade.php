@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Add Income Form</h1>

        <form method="post" action="{{route("manager.incomeAdd")}}">
            @csrf

            <div class="row mb-3">
                <label for="subs" class="col-md-4 col-form-label text-md-end">{{ __('Academy') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="academyID"  required name="academyID"
                            aria-label="Default select example">
                        <option selected></option>
                        @foreach($academies as $a)

                            <option value="{{$a->id}}">{{$a->name}} </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <input id="branchID" type="text"
                   class="form-control @error('branchID') is-invalid @enderror" name="branchID"
                   value="{{ $branch->id }}" hidden required autocomplete="branchID" autofocus>


            <div class="row mb-3">
                <label for="incomeType" class="col-md-4 col-form-label text-md-end">{{ __('Income Type') }}</label>

                <div class="col-md-6">
                    <input id="incomeType" type="text"
                           class="form-control @error('incomeType') is-invalid @enderror" name="incomeType"
                           value="{{ old('incomeType') }}" required autocomplete="incomeType" autofocus>

                    @error('incomeType')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="value"
                       class="col-md-4 col-form-label text-md-end">{{ __('Value	') }}</label>

                <div class="col-md-6">
                    <input id="value" type="number"
                           class="form-control @error('discount_percent') is-invalid @enderror" name="value"
                           value="{{ old('value') }}" required autocomplete="value" autofocus>

                    @error('value')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="value"
                       class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                <div class="col-md-6">
                    <input id="incomeDate" type="date"
                           class="form-control @error('incomeDate') is-invalid @enderror" name="incomeDate"
                           value="{{ old('incomeDate') }}" required autocomplete="incomeDate" autofocus>

                    @error('incomeDate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Income') }}
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
