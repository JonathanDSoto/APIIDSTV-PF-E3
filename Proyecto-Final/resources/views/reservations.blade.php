@extends('layouts.plantilla')

@section('title','Reservaciones')

@section('content')
                <!--CONTENT -->
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">

                        <!-- CALENDARIO DE RESERVACIONES -->
                        <div class="dashcode-calender">
                            <h4
                                class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0 mb-6">
                                Reservaciones
                            </h4>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="lg:col-span-3 col-span-12 card p-6">
                                    <button class="btn btn-dark block w-full add-event">
                                        Agregar reservación
                                    </button>
                                </div>
                                <div class="lg:col-span-9 col-span-12 card p-6">
                                    <div id="full-calander-active"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- start add event modal -->
                    <div class=" addmodal-wrapper " id="addeventModal">
                        <div class=" modal-overlay"></div>
                        <!-- opacity -->
                        <div class="modal-content">
                            <div class="flex min-h-full justify-center text-center p-6 items-start ">
                                <div
                                    class="w-full transform overflow-hidden rounded-md bg-white dark:bg-slate-800 text-left align-middle shadow-xl
                                    transition-alll max-w-xl opacity-100 scale-100">
                                    <div
                                        class="relative overflow-hidden py-4 px-5 text-white flex justify-between bg-slate-900 dark:bg-slate-800 dark:border-b
                                        dark:border-slate-700">
                                        <h2
                                            class="capitalize leading-6 tracking-wider font-medium text-base text-white">
                                            Reservación</h2>
                                        <button class="text-[22px] close-event-modal">
                                            <iconify-icon icon="heroicons:x-mark"></iconify-icon>
                                        </button>
                                    </div>
                                    <!-- end modal header -->
                                    <div class="px-6 py-8">
                                        <form id="add-event-form" class="space-y-5">
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
                                            <div class="fromGroup">
                                                <label for="event-start-date" class=" form-label">Fecha de
                                                    entrada</label>
                                                <input class="form-control py-2 startdate" id="event-start-date"
                                                    type="text">
                                            </div>
                                            <div class="fromGroup">
                                                <label for="event-end-date" class=" form-label">Fecha de
                                                    salida</label>
                                                <input class="form-control py-2 enddate" id="event-end-date"
                                                    type="text">
                                            </div>
                                            <div class="input-area relative">
                                                <label for="largeInput" class="form-label">Cupón</label>
                                                <input type="text" class="form-control"
                                                    placeholder="XYZA010101ABC">
                                            </div>
                                            <div class="input-area">
                                                <label class="form-label">PRECIO POR DÍA:</label>
                                            </div>
                                            <div class="input-area">
                                                <label class="form-label">TOTAL:</label>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" id="submit-button"
                                                    class="btn btn-dark">Agregar reservación</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END CONTENT -->
@endsection