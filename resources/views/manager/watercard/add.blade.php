@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Add Water Card</h1>

        <form method="post" action="{{route("manager.watercardAdd")}}">
            @csrf

            <input id="branchID" name="branchID" value="{{$branch->id}}" hidden >

            <div class="row mb-3">
                <label for="card_credit" class="col-md-4 col-form-label text-md-end">{{ __('Card Credit') }}</label>

                <div class="col-md-6">
                    <input id="card_credit" type="number" class="form-control @error('card_credit') is-invalid @enderror" name="card_credit" value="{{ old('card_credit') }}" required autocomplete="card_credit" autofocus>

                    @error('card_credit')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Card') }}
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
