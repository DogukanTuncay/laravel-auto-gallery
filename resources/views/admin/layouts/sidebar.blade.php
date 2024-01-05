<ul class="navbar-nav  d-flex align-items-center bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-car-on"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{$ana_sayfa->sirket_adi ?? 'AUTO GALLERY'}}</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider m-2">

            <!-- Heading -->
            <div class="sidebar-heading">
                SAYFALAR
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item border  d-flex align-items-center justify-content-center">
                <a class="nav-link" href="{{route('admin.anaSayfa')}}">
                    <i class="fa-solid fa-house"></i>
                    <span>&nbsp Ana Sayfa</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item border  d-flex align-items-center justify-content-center">
                <a class="nav-link" href="{{route('admin.arac')}}">
                    <i class="fa-solid fa-car"></i>
                    <span>&nbsp Araçlar</span>
                </a>
            </li>

            <li class="nav-item border  d-flex align-items-center justify-content-center">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-phone"></i>
                    <span>&nbsp İletişim</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Heading -->

</ul>
