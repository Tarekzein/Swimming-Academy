@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Update Promo-Code Form</h1>

        <form method="post" action="{{route("admin.incomeUpdate",$income->id)}}" enctype="multipart/form-data">
            @csrf


            <div class="row mb-3">
                <label for="subs" class="col-md-4 col-form-label text-md-end">{{ __('Academy') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="subs"  required name="academyID"
                            aria-label="Default select example">
                        @foreach($academies as $a)

                            <option value="{{$a->id}}" {{$a->id==$income->academyID?'selected':''}}>{{$a->name}} </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row mb-3">
                <label for="branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select  class="form-select" id="branch" required name="branchID"
                             aria-label="Default select example">
                        @foreach($branches as $b)
                            <option value="{{$b->id}}" {{$b->id==$income->branchID? 'selected' :''}}>{{$b->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>


            <div class="row mb-3">
                <label for="incomeType" class="col-md-4 col-form-label text-md-end">{{ __('Income Type') }}</label>

                <div class="col-md-6">
                    <input id="incomeType" type="text"
                           class="form-control @error('incomeType') is-invalid @enderror" name="incomeType"
                           value="{{ $income->incomeType }}" required autocomplete="incomeType" autofocus>

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
                           value="{{ $income->value }}" required autocomplete="value" autofocus>

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
                           value="{{ $income->incomeDate }}" required autocomplete="incomeDate" autofocus>

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
                        {{ __('Update Code') }}
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

