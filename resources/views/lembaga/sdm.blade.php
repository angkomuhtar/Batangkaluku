@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full">
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">{{__('general.institution')}}</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="hidden lg:block">
            @include('lembaga.lembaga-side')
        </div>

        <!-- modal -->

        <div class="hidden fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
             aria-modal="true" id="modal-profil">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="flex space-x-2">
                            <div
                                class="rounded-full bg-secondary bg-opacity-25 flex items-center justify-center h-10 w-10">
                                <svg class="h-6 w-6 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900 text-center sm:text-left mb-2 flex flex-col justify-center"
                                id="modal-title">
                                Profil Lengkap Pejabat
                            </h3>
                        </div>
                        <div class="mt-4 ml-3 grid gap-y-3">
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Nama Lengkap</p>
                                <p class="text-gray-500 col-span-3 name">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Jenis Kelamin</p>
                                <p class="text-gray-500 col-span-3 gender_str">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Agama</p>
                                <p class="text-gray-500 col-span-3 religion">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Pendidikan Terakhir</p>
                                <p class="text-gray-500 col-span-3 last_edu">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Universitas / Perguruan Tinggi</p>
                                <p class="text-gray-500 col-span-3 univ">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Fakultas / Jurusan</p>
                                <p class="text-gray-500 col-span-3 major">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Pangkat / Golongan</p>
                                <p class="text-gray-500 col-span-3 rank">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Jabatan</p>
                                <p class="text-gray-500 col-span-3 department">- </p>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">Penghargaan</p>
                                <div class="award">
                                    <p class="text-gray-500 col-span-3">- </p>
                                </div>
                            </div>
                            <div class="grid grid-cols-5 gap-x-3">
                                <p class="text-gray-500 col-span-2">E-mail</p>
                                <p class="text-gray-500 col-span-3 email">- </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button id="modal-close" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modals -->
        <div class=" lg:col-span-3 space-y-10">
            <div class="w-full">
                <div class="space-y-4">
                    @foreach($bagian AS $row)
                        <div class="border rounded-md collapsible">
                            <button type="button" aria-label="Open item" title="Open item"
                                    class="collapse-btn flex items-center justify-between w-full p-4 focus:outline-none">
                                <p class="text-lg font-medium">{{$lang == 'en' ? ($row->department_en ?? $row->department) : $row->department}}</p>
                                <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200">
                                    <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                              stroke-miterlimit="10" points="2,7 12,17 22,7"
                                              stroke-linejoin="round"></polyline>
                                </svg>
                            </button>
                            <div class="p-4 pt-0 hidden space-y-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach ($row->humanResources->where('level_id',1)->sortBy('order_id') AS $sdm)
                                        <div class="bg-white rounded-md p-2">
                                            <div class="relative group">
                                                <img src="{{asset('storage/'.$sdm->image)}}" alt=""
                                                     class="rounded-t-md object-center">
                                                <div
                                                    class="invisible transition-all ease-in transform absolute left-0 bottom-0 right-0 w-full bg-blue-300 group-hover:visible flex flex-col justify-center items-center p-5">
                                                    <button class="my-modal text-white" data-id="{{$sdm->id}}">
                                                        <i class="fas fa-info-circle" ></i> More
                                                        Info
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="text-center p-4">
                                                <h3 class="text-sm text-dark mb-3">
                                                    {{$sdm->name}}
                                                </h3>
                                                <p class="capitalize text-xs text-darkLight">
                                                    {{$lang == 'en' ? ($sdm->position_en ?? $sdm->position) : $sdm->position}}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach ($row->humanResources->where('level_id',2)->sortBy('order_id') AS $sdm)
                                        <div class="bg-white rounded-md p-2">
                                            <div class="relative group">
                                                <img src="{{asset('storage/'.$sdm->image)}}" alt=""
                                                     class="rounded-t-md object-center">
                                                <div
                                                    class="invisible transition-all ease-in transform absolute left-0 bottom-0 right-0 w-full bg-blue-300 group-hover:visible flex flex-col justify-center items-center p-5">
                                                    <button class="my-modal text-white" data-id="{{$sdm->id}}">
                                                        <i class="fas fa-info-circle" ></i> More
                                                        Info
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="text-center p-4">
                                                <h3 class="text-sm text-dark mb-3">
                                                    {{$sdm->name}}
                                                </h3>
                                                <p class="capitalize text-xs text-darkLight">
                                                    {{$lang == 'en' ? ($sdm->position_en ?? $sdm->position) : $sdm->position}}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach ($row->humanResources->where('level_id',3)->sortBy('order_id') AS $sdm)
                                        <div class="bg-white rounded-md p-2">
                                            <div class="relative group">
                                                <img src="{{asset('storage/'.$sdm->image)}}" alt=""
                                                     class="rounded-t-md object-center">
                                                <div
                                                    class="invisible transition-all ease-in transform absolute left-0 bottom-0 right-0 w-full bg-blue-300 group-hover:visible flex flex-col justify-center items-center p-5">
                                                    <button class="my-modal text-white" data-id="{{$sdm->id}}">
                                                        <i class="fas fa-info-circle" ></i> More
                                                        Info
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="text-center p-4">
                                                <h3 class="text-sm text-dark mb-3">
                                                    {{$sdm->name}}
                                                </h3>
                                                <p class="capitalize text-xs text-darkLight">
                                                    {{$lang == 'en' ? ($sdm->position_en ?? $sdm->position) : $sdm->position}}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- https://picsum.photos/600/400/?random=${n} -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('add-script')

    <script>
        $(document).ready(function () {
            $(".collapse-btn").click(function () {
                $(this).parent().toggleClass("open");
                $(this).children("svg").toggleClass("transform rotate-180");
                $(this).siblings().toggle("fast");

            })

            $(".my-modal").click(function () {
                var id = $(this).data('id')
                $.get('{{url('ajax/profile')}}/'+id)
                    .then(function(res){
                        for (key in res){
                            $('.'+key).html(res[key] ?? '-')
                        }
                        awards = res.awards.map(function(val){
                            return '<p class="text-gray-500 col-span-3">'+val.award+'</p>'
                        })
                        if (!awards.length){
                            awards = '<p class="text-gray-500 col-span-3">-</p>'
                        }
                        $('.award').html(awards);
                        $("#modal-profil").toggle();
                    })
            })

            $("#modal-close").click(function () {
                $("#modal-profil").toggle();
            })
        })
    </script>
@endpush
