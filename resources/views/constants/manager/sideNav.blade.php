@php
    $user=auth()->user();
    $manager=\App\Models\manager\Manager::where("uid",auth()->user()->id)->get()->first() ;
    $branch=\App\Models\Branch::find($manager->branchID);
@endphp

<!-- Side Nav -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <div class="avatar-group my-3 text-center">
            <img class="avatar avatar-xl" src="{{url("images/uploads/$manager->profile_photo")}}" alt="">
        </div>
        <h5 class="text-center text-white">{{$user->name}}</h5>
        <h6 class="text-center text-white">{{$branch->name}}</h6>
    </div>

    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{route("manager.profile")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text me-1"> الرئيسية </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white position-relative subnav" href="#">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text me-1">العملاء</span>
                    <i class="start-10 position-absolute material-icons arrow opacity-10">expand_more</i>
                </a>
            </li>

            <li>
                <ul class="navbar-nav" style="margin-right: 15px; display: none;" id="subitems">
                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("manager.interns")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list_alt</i>
                            </div>
                            <span class="nav-link-text me-1">كل العملاء</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("manager.addIntern")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person_add</i>
                            </div>
                            <span class="nav-link-text me-1">اضافة عميلة</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link position-relative text-white subnav" href="#">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">pool</i>
                    </div>
                    <span class="nav-link-text me-1">الكباتن</span>
                    <i class="start-10 position-absolute material-icons arrow opacity-10">expand_more</i>
                </a>
            </li>

            <li>
                <ul class="navbar-nav" style="margin-right: 15px; display: none;" id="subitems">
                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("manager.captains")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list_alt</i>
                            </div>
                            <span class="nav-link-text me-1">كل الكباتن</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("manager.addCaptain")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person_add</i>
                            </div>
                            <span class="nav-link-text me-1">اضافة كابتن</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("manager.billing")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">الحسابات</span>
                </a>
            </li>


            <li class="nav-item mt-3">
                <h6 class="pe-4 me-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("manager.profile.update")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("wecoach")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <img class="avatar bg-light avatar-xs" src="{{url("images/wecoach/_Path_.png")}}" alt="">
                    </div>
                    <span class="nav-link-text ms-1">We Coach</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("waves")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <img class="avatar avatar-xs" src="{{url("images/waves/waveslogo.png")}}" alt="">
                    </div>
                    <span class="nav-link-text ms-1">Waves</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>

                    <span class="nav-link-text ms-1">تسجيل الخروج</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </div>

</aside>
