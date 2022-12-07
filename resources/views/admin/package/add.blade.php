@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Add Package Form</h1>

        <form method="post" action="{{route("admin.packageAdd")}}">
            @csrf

            <div class="row mb-3">
                <label for="branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="branch" required name="branchID" aria-label="Default select example">
                        <option selected></option>
                        @foreach($branches as $b)
                            <option value="{{$b->id}}">{{$b->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row mb-3">
            <label for="subs" class="col-md-4 col-form-label text-md-end">{{ __('Subscription') }}</label>
            <div class="col-md-6">
                <select class="form-select"  id="subs" disabled required name="subsID" aria-label="Default select example">
                    <option selected></option>
                    @foreach($subscription as $s)
                        @php
                            $branch=\App\Models\Branch::find($s->branchID);
                        @endphp
                        <option value="{{$s->id}}">{{$s->name}} - {{$branch->name}}</option>
                    @endforeach
                </select>
            </div>

    </div>


    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Package Name') }}</label>

        <div class="col-md-6">
            <input id="package_name" type="text" class="form-control @error('package_name') is-invalid @enderror" name="package_name" value="{{ old('package_name') }}" required autocomplete="package_name" autofocus>

            @error('package_name')
            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="sessions_number" class="col-md-4 col-form-label text-md-end">{{ __('Sessions Number') }}</label>

        <div class="col-md-6">
            <input id="sessions_number" type="number" class="form-control @error('sessions_number') is-invalid @enderror" name="sessions_number" value="{{ old('sessions_number') }}" required autocomplete="sessions_number" autofocus>

            @error('sessions_number')
            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

        <div class="col-md-6">
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

            @error('price')
            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>





    <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Package') }}
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
