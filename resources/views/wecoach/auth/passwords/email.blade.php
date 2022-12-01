@extends('layouts.auth')

@section('content')
    <div
        class="container col-lg-4 col-md-4 col-sm-4 position-relative form-container"
        style="margin-right: 0px"
    >
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="text-center header">
            <h1>نسيتي كلمة السر</h1>
            <p>
                لا مشكلة تأكدي من إدخال البيانات المطلوبة وانتظري رسالة التأكيد<br /><span>
            يومك سعيد :)
          </span>
            </p>
        </div>
        <div class="breaker"></div>
        <form class="p-5" method="POST" action="{{ route('wepassword.email') }}">
            @csrf
            <p>ادخلي بريدك الالكتروني</p>
            <div class="mb-3">
                <input
                    type="email"
                    style="font-family: 'Font Awesome 5 free'"
                    placeholder="&#xf007; البريد الالكتروني "
                    id="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <br />
            <div class="d-flex btn-container">
                <button type="submit" class="btn btn-primary shadow rounded-pill">ارسال لينك التغيير</button>
            </div>
            <br />
            <br />
            <footer>
                <p class="text-center" style="color: #ada6a6">تحتاجين مساعدة</p>
                <p class="text-center" style="color: #4743e0">تواصلي معنا</p>
            </footer>
        </form>
    </div>
@endsection
