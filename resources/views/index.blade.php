@extends('layouts.plantilla')

@section('title','Venta')

@section('content')
                <!--CONTENT -->
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">
                        <div class="text-center">
                            <h4 class="font-bold text-slate-700 dark:text-white">Disponibilidad de Habitaciones</h4>
                        </div>
                        <div class="dropdown relative">
                            <button class="btn inline-flex justify-center btn-outline-light items-center cursor-default relative !pr-14"
                            type="button" id="lightsplitOutlineDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="selectedHotel">{{ session('user_name_hotel') }}</span>
                            <span class="cursor-pointer absolute ltr:border-l rtl:border-r border-light-500 h-full ltr:right-0 rtl:left-0 px-2 flex
                                items-center justify-center leading-none">
                                <iconify-icon class="leading-none text-xl" icon="ic:round-keyboard-arrow-down"></iconify-icon>
                            </span>
                            </button>

                            <ul class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow
                                      z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                @foreach ($hotels as $hotel)
                                    <li>
                                        <a href="#" onclick="filterRooms('{{ $hotel->name }}')"
                                           class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                                  dark:hover:text-white">
                                            {{ $hotel->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    
                        <!-- GRIDS DE LAS HABITACIONES -->
                        <div id="roomsGrid" class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
                            @foreach ($rooms as $room)
                                <div class="room-container bg-slate-900 dark:bg-slate-800 mb-10 mt-7 p-4 relative text-center rounded-2xl text-white"
                                     data-hotel="{{ $room->hotel_name }}">
                                     <form class="space-y-4" action="{{ route('index.update', ['room' => $room->id]) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $room->id }}">

                                    <img style="width: 200px; height: 120px" src="{{ $room->image }}"
                                         class="mx-auto mb-4 rounded-full">
                                         
                                     <div class="max-w-[160px] mx-auto mt-6">
                                         <div class="widget-title">{{ $room->name_room }}</div>
                                     </div>
                                     <div class="input-area">
                                         <select id="select" class="form-control" name="editState">
                                             <option value="Libre" class="dark:bg-slate-700" {{ $room->state == 'Libre' ? 'selected' : '' }}>
                                                 Libre
                                             </option>
                                             <option value="Mantenimiento" class="dark:bg-slate-700" {{ $room->state == 'Mantenimiento' ? 'selected' : '' }}>
                                                 Mantenimiento
                                             </option>
                                             <option value="Limpieza" class="dark:bg-slate-700" {{ $room->state == 'Limpieza' ? 'selected' : '' }}>
                                                 Limpieza
                                             </option>
                                         </select>
                                     </div>
                                     <div class="mt-1">
                                         <button type="submit" class="btn btn-lg btn-block btn-primary" style="width: 100%">Cambiar</button>
                                     </div>
                                    </form> 
                                </div>
                                
                            @endforeach
                        </div>
                    
                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                        <script>
                             var selectedHotel = '{{ session('user_name_hotel') }}';
                            $(document).ready(function() {
                                filterRooms(selectedHotel);
                            });
                        
                            function filterRooms(selectedHotel) {
                                $('#selectedHotel').text(selectedHotel);
                        
                                $('.room-container').hide();
                                $('.room-container[data-hotel="' + selectedHotel + '"]').show();
                            }
                        </script>
                        
                    </div>

                </div>
            <!-- END CONTENT -->
@endsection
