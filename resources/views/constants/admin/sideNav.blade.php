

<!-- Side Nav -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand text-center m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <span class="me-1 text-lg font-weight-bold text-white">{{auth()->user()->name}}</span>
        </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{route("dashboard")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text me-1"> لوحة التحكم </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white position-relative subnav" href="#">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text me-1">المتدربات</span>
                    <i class="start-10 position-absolute material-icons arrow opacity-10">expand_more</i>
                </a>
            </li>

            <li>
                <ul class="navbar-nav" style="margin-right: 15px; display: none;" id="subitems">
                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("admin.interns")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list_alt</i>
                            </div>
                            <span class="nav-link-text me-1">كل المتدربات</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("admin.internAdd")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person_add</i>
                            </div>
                            <span class="nav-link-text me-1">اضافة متدربة</span>
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
                        <a class="nav-link text-white  " href="{{route("admin.captains")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list_alt</i>
                            </div>
                            <span class="nav-link-text me-1">كل الكباتن</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("admin.captainAdd")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person_add</i>
                            </div>
                            <span class="nav-link-text me-1">اضافة كابتن</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link position-relative text-white subnav" href="#">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">manage_accounts</i>
                    </div>
                    <span class="nav-link-text me-1">الاداريات</span>
                    <i class="start-10 position-absolute material-icons arrow opacity-10">expand_more</i>
                </a>
            </li>

            <li>
                <ul class="navbar-nav" style="margin-right: 15px; display: none;" id="subitems">
                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("admin.managers")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list_alt</i>
                            </div>
                            <span class="nav-link-text me-1">كل الاداريات</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-white  " href="{{route("admin.managerAdd")}}">
                            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person_add</i>
                            </div>
                            <span class="nav-link-text me-1">اضافة ادارية</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("admin.branches")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">store</i>
                    </div>
                    <span class="nav-link-text ms-1">الفروع و الخدمات</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("admin.billing")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">الحسابات</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route("admin.promocodes")}}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-symbols-outlined opacity-10">barcode</i>
                    </div>
                    <span class="nav-link-text ms-1">البرومو كود</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="../pages/rtl.html">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">campaign</i>
                    </div>
                    <span class="nav-link-text ms-1">الاخبار</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="../pages/notifications.html">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="pe-4 me-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="../pages/profile.html">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
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
