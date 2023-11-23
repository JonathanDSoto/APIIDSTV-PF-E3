@extends('layouts.plantilla')

@section('title','Venta')

@section('content')
                <!--CONTENT -->
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">

                        <!--BOTÓN TIPOS DE HABITACIONES -->
                        <div class="dropdown relative ">
                            <button
                                class="btn inline-flex justify-center btn-outline-light items-center cursor-default relative !pr-14"
                                type="button" id="lightsplitOutlineDropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tipos de habitaciones
                                <span
                                    class="cursor-pointer absolute ltr:border-l rtl:border-r border-light-500 h-full ltr:right-0 rtl:left-0 px-2 flex
                                          items-center justify-center leading-none">
                                    <iconify-icon class="leading-none text-xl"
                                        icon="ic:round-keyboard-arrow-down"></iconify-icon>
                                </span>
                            </button>
                            <ul
                                class=" dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow
                                      z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                <li>
                                    <a href="#"
                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                              dark:hover:text-white">
                                        Habitación estándar</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                              dark:hover:text-white">
                                        Suite Ejecutiva</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                              dark:hover:text-white">
                                        Panorámica</a>
                                </li>
                            </ul>
                        </div>

                        <!--GRIDS DE LAS HABITACIONES -->
                        <div class="grid lg:grid-cols-6 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
                            <div
                                class="bg-slate-900 dark:bg-slate-800 mb-10 mt-7 p-4 relative text-center rounded-2xl text-white">
                                <img src="{{ asset('/images/all-img/habitacion-1.jpg') }}" alt="Habitación 1"
                                    class="mx-auto mb-4 rounded-full">
                                <div class="max-w-[160px] mx-auto mt-6">
                                    <div class="widget-title">Habitación 1</div>
                                </div>
                                <div class="input-area">
                                    <select id="select" class="form-control">
                                        <option value="option1" class="dark:bg-slate-700">
                                            Libre
                                        </option>
                                        <option value="option2" class="dark:bg-slate-700">
                                            Mantenimiento
                                        </option>
                                        <option value="option2" class="dark:bg-slate-700">
                                            Limpieza
                                        </option>
                                    </select>
                                </div>
                                <div class="mt-6">
                                    <button class="btn inline-flex justify-center btn-warning">Cambiar</button>
                                    <button href="#"
                                        class="btn inline-flex justify-center btn-success">Asignar</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal asignar habitación -->
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                        id="modalAsignar" tabindex="-1" aria-labelledby="blackModalLabel" aria-hidden="true">
                        <div class="modal-dialog relative w-auto pointer-events-none">
                            <div
                                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                    rounded-md outline-none text-current">
                                <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                        <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                            Asignar habitación
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
                                                                    del cliente</label>
                                                                <select id="select" class="form-control">
                                                                    <option value="option1" class="dark:bg-slate-700">
                                                                        Josua Jacinta Almaguar
                                                                    </option>
                                                                    <option value="option2" class="dark:bg-slate-700">
                                                                        Luisa Meza Nuñaz
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="input-area relative">
                                                                <label for="largeInput"
                                                                    class="form-label">Estadia</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Ingrese la estadia">
                                                            </div>
                                                            <div class="input-area relative">
                                                                <label for="largeInput"
                                                                    class="form-label">Cupón</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="XYZA010101ABC">
                                                            </div>
                                                            <div></div>
                                                            <div class="input-area">
                                                                <label class="form-label">PRECIO POR DÍA</label>
                                                            </div>
                                                            <div class="input-area">
                                                                <label class="form-label">TOTAL</label>
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
                                            class="btn inline-flex justify-center text-white bg-black-500">Asignar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END CONTENT -->
@endsection
