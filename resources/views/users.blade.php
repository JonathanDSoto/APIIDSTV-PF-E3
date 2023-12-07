@extends('layouts.plantilla')

@section('title','Usuarios')

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
                                    <span>Agregar usuario</span>
                                </span>
                            </button>
                        </div>

                        <!--TABLA USUARIOS -->
                        <div class=" space-y-5">
                            <div class="card">
                                <header class=" card-header noborder">
                                    <h4 class="card-title">Usuarios
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
                                                                Nombre del usuario
                                                            </th>

                                                            <th class=" table-th ">
                                                                Apellido del usuario
                                                            </th>

                                                            <th class=" table-th ">
                                                                Email
                                                            </th>

                                                            <th class=" table-th ">
                                                                Hotel
                                                            </th>

                                                            <th class=" table-th ">
                                                                Acción
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                        @foreach ($users as $user)
                                                        <tr>
                                                            <td class="table-td">{{ $user->name }}</td>
                                                            <td class="table-td">{{ $user->last_name }}</td>
                                                            <td class="table-td ">{{ $user->email }}</td>
                                                            <td class="table-td ">{{ $user->name_hotel }}</td>
                                                            <td class="table-td ">
                                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                                    <button
                                                                        data-user-id="{{ $user->id }}"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalEditar{{ $user->id }}"
                                                                        class="action-btn"
                                                                        type="button"
                                                                    >
                                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                    </button>

                                                                    <!-- Modal editar usuario -->
                                                                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                                                        id="modalEditar{{ $user->id }}"
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
                                                                                            Editar usuario
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
                                                                                                    <form class="space-y-4" action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                                                                                                        @csrf
                                                                                                        @method('PUT')
    
                                                                                                        <input type="hidden" name="id" value="{{ $user->id }}">

                                                                                                        <div
                                                                                                            class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-7">
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Nombre</label>
                                                                                                                <input type="text" class="form-control"
                                                                                                                    placeholder="Nombre usuario" name="editName" value="{{ $user->name }}">
                                                                                                                    @error('editName')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Apellido</label>
                                                                                                                <input type="text" class="form-control"
                                                                                                                    placeholder="Apellido" name="editLastName" value="{{ $user->last_name }}">
                                                                                                                    @error('editLastName')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Email</label>
                                                                                                                <input type="email" class="form-control"
                                                                                                                    placeholder="Email" name="editEmail" value="{{ $user->email }}">
                                                                                                                    @error('editEmail')
                                                                                                                        <div>
                                                                                                                            {{$message}}
                                                                                                                        </div>
                                                                                                                    @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">contraseña</label>
                                                                                                                <input type="password" class="form-control"
                                                                                                                    placeholder="Ingrese contraseña" name="editPassword" value="{{ $user->password }}">
                                                                                                                    @error('editPassword')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Hotel</label>
                                                                                                                <select class="form-control" name="editNameHotel" value="{{ $user->name_hotel }}">
                                                                                                                    @foreach ($hotels as $hotel)
                                                                                                                    <option value="{{$hotel->name}}"
                                                                                                                        class="dark:bg-slate-700" {{ $user->name_hotel == $hotel->name ? 'selected' : '' }}>
                                                                                                                        {{$hotel->name}}
                                                                                                                    </option> 
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('editNameHotel')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- Modal footer -->
                                                                                                        <div
                                                                                                            class="flex items-center pt-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                                                                            <button type="submit" name="editUsers" data-bs-dismiss="modal"
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

                                                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" id="destroy">
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
                                                Agregar usuario
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
                                                        <form class="space-y-4" action="{{ route('users.store') }}" method="post">
                                                            @csrf

                                                            <div
                                                                class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-7">
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">Nombre</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Nombre usuario" name="addName" value="{{old('addName')}}">
                                                                        @error('addName')
                                                                        <div>
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">Apellido</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Apellido" name="addLastName" value="{{old('addLastName')}}">
                                                                        @error('addLastName')
                                                                        <div>
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">Email</label>
                                                                    <input type="email" class="form-control"
                                                                        placeholder="Email" name="addEmail" value="{{old('addEmail')}}">
                                                                        @error('addEmail')
                                                                            <div>
                                                                                {{$message}}
                                                                            </div>
                                                                        @enderror
                                                                </div>
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">contraseña</label>
                                                                    <input type="password" class="form-control"
                                                                        placeholder="Ingrese contraseña" name="addPassword" value="{{old('addPassword')}}">
                                                                        @error('addPassword')
                                                                        <div>
                                                                            {{$message}}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="input-area relative mb-4">
                                                                    <label for="largeInput"
                                                                        class="form-label">Hotel</label>
                                                                    <select class="form-control" name="addNameHotel">
                                                                        @foreach ($hotels as $hotel)
                                                                        <option value="{{$hotel->name}}"
                                                                            class="dark:bg-slate-700">
                                                                            {{$hotel->name}}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>

                                                                    @error('addNameHotel')
                                                                    <div>
                                                                        {{$message}}
                                                                    </div>
                                                                @enderror
                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div
                                                                class="flex items-center pt-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                                <button type="submit" name="addUsers" data-bs-dismiss="modal"
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