<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <h1><a href="{{route("wecoach")}}" class="nav-link">We Coach</a></h1>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('welogin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welogin') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('weregister'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('weregister') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(\App\Models\admin\Admin::all()->where("uid",auth()->user()->id))
                                <a class="dropdown-item" href="{{route("dashboard")}}" >
                                    Dashboard
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('welogout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('welogout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
