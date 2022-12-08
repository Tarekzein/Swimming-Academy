<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <h1><a href="{{route("waves")}}" class="nav-link">Waves</a></h1>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">


                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{Auth::user()->name}}
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
                                <a class="dropdown-item" href="#" >
                                    Profile
                                </a>
                            @elseif(count($manager)!==0)
                                <a class="dropdown-item" href="{{route("manager.profile")}}" >
                                    Profile
                                </a>
                            @elseif(count($captain)!==0)
                                <a class="dropdown-item" href="#" >
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
</nav>
