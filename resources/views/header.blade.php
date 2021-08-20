<header class="bg-primary">
    <div class="container flex py-4 items-center">
        <div class="flex-1">
            <p class="font-normal text-sm text-darkLight text-center"> 
            *Kita takut Covid-19, tetapi don't stop, maju terus, pangan harus tersedia dan rakyat tidak boleh bermasalah dengan pangan. 
            </p>
        </div>
        <div class="w-2/12">
            <div class="relative flex w-full flex-wrap items-stretch">
                <input type="text" placeholder="Cari..." class="px-2 py-1 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-opacity-20 rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full pr-10"/>
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
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('/')}}"> Beranda</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('lembaga/tentang')}}"> lembaga</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('artikel/pelatihan')}}"> Artikel berita</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('layanan')}}"> Layanan</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('satker/spi')}}"> Satuan kerja</a></li>
            <li class="capitalize hover:text-secondary active:text-secondary"><a href="{{url('galeri/photo')}}"> Galeri</a></li>
        </ul>
        <a href="" class="btn-sm-secondary hover:text-white hover:bg-secondary" >Kontak</a>
    </nav>

</header>