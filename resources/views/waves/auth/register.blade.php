
@extends('layouts.auth')

@section('content')
    <main style="background-image: url('{{url("images/loginbg.png")}}'); box-shadow: inset 0 0 2000px rgba(0,0,0,0.8); background-position: center; background-size: cover">

        <div
            class="container col-lg-5 col-md-4 col-sm-4 position-relative form-container"
            {{--    style="margin-right: 0px"--}}

        >
            <div class="text-center header">
                <h1>ادخلي بياناتك للتسجيل</h1>
                <p>
                    خلي بالك وانتي بتسجلي لأن البيانات دي هدفها تحسين الخدمة اللي بنقدمها ليكي.<br /><span>
             يومك جميل :)
          </span>
                </p>
            </div>

            <div class="breaker"></div>

            <form class="p-5" method="POST" action="{{ route('register') }}">
                @csrf
                <p>سجلي بياناتك</p>
                <input id="academyID" name="academyID" value="2" hidden >

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="name" class="form-label">{{ __('الاسم') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="email" class="form-label">{{ __('البريد الالكتروني') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="password" class="form-label ">{{ __('كلمة السر') }}</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="password-confirm" class="form-label text-md-end">{{ __('تأكيد كلمة السر') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <label for="address" class="form-label text-md-end">{{ __('العنوان') }}</label>
                        <input id="address" type="text" class="form-control" name="address" required >
                    </div>
                </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <label for="birthdate" class="form-label text-md-end">{{ __('تاريخ الميلاد') }}</label>
                        <input id="birthdate"  type="date" class="form-control" name="birthdate" required >
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="password-confirm" class="form-label text-md-end">{{ __('رقم الواتس اب') }}</label>

                        <input id="whatsapp" class="form-control whatsapp" type="text"  name="whatsapp" required >
                    </div>
                </div>

                <div class="d-flex mx-auto pt-5 align-items-center justify-content-between">
                    <button type="submit" class="btn btn-primary mx-auto shadow rounded-pill">سجلي الدخول</button>
                </div>

                <footer class="pt-3">
                    <p class="text-center" style="color: #ada6a6">
                        لديك حساب بالفعل ؟
                    </p>

                    <p class="text-center" style="color: #4743e0">
                        <a href="{{route("login")}}" style="color: #4743e0" class="btn btn-link text-decoration-none">سجلي  الدخول</a>
                    </p>
                </footer>
            </form>
        </div>
    </main>
@endsection

