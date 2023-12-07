@if(!session('user_email'))
<script>window.location = "{{ route('login') }}";</script>
@endif
<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="{{ asset('/images/logo/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('/css/rt-plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- End : Theme CSS -->

    <!-- Start : theme-store js -->
    <script src="{{ asset('/js/store.js') }}" sync></script>
    <!-- End : theme-store js -->

    <title>@yield('title')</title>
    <style>
        .sidebar-menus li:hover{
            background-color: rgba(70, 105, 250, 0.2)
        }

        .sidebar-menu-title{
            background-color: white;
        }

        .bgblue{
            background-repeat: no-repeat;
            background-position: center;
            background-image: url({{ asset('/images/banner.png') }});
        }
    </style>
</head>

<body class=" font-inter dashcode-app" id="body_class">
  <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
  <main class="app-wrapper">
      <!-- BEGIN: Sidebar -->
      <div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
          <div id="bodyOverlay"
              class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
          <div class="logo-segment">
              <a class="flex items-center" href="{{ route('index') }}">
                  <img src="{{ asset('/images/logo/aloja.png') }}" width="52px" class="black_logo" alt="logo">
                  <img src="{{ asset('/images/logo/aloja.png') }}" width="52px" class="white_logo" alt="logo">
                  <span
                      class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">AlojaBaja
                      Gestor</span>
              </a>
              <!-- Sidebar Type Button -->
              <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
                  <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200"
                      icon="fa-regular:dot-circle"></iconify-icon>
                  <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200"
                      icon="material-symbols:circle-outline"></iconify-icon>
              </div>
              <button class="sidebarCloseIcon text-2xl inline-block md:hidden">
                  <iconify-icon class="text-slate-900 dark:text-slate-200"
                      icon="clarity:window-close-line"></iconify-icon>
              </button>
          </div>
          <div id="nav_shadow"
              class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0">
          </div>
          <div class=" sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
              <ul class="sidebar-menu sidebg">
                  <!-- Apps Area -->
                  <div class="sidebar-menu-title">Gestión Hotelera</div>
                  <li>
                      <a href="{{ route('index') }}" class="navItem">
                          <span class="flex items-center">
                              <iconify-icon class="nav-icon" icon="heroicons-outline:computer-desktop"></iconify-icon>
                              <span>Inicio</span>
                          </span>
                      </a>
                  </li>
                  <li class="">
                    <a href="{{ route('reservations') }}" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:calendar"></iconify-icon>
                            <span>Reservaciones</span>
                        </span>
                    </a>
                </li>
                  <li class="">
                      <a href="{{ route('clients') }}" class="navItem">
                          <span class="flex items-center">
                              <iconify-icon class=" nav-icon" icon="heroicons-outline:user-group"></iconify-icon>
                              <span>Clientes</span>
                          </span>
                      </a>
                  </li>
                  <li class="">
                    <a href="javascript:void(0)" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="heroicons-outline:key"></iconify-icon>
                            <span>Habitaciones</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('rooms') }}">Habitaciones</a>
                        </li>
                        <li>
                            <a href="{{ route('rates') }}">Tarifas</a>
                        </li>
                    </ul>
                </li>
                  <li class="">
                    <a href="{{ route('coupons') }}" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class=" nav-icon" icon="streamline:discount-percent-coupon"></iconify-icon>
                            <span>Cupones</span>
                        </span>
                    </a>
                </li>

                  
                  <li class="">
                      <a href="{{ route('users') }}" class="navItem">
                          <span class="flex items-center">
                              <iconify-icon class=" nav-icon" icon="octicon:people-24"></iconify-icon>
                              <span>Usuarios</span>
                          </span>
                      </a>
                  </li>
                  <li class="">
                      <a href="{{ route('hotels') }}" class="navItem">
                          <span class="flex items-center">
                              <iconify-icon class=" nav-icon" icon="octicon:organization-24"></iconify-icon>
                              <span>Hoteles</span>
                          </span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>

      <div class="flex flex-col justify-between min-h-screen">
          <div>
              <!-- BEGIN: Header -->
              <div class="z-[9]" id="app_header">
                  <div class="bgblue app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                      <div class="flex justify-between items-center h-full">
                          <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                              <a href="index.html" class="mobile-logo xl:hidden inline-block">
                                  <img src="{{ asset('/images/logo/logo-c.svg') }}" class="black_logo"
                                      alt="logo">
                                  <img src="{{ asset('/images/logo/logo-c-white.svg') }}" class="white_logo"
                                      alt="logo">
                              </a>
                              <button
                                  class="smallDeviceMenuController open-sdiebar-controller hidden xl:hidden md:inline-block">
                                  <iconify-icon
                                      class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                      icon="heroicons-outline:menu-alt-3"></iconify-icon>
                              </button>
                              <button
                                  class="sidebarOpenButton text-xl text-slate-900 dark:text-white !ml-0 hidden rtl:rotate-180">
                                  <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
                              </button>

                          </div>
                          <!-- end vertcial -->
                          <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                              <a href="index.html" class="leading-0">
                                  <span class="xl:inline-block hidden">
                                      <img src="{{ asset('/images/logo/logo.svg') }}" class="black_logo "
                                          alt="logo">
                                      <img src="{{ asset('/images/logo/logo-white.svg') }}" class="white_logo"
                                          alt="logo">
                                  </span>
                                  <span class="xl:hidden inline-block">
                                      <img src="{{ asset('/images/logo/logo-c.svg') }}" class="black_logo "
                                          alt="logo">
                                      <img src="{{ asset('/images/logo/logo-c-white.svg') }}" class="white_logo "
                                          alt="logo">
                                  </span>
                              </a>
                              <button
                                  class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
                                  <iconify-icon
                                      class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                                      icon="heroicons-outline:menu-alt-3"></iconify-icon>
                              </button>
                              <button
                                  class="items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
                                  rtl:space-x-reverse search-modal inline-flex xl:hidden"
                                  data-bs-toggle="modal" data-bs-target="#searchModal">
                                  <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                                  <span class="xl:inline-block hidden">Buscar...
                                  </span>
                              </button>

                          </div>
                          <div
                              class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

                              <!-- BEGIN: Profile Dropdown -->
                              <!-- Profile DropDown Area -->
                              <div class="md:block hidden w-full">
                                  <button
                                      class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
                                      inline-flex items-center"
                                      type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      <span
                                          class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">
                                          @if(session('user_name'))
                                          {{ session('user_name') }} {{ session('user_last_name') }}
                                            @endif</span>
                                      <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]"
                                          aria-hidden="true" fill="none" stroke="currentColor"
                                          viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 9l-7 7-7-7"></path>
                                      </svg>
                                  </button>
                                  <!-- Dropdown menu -->
                                  <div
                                      class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
                                      overflow-hidden">
                                      <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                          <li>
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button class="px-4 py-2 hover:bg-slate-100
                                            dark:text-white" type="submit">Cerrar sesión</button>
                                            </form>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <!-- END: Header -->
                          </div>
                          <!-- end nav tools -->
                      </div>
                  </div>
              </div>

              <!-- BEGIN: Search Modal -->
              <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto inset-0 bg-slate-900/40 backdrop-filter backdrop-blur-sm backdrop-brightness-10"
                  id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                  <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
                      <div
                          class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
                          <form>
                              <div class="relative">
                                  <button
                                      class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full text-xl dark:text-slate-300 flex items-center justify-center">
                                      <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                                  </button>
                                  <input type="text" class="form-control !py-[14px] !pl-10" placeholder="Buscar"
                                      autofocus>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <!-- END: Search Modal -->
              <!-- END: Header -->

              <!--CONTENT -->
              @yield('content')
              <!-- END CONTENT -->

            </div>
          </main>
      
          <!-- scripts -->
          <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
          <script src="{{ asset('/js/rt-plugins.js') }}"></script>
          <script src="{{ asset('/js/app.js') }}"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script src="{{ asset('/js/alojaBaja.js') }}"></script>
</body>
      
</html>
      