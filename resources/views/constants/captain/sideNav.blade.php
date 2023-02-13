@php
    $user=auth()->user();
    $captain=\App\Models\captain\Captain::where("uid","$user->id")->get()->first();
@endphp

<!-- Side Nav -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
       <div class="avatar-group my-3 text-center">
           <img class="avatar avatar-xl" src="{{url("images/uploads/$captain->profile_photo")}}" alt="">
       </div>
        <h5 class="text-center text-white">{{$user->name}}</h5>
        <h6 class="text-center text-white">مدربة</h6>
    </div>

    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route("captain")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text me-1"> الملف الشخصي </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("captain.schedule")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">مواعيدك</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">edit</i>
                    </div>
                    <span class="nav-link-text ms-1">تعديل الملف الشخصى</span>
                </a>
            </li>

            <hr class="horizontal light mt-2 mb-2">

            <li class="nav-item mt-3">
                <h6 class="pe-4 me-2 text-uppercase text-xxl text-white font-weight-bolder opacity-8">معلوماتك</h6>
            </li>

            <li class="nav-item">
                <div class="nav-link text-white ">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10" style="font-size: 30px !important;">verified_user</i>
                    </div>
                    <div class="d-flex me-3 flex-column">

                    <h5 class="nav-link-text text-white text-bold ms-1">مدربة معتمدة</h5>
                    <span class=" text-sm text-bold ms-1">انقاز غرقي</span>
                    </div>

                </div>
            </li>
            <hr class="horizontal light mt-2 mb-2">

            <li class="nav-item">
                <div class="nav-link text-white ">
                    <div class="text-white text-center  ms-2 d-flex align-items-center justify-content-center">
                        <h5 class="text-white"><i class="material-icons opacity-10" style="font-size: 30px !important;">star</i></h5>
                    </div>

                    <div class="d-flex me-3 flex-column flex-wrap">
                        <h5 class="nav-link-text text-white  text-bold ">تقييمك</h5>
                        <span class=" text-sm  text-bold text-white ">3.5/5</span>

                    </div>



                </div>
            </li>
            <hr class="horizontal light mt-2 mb-2">

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
