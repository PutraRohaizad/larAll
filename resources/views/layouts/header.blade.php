<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="index.html">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-9.png') }}" class="logo-default max-h-40px" />
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-1.png') }}" class="logo-sticky max-h-40px" />
                </a>
            </div>
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu"
                    class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav">
                        <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here">
                            <a href="{{ route('home') }}" class="menu-link ">
                                <span class="menu-text">Dashboard</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here">
                            <a href="{{ route('customers.index') }}" class="menu-link ">
                                <span class="menu-text">Customer</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here">
                            <a href="{{ route('orders.index') }}" class="menu-link ">
                                <span class="menu-text">Order</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-sm" src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}"
                            alt="" />
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">English</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item active">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('assets/media/svg/flags/128-spain.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">Spanish</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>

            <!--begin::logout-->
            <div>
                <a class="btn btn-primary btn-sm" style="margin-top: 60%" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>
    </div>
</div>