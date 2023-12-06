@extends('layouts.plantilla')

@section('title','Tarifas')

@section('content')
                <!--CONTENT -->
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">

                    @if($errors->any())
                        <div class="alert alert-danger mb-3">
                            El registro no fue aceptado debido a datos incorrectos:
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <div class="mb-4">
                            <button data-bs-toggle="modal" data-bs-target="#modalAgregar"
                                class="btn inline-flex justify-center btn-primary">
                                <span class="flex items-center">
                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                        icon="heroicons-outline:newspaper"></iconify-icon>
                                    <span>Agregar tarifa</span>
                                </span>
                            </button>
                        </div>

                        <!--TABLA USUARIOS -->
                        <div class=" space-y-5">
                            <div class="card">
                                <header class=" card-header noborder">
                                    <h4 class="card-title">Tarifa
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
                                                            <th class=" table-th ">
                                                                Tarifa
                                                            </th>

                                                            <th class=" table-th ">
                                                                Precio
                                                            </th>

                                                            <th class=" table-th ">
                                                                Acción
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                        @foreach ($rates as $rate)
                                                        <tr>
                                                            <td class="table-td">{{ $rate->name_rate }}</td>
                                                            <td class="table-td">{{ $rate->price }} Pesos MXN</td>
                                                            <td class="table-td ">
                                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                                    <button
                                                                        data-rate-id="{{ $rate->id }}"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalEditar{{ $rate->id }}"
                                                                        class="action-btn"
                                                                        type="button"
                                                                    >
                                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                    </button>

                                                                    <!-- Modal editar ratee -->
                                                                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                                                        id="modalEditar{{ $rate->id }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="blackModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                                                                            <div
                                                                                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                                                                        rounded-md outline-none text-current">
                                                                                <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                                                                    <!-- Modal header -->
                                                                                    <div
                                                                                        class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                                                                        <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                                                            Editar tarifa
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
                                                                                                    <form class="space-y-4" action="{{ route('rates.update', ['rate' => $rate->id]) }}" method="post">
                                                                                                        @csrf
                                                                                                        @method('PUT')
    
                                                                                                        <input type="hidden" name="id" value="{{ $rate->id }}">

                                                                                                        <div
                                                                                                            class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-7">
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Tarifa</label>
                                                                                                                <input type="text" class="form-control"
                                                                                                                    placeholder="Nombre de la tarifa" name="editNameRate" value="{{ $rate->name_rate }}">
                                                                                                                    @error('editNameRate')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Precio</label>
                                                                                                                <input type="number" step="any" class="form-control"
                                                                                                                    placeholder="Precio total" name="editPrice" value="{{ $rate->price }}">
                                                                                                                    @error('editPrice')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- Modal footer -->
                                                                                                        <div
                                                                                                            class="flex items-center pt-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                                                                            <button type="submit" name="editUser" data-bs-dismiss="modal"
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

                                                                    <form action="{{ route('rates.destroy', ['rate' => $rate->id]) }}" method="POST" id="destroy">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    
                                                                        <button type="submit" class="action-btn">
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
                                                                        id="modalAgregar"
                                                                        tabindex="-1"
                                                                        aria-labelledby="blackModalLabel"
                                                                        aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                                                                        <div
                                                                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                                                            rounded-md outline-none text-current">
                                                                            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                Agregar tarifa
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
                                                        <form class="space-y-4" action="{{ route('rates.store') }}" method="post">
                                                            @csrf

                                                            <div
                                                                class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-7">
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">Tarifa</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Nombre de la tarifa" name="addNameRate" value="{{old('addNameRate')}}">
                                                                        @error('addNameRate')
                                                                        <div>
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">Precio</label>
                                                                    <input type="number" step="any" class="form-control"
                                                                        placeholder="Precio total" name="addPrice" value="{{old('addPrice')}}">
                                                                        @error('addPrice')
                                                                        <div>
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div
                                                                class="flex items-center pt-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                                <button type="submit" name="addUser" data-bs-dismiss="modal"
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
