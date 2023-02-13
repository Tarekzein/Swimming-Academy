@extends('layouts.auth')

@section('content')
<main style="background-image: url('{{url("images/loginbg.png")}}'); box-shadow: inset 0 0 2000px rgba(0,0,0,0.8); background-position: center; background-size: cover">

<div
    class="container col-lg-4 col-md-4 col-sm-4 position-relative form-container"
{{--    style="margin-right: 0px"--}}

>
    <div class="text-center header">
        <h1>سجلي الدخول</h1>
        <p>
            مرحبا بك من جديد تأكدي من إدخال بياناتك بشكل صحيح <br /><span>
            يومك سعيد :)
          </span>
        </p>
    </div>

    <div class="breaker"></div>

    <form class="p-5" method="POST" action="{{ route('login') }}">
        @csrf
        <p>بيانات حسابك</p>
        <div class="mb-3">
            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                style="font-family: 'Font Awesome 5 free'"
                placeholder="&#xf007; الإيميل/رقم الواتس اب "
                id="email"  name="email" value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus

            />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <input
                type="password"
                style="font-family: 'Font Awesome 5 free'"
                placeholder="&#xf11c; الرقم السري الخاص بك "
                id="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password"
                required
                autocomplete="current-password"
            />

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

{{--        <div class=" form-check">--}}
{{--            <label class="form-check-label">تذكرني</label>--}}
{{--            <input type="checkbox" />--}}
{{--        </div>--}}
        <div class="form-check mb-3">
            <label class="form-check-label" for="remember">
                تذكرني
            </label>
            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        </div>
        <a href="{{ route('password.request') }}" class="forgetP btn btn-link text-decoration-none">نسيت الرقم السري؟</a>
        <br />
        <div class="d-flex btn-container">
            <button type="submit" class="btn btn-primary shadow rounded-pill">دخول</button>
        </div>

        <footer class="pt-3">
            <p class="text-center" style="color: #ada6a6">
                لا املك حساب حتي الان
            </p>

            <p class="text-center" style="color: #4743e0">
                <a href="{{route("register")}}" style="color: #4743e0" class="btn btn-link text-decoration-none">سجلي حساب جديد</a>
            </p>
        </footer>
    </form>
</div>
</main>
@endsection
