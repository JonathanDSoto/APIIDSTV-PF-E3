<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>HTML rates</title>
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
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->
        <div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
            <div id="bodyOverlay"
                class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
            <div class="logo-segment">
                <a class="flex items-center" href="index.html">
                    <img src="{{ asset('/images/logo/logo-c.svg') }}" class="black_logo" alt="logo">
                    <img src="{{ asset('/images/logo/logo-c-white.svg') }}" class="white_logo" alt="logo">
                    <span
                        class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">AlojaBaja
                        Store</span>
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
            <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title"></li>
                    <!-- Apps Area -->
                    <li class="sidebar-menu-title">PUNTO DE VENTA</li>
                    <li>
                        <a href="#" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class="nav-icon" icon="heroicons-outline:computer-desktop"></iconify-icon>
                                <span>Venta</span>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:user-group"></iconify-icon>
                                <span>Clientes</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#">Consultar cliente</a>
                            </li>
                            <li>
                                <a href="#">Agregar cliente</a>
                            </li>
                        </ul>
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
                                <a href="#">Habitaciones</a>
                            </li>

                            <li>
                                <a href="#">Tarifas</a>
                            </li>
                        </ul>
                    </li>


                    <li class="">
                        <a href="#" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class=" nav-icon" icon="heroicons-outline:calendar"></iconify-icon>
                                <span>Reservaciones</span>
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
                    <div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                        <div class="flex justify-between items-center h-full">
                            <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                                <a href="index.html" class="mobile-logo xl:hidden inline-block">
                                    <img src="{{ asset('/images/logo/logo-c.svg') }}" class="black_logo" alt="logo">
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
                                        <div
                                            class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                                            <img src="{{ asset('/images/all-img/user.png') }}" alt="user"
                                                class="block w-full h-full object-cover rounded-full">
                                        </div>
                                        <span
                                            class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">Víctor
                                            Medellín</span>
                                        <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]"
                                            aria-hidden="true" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div
                                        class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
                                        overflow-hidden">
                                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <iconify-icon icon="heroicons-outline:chat"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Perfil</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <iconify-icon icon="heroicons-outline:cog"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Configuración</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                                    dark:text-white font-normal">
                                                    <iconify-icon icon="heroicons-outline:login"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Cerrar sesión</span>
                                                </a>
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
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">

                        <!--TABLA TARIFAS POR HABITACIÓN -->
                        <div class="card">
                            <header class=" card-header noborder">
                                <h4 class="card-title">Tabla habitaciones
                                </h4>
                            </header>
                            <div class="card-body px-6 pb-6">
                                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                    <span class=" col-span-8  hidden"></span>
                                    <span class="  col-span-4 hidden"></span>
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden ">
                                            <table
                                                class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                                id="data-table">
                                                <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                    <tr>

                                                        <th scope="col" class=" table-th ">
                                                            Imagen
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Nombre
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Descripción
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Tipo habitación
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Estado
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Tarifa
                                                        </th>

                                                        <th scope="col" class=" table-th ">
                                                            Acción
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                    <tr>
                                                        <td class="table-td">
                                                            <span class="flex">
                                                                <span class="custom-image-container">
                                                                    <img src="{{ asset('/images/all-img/habitacion-1.jpg') }}"
                                                                        alt="1" class="custom-image">
                                                                </span>
                                                            </span>
                                                        </td>
                                                        <td class="table-td ">Habitación 115</td>
                                                        <td class="table-td">
                                                            Está habitación cuenta con una sola
                                                            cama matrimonial, un baño y vista al mar
                                                        </td>
                                                        <td class="table-td ">Habitación estándar</td>
                                                        <td class="table-td ">
                                                            <div>
                                                                Libre
                                                            </div>
                                                        </td>
                                                        <td class="table-td ">
                                                            <div>
                                                                $895.36
                                                            </div>
                                                        </td>
                                                        <td class="table-td ">
                                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#modalEditar" class="action-btn"
                                                                    type="button">
                                                                    <iconify-icon
                                                                        icon="heroicons:pencil-square"></iconify-icon>
                                                                </button>
                                                                <button class="action-btn" type="button">
                                                                    <iconify-icon
                                                                        icon="heroicons:trash"></iconify-icon>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button data-bs-toggle="modal"
                            data-bs-target="#modalAgregar" class="btn inline-flex justify-center btn-primary">
                                <span class="flex items-center">
                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                        icon="heroicons-outline:newspaper"></iconify-icon>
                                    <span>Agregar habitación</span>
                                </span>
                            </button>
                        </div>


                        <!-- Modal editar tarifa -->
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                            id="modalEditar" tabindex="-1" aria-labelledby="blackModalLabel" aria-hidden="true">
                            <div class="modal-dialog relative w-auto pointer-events-none">
                                <div
                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                            rounded-md outline-none text-current">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                Editar habitación
                                            </h3>
                                            <button type="button"
                                                class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                                        dark:hover:bg-slate-600 dark:hover:text-white"
                                                data-bs-dismiss="modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                                                11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-4">
                                            <div class="card xl:col-span-2">
                                                <div class="card-body flex flex-col p-6">
                                                    <div class="card-text h-full ">
                                                        <form class="space-y-4">
                                                            <div
                                                                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-7">
                                                                <div class="input-area relative">
                                                                    <label for="largeInput" class="form-label">Nombre
                                                                        de la habitación</label>
                                                                    <input type="text" class="form-control"
                                                                        value="habitación 115">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Descripción</label>
                                                                    <input type="text" class="form-control"
                                                                        value="Está Habitación Cuenta Con Una Sola Cama Matrimonial, Un Baño Y Vista Al Mar">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput" class="form-label">Tipo de
                                                                        habitación</label>
                                                                    <input type="text" class="form-control"
                                                                        value="Habitación Estándar">
                                                                </div>
                                                                <div class="input-area">
                                                                    <label for="select"
                                                                        class="form-label">Estado</label>
                                                                    <select id="select" class="form-control">
                                                                        <option value="option1"
                                                                            class="dark:bg-slate-700">Libre
                                                                        </option>
                                                                        <option value="option2"
                                                                            class="dark:bg-slate-700">Mantenimiento
                                                                        </option>
                                                                        <option value="option3"
                                                                            class="dark:bg-slate-700">Limpieza
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Tarifa</label>
                                                                    <input type="tel" class="form-control"
                                                                        value="895.36">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Imagen</label>
                                                                    <button
                                                                        class="btn inline-flex justify-center btn-light">Seleccionar
                                                                        archivo</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                            <button data-bs-dismiss="modal"
                                                class="btn inline-flex justify-center text-white bg-black-500">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal editar tarifa -->
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                            id="modalAgregar" tabindex="-1" aria-labelledby="blackModalLabel" aria-hidden="true">
                            <div class="modal-dialog relative w-auto pointer-events-none">
                                <div
                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                            rounded-md outline-none text-current">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                Agregar habitación
                                            </h3>
                                            <button type="button"
                                                class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                                        dark:hover:bg-slate-600 dark:hover:text-white"
                                                data-bs-dismiss="modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                                                11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-4">
                                            <div class="card xl:col-span-2">
                                                <div class="card-body flex flex-col p-6">
                                                    <div class="card-text h-full ">
                                                        <form class="space-y-4">
                                                            <div
                                                                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-7">
                                                                <div class="input-area relative">
                                                                    <label for="largeInput" class="form-label">Nombre
                                                                        de la habitación</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Descripción</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="input-area">
                                                                    <label for="select" class="form-label">Tipo
                                                                        de habitación</label>
                                                                    <select id="select" class="form-control">
                                                                        <option value="option1"
                                                                            class="dark:bg-slate-700">Estándar
                                                                        </option>
                                                                        <option value="option2"
                                                                            class="dark:bg-slate-700">Suite Ejecutiva
                                                                        </option>
                                                                        <option value="option2"
                                                                            class="dark:bg-slate-700">Panorámica
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="input-area">
                                                                    <label for="select"
                                                                        class="form-label">Estado</label>
                                                                    <select id="select" class="form-control">
                                                                        <option value="option1"
                                                                            class="dark:bg-slate-700">Libre
                                                                        </option>
                                                                        <option value="option2"
                                                                            class="dark:bg-slate-700">Mantenimiento
                                                                        </option>
                                                                        <option value="option3"
                                                                            class="dark:bg-slate-700">Limpieza
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="input-area">
                                                                    <label for="select" class="form-label">Tarifa</label>
                                                                    <select id="select" class="form-control">
                                                                        <option value="option1"
                                                                            class="dark:bg-slate-700">Tarifa sencilla
                                                                        </option>
                                                                        <option value="option2"
                                                                            class="dark:bg-slate-700">Tarifa doble
                                                                        </option>
                                                                        <option value="option2"
                                                                            class="dark:bg-slate-700">King size
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Imagen de la habitación</label>
                                                                    <button
                                                                        class="btn inline-flex justify-center btn-light">Seleccionar
                                                                        archivo</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                            <button data-bs-dismiss="modal"
                                                class="btn inline-flex justify-center text-white bg-black-500">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END CONTENT -->
            </div>
    </main>

    <!-- scripts -->
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/rt-plugins.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
