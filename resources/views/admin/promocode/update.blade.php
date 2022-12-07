@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Update Package Form</h1>

        <form method="post" action="{{route("admin.packageUpdate",$package->id)}}" enctype="multipart/form-data">
            @csrf


            <div class="row mb-3">
                <label for="subs" class="col-md-4 col-form-label text-md-end">{{ __('Subscription') }}</label>
                <div class="col-md-6">
                    <select class="form-select" required name="subsID" aria-label="Default select example">
                        @foreach($subscriptions as $s)
                            @php
                                $branch=\App\Models\Branch::find($s->branchID);
                            @endphp
                            <option value="{{$s->id}}" {{$s->id==$package->subsID?'selected':''}}>{{$s->name}} - {{$branch->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>


            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Package Name') }}</label>

                <div class="col-md-6">
                    <input id="package_name" value="{{$package->package_name}}" type="text" class="form-control @error('package_name') is-invalid @enderror" name="package_name"  required autocomplete="package_name" autofocus>

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
                    <input id="sessions_number" value="{{$package->sessions_number}}" type="number" class="form-control @error('sessions_number') is-invalid @enderror" name="sessions_number"  required autocomplete="sessions_number" autofocus>

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
                    <input id="price" value="{{$package->price}}" type="number" class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="price" autofocus>

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

