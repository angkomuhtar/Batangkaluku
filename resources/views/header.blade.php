<header class="bg-primary">
    <div class="container flex py-4 items-center">
        <div class="flex-1">
            <p class="font-normal text-sm text-darkLight text-center">
            {{__('general.motivation')}}
            </p>
        </div>
        <div class="w-2/12">
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
    <nav class="container flex items-center justify-between py-7">
        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="h-10 w-auto">
        <ul class=" hidden lg:flex space-x-8 ">
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('/')}}"> {{__('general.home')}}</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('lembaga/tentang')}}"> {{__('general.institution')}}</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('artikel/pelatihan')}}"> {{__('general.news')}}</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('layanan')}}"> {{__('general.service')}}</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('satker/spi')}}"> {{__('general.unit_work')}}</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('galeri/photo')}}"> {{__('general.gallery')}}</a></li>
        </ul>
        <a href="" class="btn-sm-secondary hover:text-white hover:bg-secondary" >{{__('general.contact')}}</a>
    </nav>

</header>
