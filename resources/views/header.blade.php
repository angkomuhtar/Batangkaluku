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

<header>
    <nav class="container flex items-center justify-between py-7 space-x-10 relative">
        <a href="{{route('home',['lang' => $lang])}}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="h-10 w-auto">
        </a>
        <div id="nav-menu" class="
                flex-1 flex lg:justify-between lg:relative lg:flex-row lg:py-0 lg:px-0 lg:right-0
                fixed z-10 right-0 top-0 bottom-0 flex-col p-5 bg-white transition duration-200 translate-x-full lg:translate-x-0">
            <ul class="flex flex-col lg:flex-row lg:space-x-8 order-last lg:order-none lg:space-y-0 space-y-10">
                <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{route('home',['lang' => $lang])}}"> {{__('general.home')}}</a></li>
                <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{route('lembaga.tentang',['lang' => $lang])}}"> {{__('general.institution')}}</a></li>
                <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{route('artikel',['lang' => $lang,'type' => 'pelatihan'])}}"> {{__('general.news')}}</a></li>
                <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{route('layanan',['lang' => $lang,'service' => 'sop_balai'])}}"> {{__('general.service')}}</a></li>
                <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{route('satker',['lang' => $lang,'service' => 'sistem_pengendalian_intern'])}}"> {{__('general.unit_work')}}</a></li>
                <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{route('gallery.photo',['lang' => $lang])}}"> {{__('general.gallery')}}</a></li>
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
