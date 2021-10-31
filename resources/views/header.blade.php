<header class="bg-primary">
    <div class="container flex py-4 items-center">
        <div class="flex-1">
            <p class="font-normal text-sm text-darkLight text-center">
            {{__('general.motivation')}}
            </p>
        </div>
        <div class="w-2/12 lg:block hidden">
            <div class="relative flex w-full flex-wrap items-stretch">
                <input type="text" placeholder="{{__('general.search')}}" class="px-2 py-1 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-opacity-20 rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full pr-10"/>
                <span class="z-10 h-full font-normal absolute text-center text-darkLight bg-transparent rounded text-sm items-center justify-center w-8 right-0 pr-2 py-1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</header>

<header class="bg-white mb-2 relative top-0 w-full z-50 overflow-auto" id="header" >
    <nav class="container flex items-center justify-between py-7 space-x-10 relative">
        <a href="{{route('home',['lang' => $lang])}}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="h-10 w-auto">
        </a>
        <div id="nav-menu" class="flex-1 flex lg:justify-between lg:relative lg:flex-row lg:py-0 lg:px-0 lg:right-0 overflow-y-scroll lg:overflow-y-hidden
                fixed z-10 right-0 top-0 bottom-0 flex-col p-5 bg-white transition duration-200 translate-x-full lg:translate-x-0">
            <ul class="flex flex-col lg:flex-row lg:space-x-8 order-last lg:order-none lg:space-y-0 space-y-5">
                <li class="capitalize font-semibold">
                    <a href="{{route('home',['lang' => $lang])}}" class=" hover:text-secondary {{route('home') == url()->current() ? 'text-secondary' : ''}}"> {{__('general.home')}}</a>
                </li>

                <li class="lg:hidden">
                    <a href="#" class="capitalize font-semibold menu-collapse">
                        <span class="flex justify-between">
                            {{__('general.institution')}}
                            <svg viewBox="0 0 24 24" class="w-3 text-gray-600 -rotate-90 transition-transform duration-200">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-miterlimit="10" points="2,7 12,17 22,7"
                                            stroke-linejoin="round"></polyline>
                            </svg>
                        </span>
                    </a>
                    <ul class="ml-3 hidden space-y-2 mt-3">
                        <li class="capitalize font-semibold hover:text-secondary {{route('lembaga.tentang') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('lembaga.tentang',['lang' => $lang])}}">{{__('general.about_us')}}</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('lembaga.struktur') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('lembaga.struktur',['lang' => $lang])}}">{{__('general.org_structure')}}</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('lembaga.sdm') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('lembaga.sdm',['lang' => $lang])}}">{{__('general.human_resources')}}</a></li>
                    </ul>
                </li>
                <li class="capitalize font-semibold hidden lg:block">
                    <a href="{{route('lembaga.tentang',['lang' => $lang])}}" class="hover:text-secondary {{route('lembaga.tentang') == url()->current() ? 'text-secondary' : ''}}"> {{__('general.institution')}}</a>
                </li>

                <li class="lg:hidden">
                    <a href="#" class="capitalize font-semibold menu-collapse">
                        <span class="flex justify-between">
                            {{__('general.news')}}
                            <svg viewBox="0 0 24 24" class="w-3 text-gray-600 -rotate-90 transition-transform duration-200">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-miterlimit="10" points="2,7 12,17 22,7"
                                            stroke-linejoin="round"></polyline>
                            </svg>
                        </span>
                    </a>
                    <ul class="ml-3 hidden space-y-2 mt-3">
                        <li class="capitalize font-semibold hover:text-secondary {{route('artikel','pelatihan') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('artikel',['lang' => $lang,'type' => 'pelatihan'])}}">{{__('general.artikel_pelatihan')}}</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('artikel','pertanian') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('artikel',['lang' => $lang,'type' => 'pertanian'])}}">{{__('general.artikel_pertanian')}}</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('artikel','umum') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('artikel',['lang' => $lang,'type' => 'umum'])}}">{{__('general.artikel_umum')}}</a></li>
                    </ul>
                </li>
                <li class="capitalize font-semibold hidden lg:block">
                    <a href="{{route('artikel',['lang' => $lang,'type' => 'pelatihan'])}}" class="hover:text-secondary " class="hover:text-secondary"> {{__('general.news')}}</a>
                </li>

                <li class="lg:hidden">
                    <a href="#" class="capitalize font-semibold menu-collapse">
                        <span class="flex justify-between">
                            {{__('general.service')}}
                            <svg viewBox="0 0 24 24" class="w-3 text-gray-600 -rotate-90 transition-transform duration-200">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-miterlimit="10" points="2,7 12,17 22,7"
                                            stroke-linejoin="round"></polyline>
                            </svg>
                        </span>
                    </a>
                    <ul class="ml-3 hidden space-y-2 mt-3">
                        <li class="capitalize font-bold text-gray-600 mx-2 py-2">Regulasi</li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'sop_balai']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'sop_balai' ,'lang' => $lang])}}">SOP Balai</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'jaringan_informasi_dan_dokumentasi']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'jaringan_informasi_dan_dokumentasi' ,'lang' => $lang])}}">jaringan informasi dan dokumentasi</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'surat_keputusan_balai']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'surat_keputusan_balai' ,'lang' => $lang])}}">surat keputusan balai</a></li>

                        <li class="capitalize font-bold text-gray-600 mx-2 py-2">Info Pelatihan</li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'info_pelatihan']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'info_pelatihan' ,'lang' => $lang])}}">info pelatihan</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'pejabat_LHKPN_-_LHKASN']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'pejabat_LHKPN_-_LHKASN' ,'lang' => $lang])}}">pejabat LHKPN - LHKASN</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'rencana_strategis']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'rencana_strategis' ,'lang' => $lang])}}">rencana strategis</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'rencana_kerja_tahunan']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'rencana_kerja_tahunan' ,'lang' => $lang])}}">rencana kerja tahunan</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'lakin_-_lakip']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'lakin_-_lakip' ,'lang' => $lang])}}">lakin - lakip</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'IKM']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'IKM' ,'lang' => $lang])}}">IKM</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'keuangan']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'keuangan' ,'lang' => $lang])}}">keuangan</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('layanan',['service' => 'aset']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('layanan',['service' => 'aset' ,'lang' => $lang])}}">Aset</a></li>
                    </ul>
                </li>
                <li class="capitalize font-semibold hidden lg:block"><a href="{{route('layanan',['lang' => $lang,'service' => 'sop_balai'])}}" class="hover:text-secondary"> {{__('general.service')}}</a></li>

                <li class="lg:hidden">
                    <a href="#" class="capitalize font-semibold menu-collapse">
                        <span class="flex justify-between">
                            {{__('general.unit_work')}}
                            <svg viewBox="0 0 24 24" class="w-3 text-gray-600 -rotate-90 transition-transform duration-200">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-miterlimit="10" points="2,7 12,17 22,7"
                                            stroke-linejoin="round"></polyline>
                            </svg>
                        </span>
                    </a>
                    <ul class="ml-3 hidden space-y-2 mt-3">
                        <li class="capitalize font-semibold hover:text-secondary {{route('satker',['service' => 'service']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('satker',['lang' => $lang,'service' => 'sistem_pengendalian_intern'])}}">Sistem Pengendali Intern</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('satker',['service' => 'WBK_dan_WBBM']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('satker',['lang' => $lang,'service' => 'WBK_dan_WBBM'])}}">WBK - WBBM</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('satker',['service' => 'PPID']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('satker',['lang' => $lang,'service' => 'PPID'])}}">PPID</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('satker',['service' => 'pengadaan_barang_dan_jasa']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('satker',['lang' => $lang,'service' => 'pengadaan_barang_dan_jasa'])}}">pengadaan Barang & Jasa</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('satker',['service' => 'perpustakaan']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('satker',['lang' => $lang,'service' => 'perpustakaan'])}}">Perpustakaan</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('satker',['service' => 'ISO']) == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('satker',['lang' => $lang,'service' => 'ISO'])}}">ISO</a></li>
                    </ul>
                </li>
                <li class="capitalize font-semibold hidden lg:block"><a href="{{route('satker',['lang' => $lang,'service' => 'sistem_pengendalian_intern'])}}" class="hover:text-secondary"> {{__('general.unit_work')}}</a></li>
                
                <li class="lg:hidden">
                    <a href="#" class="capitalize font-semibold menu-collapse">
                        <span class="flex justify-between">
                            {{__('general.gallery')}}
                            <svg viewBox="0 0 24 24" class="w-3 text-gray-600 -rotate-90 transition-transform duration-200">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-miterlimit="10" points="2,7 12,17 22,7"
                                            stroke-linejoin="round"></polyline>
                            </svg>
                        </span>
                    </a>
                    <ul class="ml-3 hidden space-y-2 mt-3">
                        <li class="capitalize font-semibold hover:text-secondary {{route('gallery.photo') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('gallery.photo',['lang' => $lang])}}">{{__('general.album_photo')}}</a></li>
                        <li class="capitalize font-semibold hover:text-secondary {{route('gallery.video') == url()->current() ? 'text-secondary' : ''}} "><a href="{{route('gallery.video',['lang' => $lang])}}">{{__('general.album_video')}}</a></li>
                    </ul>   
                <li class="capitalize font-semibold hidden lg:block"><a href="{{route('gallery.photo',['lang' => $lang])}}" class="hover:text-secondary"> {{__('general.gallery')}}</a></li>
            </ul>
            <div class="relative flex w-full flex-wrap items-stretch lg:hidden my-7">
                <input type="text" placeholder="{{__('general.search')}}" class="px-2 py-1 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-opacity-20 rounded border shadow outline-none focus:outline-none focus:ring w-full pr-10"/>
                <span class="z-10 h-full font-normal absolute text-center text-darkLight bg-transparent rounded items-center justify-center w-8 right-0 pr-2 py-1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <div class="order-first lg:order-none flex justify-between items-center">
                <button class="lg:hidden" id="close-menu">
                    <i class="fas fa-times fa-2x"></i>
                </button>
                <a href="{{url()->current()}}?lang={{$lang == 'en' ? 'id' : 'en'}}" class="w-auto btn-sm-secondary hover:text-white hover:bg-secondary flex" style="margin-right: 5px">
                    @if ($lang == 'en')
                    <img src="{{asset('assets/img/flags-icons/id.png')}}" alt="" class="h-4 w-auto mr-2">
                    IND
                    @else
                    <img src="{{asset('assets/img/flags-icons/uk.png')}}" alt="" class="h-4 w-auto mr-2">
                    ENG
                    @endif
                </a>
            </div>
        </div>
        <button class="lg:hidden" type="button"  id="open-menu">
            <i class="fas fa-bars fa-2x"></i>
        </button>
    </nav>


</header>
