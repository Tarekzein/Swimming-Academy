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

                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i
                            class="fa fa-cog fixed-plugin-button-nav cursor-pointer"
                        ></i>
                    </a>
                </li>
                <li class="nav-item dropdown ps-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-start  px-2 py-3 ms-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex justify-content-center align-items-center py-1">
                                    <h6 class="text-secondary text-xs">No Notifications yet</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
