@php
    $user=auth()->user();
    $captain=\App\Models\captain\Captain::where("uid","$user->id")->get()->first();
    $capRatings=\App\Models\captain\Rating::all()->where("uid",$user->id);
    $totalVal=0;
    $totalRatings=0;
    foreach ($capRatings as $r){
        $totalVal+=$r->value;
        $totalRatings+=1;
    }

    $averageRating=$totalRatings!=0?$totalVal/$totalRatings:0;
    $stars=round(($averageRating/100)*5,1);
@endphp

<!-- Side Nav -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i
            class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true"
            id="iconSidenav"
        ></i>
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
                    <span class="nav-link-text me-1"> الرئيسية </span>
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
                <a class="nav-link text-white " href="{{route("captain.profile")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">edit</i>
                    </div>
                    <span class="nav-link-text ms-1">تعديل الملف الشخصى</span>
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


            <hr class="horizontal light mt-2 mb-2">

            <li class="nav-item mt-3">
                <h6 class="pe-4 me-2 text-uppercase text-xxl text-white font-weight-bolder opacity-8">معلوماتك</h6>
            </li>

            <li class="nav-item">
                <div class="nav-link text-white ">
                    <div class="text-success text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons  opacity-10" style="font-size: 30px !important;">verified_user</i>
                    </div>
                    <div class="d-flex align-items-center me-3">

                    <h5 class="nav-link-text text-white text-bold ms-1">مدربة معتمدة</h5>
                    </div>

                </div>
            </li>
            <hr class="horizontal light mt-2 mb-2">

            <li class="nav-item">
                <div class="nav-link text-white ">
                    <div class="text-warning text-center  ms-2 d-flex align-items-center justify-content-center">
                        <h5 class="text-warning"><i class="material-icons opacity-10" style="font-size: 30px !important;">star</i></h5>
                    </div>

                    <div class="d-flex me-3 flex-column flex-wrap">
                        <h5 class="nav-link-text text-white  text-bold ">تقييمك</h5>
                        <span class=" text-sm  text-bold text-white ">5 / {{$stars!=0?$stars:'-'}}</span>
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
