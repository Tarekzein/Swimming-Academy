@php
$announcements=\App\Models\AnnouncementHistory::all()->where("uid",auth()->id());
$annNum=count($announcements);
@endphp

<!-- Navbar -->
<nav
    class="navbar navbar-main z-index-3 navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
    id="navbarBlur"
    data-scroll="true"
>
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0">
                <li class="breadcrumb-item text-sm ps-2">
                    <a class="opacity-5 text-dark" href="javascript:;"
                    >لوحات القيادة</a
                    >
                </li>
                <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                    <a
                        href="javascript:;"
                        class="nav-link text-body p-0"
                        id="iconNavbarSidenav"
                    >
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
            <ul class="navbar-nav me-auto ms-0 justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link text-body font-weight-bold px-0"
                    >
                        <i class="material-icons opacity-10">logout</i>
                        <span class="d-sm-inline my-auto d-none">تسجيل الخروج</span>

                    </a>
                </li>

                <li class="nav-item dropdown px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link  text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell {{$annNum>0?'text-danger':''}} cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu overflow-x-auto  max-height-vh-50  dropdown-menu-start  px-2 py-3 ms-sm-n4" aria-labelledby="dropdownMenuButton">
                        @foreach($announcements as $a)
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex flex-wrap py-1">
                                    @if($a->type=='danger')
                                        <h6 class="text-sm text-danger font-weight-normal mb-1"> Warning </h6>
                                    @elseif($a->type=="primary")
                                        <h6 class="text-sm text-primary font-weight-normal mb-1"> Normal  </h6>
                                    @else
                                        <h6 class="text-sm text-success font-weight-normal mb-1"> Prize </h6>

                                    @endif

                                </div>
                                <div class="d-flex flex-wrap py-1">
                                    <div style="text-align: right;" class="d-flex  flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            {{$a->announcement}}
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock ms-1"></i>
                                            end {{$a->end_date}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
