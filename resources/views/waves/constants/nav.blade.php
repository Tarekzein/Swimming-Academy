<div class="row">
    <nav class="navbar pe-2 nav-fill navbar1 navbar-expand-sm colornav">
        <a class="navbar-brand" href="{{route("waves")}}">
            <img src="{{url("images/waves/waveslogo.png")}}" alt="" class="imagi">
        </a>
        <div class="navbar-collapse col-sm-3" id="navbarSupportedContent">
            <ul class="navbar-nav linkS" >
                <li class="nav-item">
                    <a class="nav-link" href="{{route("waves")}}">الرئيسيه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الخدمات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route("waves.products")}}">منتجاتنا</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('welogin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                    @endif

                    @if (Route::has('weregister'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('اشتراك') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @php

                                $admin=\App\Models\admin\Admin::all()->where("uid",auth()->user()->id);
                                $intern=\App\Models\intern\Intern::all()->where("uid",auth()->user()->id);
                                $manager=\App\Models\manager\Manager::all()->where("uid",auth()->user()->id);
                                $captain=\App\Models\captain\Captain::all()->where("uid",auth()->user()->id);
                            @endphp
                            @if(count($admin)!==0)
                                <a class="dropdown-item" href="{{route("dashboard")}}" >
                                    Dashboard
                                </a>
                            @elseif(count($intern)!==0)
                                <a class="dropdown-item" href="{{route("waintern.profile")}}" >
                                    Profile
                                </a>
                            @elseif(count($manager)!==0)
                                <a class="dropdown-item" href="{{route("manager.profile")}}" >
                                    Profile
                                </a>
                            @elseif(count($captain)!==0)
                                <a class="dropdown-item" href="{{route("captain")}}" >
                                    Profile
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar2 bg">
        <div class="container-fluid">

            <button class="navbar-toggler" id="navButton2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-gear"style="direction:rtl;position: relative;top: 6px;"></i>
            </button>
        </div>
    </nav>
    <div class="navmob1">
        <div class="navinfo">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="position: relative;right:20px">
                <li class="nav-item">
                    <i class="fa-solid fa-xmark fa-2x" id="closeButton2"style="color:black"></i>
                </li>
                <li class="nav-item "id="navuser">
                    <i class="fa-regular fa-user fa-user-nav" ></i>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link" href="#">الرئيسيه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الخدمات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">منتجاتنا</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('اشتراك') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @php

                                $admin=\App\Models\admin\Admin::all()->where("uid",auth()->user()->id);
                                $intern=\App\Models\intern\Intern::all()->where("uid",auth()->user()->id);
                                $manager=\App\Models\manager\Manager::all()->where("uid",auth()->user()->id);
                                $captain=\App\Models\captain\Captain::all()->where("uid",auth()->user()->id);
                            @endphp
                            @if(count($admin)!==0)
                                <a class="dropdown-item" href="{{route("dashboard")}}" >
                                    Dashboard
                                </a>
                            @elseif(count($intern)!==0)
                                <a class="dropdown-item" href="{{route("waintern.profile")}}" >
                                    Profile
                                </a>
                            @elseif(count($manager)!==0)
                                <a class="dropdown-item" href="{{route("manager.profile")}}" >
                                    Profile
                                </a>
                            @elseif(count($captain)!==0)
                                <a class="dropdown-item" href="{{route("captain")}}" >
                                    Profile
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</div>




{{--<ul class="navbar-nav ms-auto">--}}
{{--    <!-- Authentication Links -->--}}
{{--    @guest--}}
{{--        @if (Route::has('welogin'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('welogin') }}">{{ __('Login') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}

{{--        @if (Route::has('weregister'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('weregister') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }}--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                @php--}}

{{--                    $admin=\App\Models\admin\Admin::all()->where("uid",auth()->user()->id);--}}
{{--                    $intern=\App\Models\intern\Intern::all()->where("uid",auth()->user()->id);--}}
{{--                    $manager=\App\Models\manager\Manager::all()->where("uid",auth()->user()->id);--}}
{{--                    $captain=\App\Models\captain\Captain::all()->where("uid",auth()->user()->id);--}}
{{--                @endphp--}}
{{--                @if(count($admin)!==0)--}}
{{--                    <a class="dropdown-item" href="{{route("dashboard")}}" >--}}
{{--                        Dashboard--}}
{{--                    </a>--}}
{{--                @elseif(count($intern)!==0)--}}
{{--                    <a class="dropdown-item" href="#" >--}}
{{--                        Profile--}}
{{--                    </a>--}}
{{--                @elseif(count($manager)!==0)--}}
{{--                    <a class="dropdown-item" href="{{route("manager.profile")}}" >--}}
{{--                        Profile--}}
{{--                    </a>--}}
{{--                @elseif(count($captain)!==0)--}}
{{--                    <a class="dropdown-item" href="{{route("captain")}}" >--}}
{{--                        Profile--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                <a class="dropdown-item" href="{{ route('welogout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('welogout') }}" method="POST" class="d-none">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endguest--}}
{{--</ul>--}}
