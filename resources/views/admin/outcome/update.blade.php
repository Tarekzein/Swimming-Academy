@extends("layouts.dashboard")

@section("content")
    <div class="container">

        <h1>Update Outcome Form</h1>

        <form method="post" action="{{route("admin.outcomeUpdate",$outcome->id)}}" enctype="multipart/form-data">
            @csrf


            <div class="row mb-3">
                <label for="subs" class="col-md-4 col-form-label text-md-end">{{ __('Academy') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="subs" required name="academyID"
                            aria-label="Default select example">
                        @foreach($academies as $a)

                            <option
                                value="{{$a->id}}" {{$a->id==$outcome->academyID?'selected':''}}>{{$a->name}} </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row mb-3">
                <label for="branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="branch" required name="branchID"
                            aria-label="Default select example">
                        @foreach($branches as $b)
                            <option
                                value="{{$b->id}}" {{$b->id==$outcome->branchID? 'selected' :''}}>{{$b->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>


            <div class="row mb-3">
                <label for="outcomeType" class="col-md-4 col-form-label text-md-end">{{ __('Outcome Type') }}</label>

                <div class="col-md-6">
                    <input id="outcomeType" type="text"
                           class="form-control @error('outcomeType') is-invalid @enderror" name="outcomeType"
                           value="{{ $outcome->outcomeType }}" required autocomplete="outcomeType" autofocus>

                    @error('outcomeType')
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
                           value="{{ $outcome->value }}" required autocomplete="value" autofocus>

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
                    <input id="outcomeDate" type="date"
                           class="form-control @error('outcomeDate') is-invalid @enderror" name="outcomeDate"
                           value="{{ $outcome->outcomeDate }}" required autocomplete="outcomeDate" autofocus>

                    @error('outcomeDate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Outcome') }}
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

