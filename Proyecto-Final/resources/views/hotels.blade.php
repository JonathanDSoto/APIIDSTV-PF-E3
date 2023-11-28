@extends('layouts.plantilla')

@section('title','Hoteles')

@section('content')

                <!--CONTENT -->
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">

                        <div class="mb-4">
                            <button data-bs-toggle="modal" data-bs-target="#modalAgregar"
                                class="btn inline-flex justify-center btn-primary">
                                <span class="flex items-center">
                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                        icon="heroicons-outline:newspaper"></iconify-icon>
                                    <span>Agregar hotel</span>
                                </span>
                            </button>
                        </div>

                        <!--TABLA HOTELES -->
                        <div class=" space-y-5">
                            <div class="card">
                                <header class=" card-header noborder">
                                    <h4 class="card-title">Hoteles
                                    </h4>
                                </header>
                                <div class="card-body px-6 pb-6">
                                    <div class="overflow-x-auto -mx-6">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">
                                                <table
                                                    class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                                        <tr>

                                                            <th class=" table-th ">
                                                                Imagen
                                                            </th>

                                                            <th class=" table-th ">
                                                                Nombre del hotel
                                                            </th>

                                                            <th class=" table-th ">
                                                                Dirección
                                                            </th>

                                                            <th class=" table-th ">
                                                                Descripción
                                                            </th>
                                                            <th class=" table-th ">
                                                                Acción
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                        @foreach ($hotels as $hotel)
                                                        <tr>
                                                            <td class="table-td">
                                                                <span class="flex">
                                                                    <span class="custom-image-container">
                                                                        <img src="{{ $hotel->image }}"
                                                                            alt="1" class="custom-image">
                                                                    </span>
                                                                </span>
                                                            </td>
                                                            <td class="table-td">{{ $hotel->name }}</td>
                                                            <td class="table-td ">{{ $hotel->address }}</td>
                                                            <td class="table-td ">{{ $hotel->description }}</td>
                                                            <td class="table-td ">
                                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                                    <button
                                                                        data-hotel-id="{{ $hotel->id }}"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalEditar{{ $hotel->id }}"
                                                                        class="action-btn"
                                                                        type="button"
                                                                    >
                                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                    </button>

                                                                    <!-- Modal editar hotel -->
                                                                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                                                        id="modalEditar{{ $hotel->id }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="blackModalLabel"
                                                                        aria-hidden="true">
                                                                    <div class="modal-dialog relative w-auto pointer-events-none">
                                                                        <div
                                                                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                                                                    rounded-md outline-none text-current">
                                                                            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                                                                <!-- Modal header -->
                                                                                <div
                                                                                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                                                                    <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                                                        Editar hotel
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
                                                                                                <form class="space-y-4" action="{{ route('hotels.update', ['hotel' => $hotel->id]) }}" method="post">
                                                                                                    @csrf
                                                                                                    @method('PUT')

                                                                                                    <input type="hidden" name="id" value="{{ $hotel->id }}">

                                                                                                    <div
                                                                                                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-7">
                                                                                                        <div class="input-area relative">
                                                                                                            <label for="largeInput"
                                                                                                                class="form-label">Nombre del hotel</label>
                                                                                                            <input type="text" class="form-control"
                                                                                                                placeholder="Nombre hotel" name="editName" value="{{ $hotel->name }}">
                                                                                                        </div>
                                                                                                        <div class="input-area relative">
                                                                                                            <label for="largeInput"
                                                                                                                class="form-label">Dirección</label>
                                                                                                            <input type="text" class="form-control"
                                                                                                                placeholder="Ingrese dirección" name="editAddress" value="{{ $hotel->address }}">
                                                                                                        </div>
                                                                                                        <div class="input-area relative">
                                                                                                            <label for="largeInput"
                                                                                                                class="form-label">Descripción</label>
                                                                                                            <input type="text" class="form-control"
                                                                                                                placeholder="Ingrese descripción" name="editDescription" value="{{ $hotel->description }}">
                                                                                                        </div>
                                                                                                        <div class="input-area relative">
                                                                                                            <label for="largeInput"
                                                                                                                class="form-label">Imagen del hotel</label>
                                                                                                            <input type="url" class="form-control"
                                                                                                                placeholder="Ingrese URL de la imagen" name="editImage" value="{{ $hotel->image }}">
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <!-- Modal footer -->
                                                                                                    <div
                                                                                                    class="flex items-center pt-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                                                                    <button type="submit" data-bs-dismiss="modal"
                                                                                                        class="btn inline-flex justify-center text-white bg-black-500">Guardar</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                    <form action="{{ route('hotels.destroy', ['hotel' => $hotel->id]) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    
                                                                        <button onclick="return confirm('¿Seguro que deseas eliminar este registro?')" type="submit" class="action-btn">
                                                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal agregar tarifa -->
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
                                                Agregar hotel
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
                                                        <form class="space-y-4" action="{{ route('hotels.store') }}" method="post">
                                                            @csrf

                                                            <div
                                                                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-7">
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Nombre del hotel</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Nombre hotel" name="addName" value="{{old('addName')}}">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Dirección</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Ingrese dirección" name="addAddress" value="{{old('addAddress')}}">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Descripción</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Ingrese descripción" name="addDescription" value="{{old('addDescription')}}">
                                                                </div>
                                                                <div class="input-area relative">
                                                                    <label for="largeInput"
                                                                        class="form-label">Imagen del hotel</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Ingrese URL de la imagen" name="addImage" value="{{old('addImage')}}">
                                                                </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div
                                                            class="flex items-center pt-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                            <button type="submit" data-bs-dismiss="modal"
                                                                class="btn inline-flex justify-center text-white bg-black-500">Agregar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
@endsection
