@extends('layouts.plantilla')

@section('title','Reservaciones')

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
                                    <span>Agregar reservación</span>
                                </span>
                            </button>
                        </div>

                        <!--TABLA USUARIOS -->
                        <div class=" space-y-5">
                            <div class="card">
                                <header class=" card-header noborder">
                                    <h4 class="card-title">Reservación
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
                                                                Cliente
                                                            </th>

                                                            <th class=" table-th ">
                                                                Habitación
                                                            </th>

                                                            <th class=" table-th ">
                                                                Tarifa
                                                            </th>

                                                            <th class=" table-th ">
                                                                Entrada
                                                            </th>

                                                            <th class=" table-th ">
                                                                Salida
                                                            </th>

                                                            <th class=" table-th ">
                                                                Descuento por cupón
                                                            </th>

                                                            <th class=" table-th ">
                                                                Precio total
                                                            </th>

                                                            <th class=" table-th ">
                                                                Acción
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody
                                                        class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                                        @foreach ($reservations as $reservation)
                                                        <tr>
                                                            <td class="table-td">{{ $reservation->name_client }}</td>
                                                            <td class="table-td">{{ $reservation->name_room }}</td>
                                                            <td class="table-td">{{ $reservation->rate }} Pesos MXN</td>
                                                            <td class="table-td">{{ $reservation->check_in }}</td>
                                                            <td class="table-td">{{ $reservation->check_out }}</td>
                                                            <td class="table-td">{{ $reservation->coupon }}%</td>
                                                            <td class="table-td">{{ $reservation->total_price }}</td>
                                                            <td class="table-td ">
                                                                <div class="flex space-x-3 rtl:space-x-reverse">
                                                                    <button
                                                                        data-reservation-id="{{ $reservation->id }}"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalEditar{{ $reservation->id }}"
                                                                        class="action-btn"
                                                                        type="button"
                                                                    >
                                                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                    </button>

                                                                    <!-- Modal editar reservatione -->
                                                                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                                                        id="modalEditar{{ $reservation->id }}"
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
                                                                                            Editar reservación
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
                                                                                                    <form class="space-y-4" action="{{ route('reservations.update', ['reservation' => $reservation->id]) }}" method="post">
                                                                                                        @csrf
                                                                                                        @method('PUT')
    
                                                                                                        <input type="hidden" name="id" value="{{ $reservation->id }}">

                                                                                                        <div
                                                                                                            class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-7">
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Cliente</label>
                                                                                                                <input type="text" class="form-control"
                                                                                                                    placeholder="Nombre del cliente" name="editNameClient" value="{{ $reservation->name_client }}">
                                                                                                                    @error('editNameClient')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput" class="form-label">Habitación</label>
                                                                                                                <select class="form-control" name="editNameRoom" value="{{ old('editNameRoom') }}">
                                                                                                                    @foreach ($rooms as $room)
                                                                                                                            <option value="{{ $room->name_room }}" class="dark:bg-slate-700" {{ $room->name_room == $reservation->name_room ? 'selected' : '' }}>
                                                                                                                                {{ $room->name_room }}
                                                                                                                            </option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('editNameRoom')
                                                                                                                    <div>
                                                                                                                        {{ $message }}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Tarifa</label>
                                                                                                                <select class="form-control" name="editRate" value="{{ $reservation->rate }}">
                                                                                                                    @foreach ($rates as $rate)
                                                                                                                    <option value="{{$rate->price}}"
                                                                                                                        class="dark:bg-slate-700" {{ $rate->price == $reservation->rate ? 'selected' : '' }}>
                                                                                                                        {{$rate->name_rate}}: {{$rate->price}} Pesos MXN
                                                                                                                    </option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('editRate')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="fromGroup">
                                                                                                                <label for="event-start-date" class=" form-label">Fecha de
                                                                                                                    entrada</label>
                                                                                                                <input class="form-control"
                                                                                                                    type="date" name="editCheckIn" value="{{ $reservation->check_in }}">
                                                                                                                    @error('editCheckIn')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="fromGroup">
                                                                                                                <label for="event-end-date" class=" form-label">Fecha de
                                                                                                                    salida</label>
                                                                                                                <input class="form-control"
                                                                                                                    type="date" name="editCheckOut" value="{{ $reservation->check_out }}">
                                                                                                                    @error('editCheckOut')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Cupón</label>
                                                                                                                <select class="form-control" name="editCoupon" value="{{ $reservation->coupon }}">
                                                                                                                    @foreach ($coupons as $coupon)
                                                                                                                    <option value="0"
                                                                                                                        class="dark:bg-slate-700" {{  $reservation->coupon == '0' ? 'selected' : '' }}>
                                                                                                                        Sin cupón
                                                                                                                    </option>
                                                                                                                    <option value="{{$coupon->discount}}"
                                                                                                                        class="dark:bg-slate-700" {{ $coupon->discount == $reservation->coupon ? 'selected' : '' }}>
                                                                                                                        {{$coupon->coupon_code}}: {{$coupon->discount}} % de descuento
                                                                                                                    </option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('editCoupon')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Precio total</label>
                                                                                                                <input type="number" step="any" class="form-control"
                                                                                                                    placeholder="Precio total" name="editTotalPrice" value="{{$reservation->total_price}}">
                                                                                                                    @error('editTotalPrice')
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

                                                                    <form action="{{ route('reservations.destroy', ['reservation' => $reservation->id]) }}" method="POST" id="destroy">
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
                                                Agregar reservación
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
                                                        <form class="space-y-4" action="{{ route('reservations.store') }}" method="post">
                                                            @csrf

                                                            <div
                                                                                                            class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-7">
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Cliente</label>
                                                                                                                <input type="text" class="form-control"
                                                                                                                    placeholder="Nombre del cliente" name="addNameClient" value="{{old('addNameClient')}}">
                                                                                                                    @error('addNameClient')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div> 
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput" class="form-label">Habitación</label>
                                                                                                                <select class="form-control" name="addNameRoom" value="{{ old('addNameRoom') }}">
                                                                                                                    @foreach ($rooms as $room)
                                                                                                                        @if ($room->hotel_name == session('user_name_hotel'))
                                                                                                                            <option value="{{ $room->name_room }}" class="dark:bg-slate-700">
                                                                                                                                {{ $room->name_room }}
                                                                                                                            </option>
                                                                                                                        @endif
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('addNameRoom')
                                                                                                                    <div>
                                                                                                                        {{ $message }}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Tarifa</label>
                                                                                                                <select class="form-control" name="addRate" value="{{old('addRate')}}">
                                                                                                                    @foreach ($rates as $rate)
                                                                                                                    <option value="{{$rate->price}}"
                                                                                                                        class="dark:bg-slate-700">
                                                                                                                        {{$rate->name_rate}}: {{$rate->price}} Pesos MXN
                                                                                                                    </option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('addRate')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="fromGroup">
                                                                                                                <label for="event-start-date" class=" form-label">Fecha de
                                                                                                                    entrada</label>
                                                                                                                <input class="form-control"
                                                                                                                    type="date" name="addCheckIn" value="{{old('addCheckIn')}}">
                                                                                                                    @error('addCheckIn')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="fromGroup">
                                                                                                                <label for="event-end-date" class=" form-label">Fecha de
                                                                                                                    salida</label>
                                                                                                                <input class="form-control"
                                                                                                                    type="date" name="addCheckOut" value="{{old('addCheckOut')}}">
                                                                                                                    @error('addCheckOut')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Cupón</label>
                                                                                                                <select class="form-control" name="addCoupon" value="{{old('addCoupon')}}">
                                                                                                                    <option value="0"
                                                                                                                        class="dark:bg-slate-700">
                                                                                                                        Sin cupón
                                                                                                                    </option> 
                                                                                                                    @foreach ($coupons as $coupon)
                                                                                                                    <option value="{{$coupon->discount}}"
                                                                                                                        class="dark:bg-slate-700">
                                                                                                                        {{$coupon->coupon_code}}: {{$coupon->discount}} % de descuento
                                                                                                                    </option> 
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                @error('addCoupon')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div class="input-area relative mb-4">
                                                                                                                <label for="largeInput"
                                                                                                                    class="form-label">Precio total</label>
                                                                                                                <input type="number" step="any" class="form-control"
                                                                                                                    placeholder="Precio total" name="addTotalPrice" id="totalPrice" value="{{old('addTotalPrice')}}">
                                                                                                                    @error('addTotalPrice')
                                                                                                                    <div>
                                                                                                                        {{$message}}
                                                                                                                    </div>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <script>
                                                                                                                document.addEventListener('DOMContentLoaded', function () {
                                                                                                                    const rateInput = document.querySelector('[name="addRate"]');
                                                                                                                    const couponInput = document.querySelector('[name="addCoupon"]');
                                                                                                                    const totalPriceInput = document.getElementById('totalPrice');
                                                                                                                    const checkInInput = document.querySelector('[name="addCheckIn"]');
                                                                                                                    const checkOutInput = document.querySelector('[name="addCheckOut"]');
                                                                                                            
                                                                                                                    [rateInput, couponInput, checkInInput, checkOutInput].forEach(input => {
                                                                                                                        input.addEventListener('change', calculateTotalPrice);
                                                                                                                    });
                                                                                                            
                                                                                                                    calculateTotalPrice();
                                                                                                            
                                                                                                                    function calculateTotalPrice() {
                                                                                                                        const rateRoom = parseFloat(rateInput.value);
                                                                                                                        const couponPercentage = parseFloat(couponInput.value);
                                                                                                                        const checkInDate = new Date(checkInInput.value);
                                                                                                                        const checkOutDate = new Date(checkOutInput.value);
                                                                                                                        const differenceInDays = Math.floor((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));
                                                                                                            
                                                                                                                        let totalPrice = rateRoom * differenceInDays - (rateRoom * differenceInDays * couponPercentage / 100);
                                                                                                            
                                                                                                                        totalPriceInput.value = totalPrice.toFixed(2);
                                                                                                                    }
                                                                                                                });
                                                                                                            </script>
                                                                                                            
                                                                                                            
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
