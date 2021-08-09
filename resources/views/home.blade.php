@extends('app')

@section('main')
        <section class="container">
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://source.unsplash.com/1204x480/?farm" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://source.unsplash.com/1204x480/?farm,view" alt="">
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                </div>
            </div>
        </section>

        <section class="container">
            <h2 class="header-title">
                Update Covid-19 Indonesia
            </h2>
            <p class="header-subtitle">Pembaruan terakhir 2021-06-21 03:07:15</p>
            <div class="grid grid-col-1 md:grid-col-2 lg:grid-cols-4 gap-6">
                <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-confirmed">
                    <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-confirmed">
                        <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                        <path fill="#32A7E2" d="M31.993 29.242a1.5 1.5 0 00-2.122 2.121l2.122-2.12zm-.74-3.339a4.72 4.72 0 01-4.717 4.722v3a7.72 7.72 0 007.717-7.722h-3zm-4.717 4.722a4.72 4.72 0 01-4.717-4.722h-3a7.72 7.72 0 007.717 7.722v-3zm-4.717-4.722a4.72 4.72 0 014.717-4.722v-3a7.72 7.72 0 00-7.717 7.722h3zm4.717-4.722a4.72 4.72 0 014.717 4.722h3a7.72 7.72 0 00-7.717-7.722v3zm3.335 10.182l5.318 5.322 2.122-2.12-5.318-5.322-2.122 2.12zM3.76 13.566l-1.498-.069v.017l-.001.018 1.5.034zM20 7.272l-1.08 1.04L20 9.435l1.08-1.123L20 7.272zm16.24 6.294l1.499-.034v-.018l-.001-.017-1.499.07zm.01.46h1.5v-.035l-1.5.035zM5.966 23.599l1.343-.669-1.343.669zm7.263-20.724c-5.913 0-10.696 4.732-10.967 10.622l2.997.138c.2-4.343 3.715-7.76 7.97-7.76v-3zm7.852 3.356c-1.989-2.066-4.771-3.356-7.852-3.356v3c2.224 0 4.238.928 5.69 2.437l2.162-2.08zm5.69-3.356c-3.081 0-5.863 1.29-7.852 3.356l2.162 2.08a7.87 7.87 0 015.69-2.436v-3zm10.967 10.622c-.271-5.89-5.054-10.622-10.967-10.622v3c4.255 0 7.77 3.417 7.97 7.76l2.997-.138zm.012.494l-.011-.46-3 .07.011.46 3-.07zM2.26 13.513c-.007.17-.011.34-.011.513h3c0-.127.003-.254.008-.38l-2.997-.133zm0 .019l-.01.46 2.999.068.01-.46-2.999-.068zm-.011.494c0 3.923.926 7.335 2.373 10.241L7.31 22.93c-1.252-2.514-2.059-5.47-2.059-8.904h-3zm2.373 10.241c1.973 3.964 4.897 6.955 7.705 9.047 2.79 2.078 5.556 3.336 7.315 3.768l.714-2.914c-1.287-.316-3.693-1.365-6.236-3.26-2.526-1.881-5.096-4.53-6.812-7.978l-2.686 1.337zm32.25-3.856c.558-1.956.877-4.084.877-6.385h-3c0 2.02-.28 3.872-.762 5.563l2.885.822z"/>
                        <path stroke="#32A7E2" stroke-width="3" d="M15.313 9.375a6.563 6.563 0 00-6.556 6.25"/>
                        </svg>
                    </div>
                    <p class="text-confirmed text-2xl font-bold mb-2">145.466</p>
                    <p class="text-confirmed text-xl font-semibold">Terkonfirmasi</p>
                </div>
                <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-injury">
                    <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-injury">
                        <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                        <path fill="#FF8700" fill-rule="evenodd" d="M13.23 2.875c-5.914 0-10.697 4.732-10.968 10.622V13.515c-.008.17-.012.34-.012.51l3 .035.01-.441c.208-4.336 3.72-7.744 7.97-7.744 2.223 0 4.237.928 5.69 2.437L20 9.435l1.08-1.123a7.87 7.87 0 015.69-2.437c4.25 0 7.762 3.408 7.97 7.744l.01.441 3-.069-.011-.46v-.017l-.001-.017c-.271-5.89-5.054-10.622-10.967-10.622A10.83 10.83 0 0020 5.247a10.83 10.83 0 00-6.77-2.372zM4.622 24.267c1.973 3.964 4.897 6.955 7.705 9.047 2.79 2.078 5.556 3.336 7.315 3.768l.357.087.357-.087c1.76-.432 4.526-1.69 7.315-3.768 2.808-2.092 5.732-5.083 7.705-9.047L32.69 22.93c-1.716 3.448-4.287 6.097-6.812 7.978-2.324 1.732-4.533 2.757-5.879 3.162-1.346-.405-3.555-1.43-5.88-3.162-2.524-1.881-5.095-4.53-6.811-7.978l-2.686 1.337zM15.237 11.68a1.5 1.5 0 00-2.808-.515l-3.325 6.181H3.75a1.5 1.5 0 000 3H10a1.5 1.5 0 001.321-.79l1.548-2.877.956 7.268a1.5 1.5 0 002.812.507l2.604-4.904.013-.024.887 2.638a1.5 1.5 0 002.824.055l2.015-5.298.905 2.445a1.5 1.5 0 001.407.98h8.958a1.5 1.5 0 000-3h-7.914l-1.93-5.216a1.5 1.5 0 00-2.808-.013l-1.948 5.122-.75-2.227a1.5 1.5 0 00-2.78-.155l-1.547 3.32-.385.727-.95-7.224z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-injury text-2xl font-bold mb-2">145.466</p>
                    <p class="text-injury text-xl font-semibold">Dirawat</p>
                </div>
                <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-heal">
                    <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-heal">
                        <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                            <path fill="url(#paint0_linear)" fill-rule="evenodd" d="M13.23 2.875c-5.914 0-10.697 4.732-10.968 10.622V13.515c-.008.17-.012.34-.012.51 0 3.924.926 7.336 2.373 10.242 1.973 3.964 4.897 6.955 7.705 9.047 2.79 2.078 5.556 3.336 7.315 3.768l.357.087.357-.087c1.76-.432 4.526-1.69 7.315-3.768 2.808-2.092 5.732-5.083 7.705-9.047 1.447-2.906 2.373-6.318 2.373-10.241 0-.171-.004-.341-.011-.51v-.003l-.001-.016c-.271-5.89-5.054-10.622-10.967-10.622A10.83 10.83 0 0020 5.247a10.83 10.83 0 00-6.77-2.372zM7.308 22.93c-1.25-2.51-2.056-5.46-2.059-8.887l.01-.424c.208-4.336 3.72-7.744 7.97-7.744 2.223 0 4.237.928 5.69 2.437L20 9.435l1.08-1.123a7.87 7.87 0 015.69-2.437c4.25 0 7.762 3.408 7.97 7.744l.01.424c-.003 3.427-.81 6.377-2.059 8.887-1.716 3.448-4.287 6.097-6.812 7.978-2.324 1.732-4.533 2.757-5.879 3.162-1.346-.405-3.555-1.43-5.88-3.162-2.524-1.881-5.095-4.53-6.811-7.978zm21.877-8.744a1.5 1.5 0 00-2.122-2.122l-8.798 8.799-3.332-4.284a1.5 1.5 0 00-2.368 1.842l4.375 5.625a1.5 1.5 0 002.245.14l10-10z" clip-rule="evenodd"/>
                            <defs>
                              <linearGradient id="paint0_linear" x1="28.058" x2="4.624" y1="2.375" y2="45.001" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#6CB909"/>
                                <stop offset="1" stop-color="#055A5B"/>
                              </linearGradient>
                            </defs>
                          </svg>
                    </div>
                    <p class="text-heal text-2xl font-bold mb-2">145.466</p>
                    <p class="text-heal text-xl font-semibold">Sembuh</p>
                </div>
                <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-death">
                    <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-death">
                        <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                            <path fill="#E74C3C" d="M27.5 20.625a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM15 23.125a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/>
                            <path fill="#E74C3C" fill-rule="evenodd" d="M4.375 17.5C4.375 8.87 11.371 1.875 20 1.875c8.63 0 15.625 6.996 15.625 15.625 0 4.242-1.692 8.09-4.434 10.905-.172 2.315-.465 4.779-1.972 6.635-1.677 2.066-4.563 3.085-9.219 3.085s-7.542-1.019-9.219-3.085c-1.507-1.856-1.8-4.32-1.972-6.635A15.578 15.578 0 014.375 17.5zM20 4.375c-7.249 0-13.125 5.876-13.125 13.125 0 3.71 1.538 7.06 4.016 9.45l.346.333.033.48c.18 2.593.421 4.432 1.452 5.702.554.682 1.427 1.294 2.903 1.691v-4.531h2.5v4.932c.57.044 1.192.068 1.875.068s1.306-.024 1.875-.068v-4.932h2.5v4.531c1.476-.397 2.349-1.008 2.903-1.691 1.03-1.27 1.271-3.109 1.452-5.703l.033-.48.346-.333a13.083 13.083 0 004.016-9.449c0-7.249-5.876-13.125-13.125-13.125z" clip-rule="evenodd"/>
                          </svg>
                    </div>
                    <p class="text-death text-2xl font-bold mb-2">1.711.565</p>
                    <p class="text-death text-xl font-semibold">Meninggal</p>
                </div>
            </div>
        </section>
        
        <!-- News Update -->
        <section class="container">
            <h2 class="header-title">
                Berita Terbaru
            </h2>
            <p class="header-subtitle">Berikut berita terkait BBPP Batangkaluku yang dapat Anda akses</p>
            <div class="grid grid-cols-3 gap-10">
                @for($i=1; $i <= 6; $i++)
                <div class="rounded-sm">
                    <img class="rounded-sm w-full h-auto" src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                    <p class="text-secondary font-semibold text-xs mt-5 mb-1">Artikel Umum</p>
                    <h3 class="font-semibold text-xl mb-3">Harapan Mentan SYL Kepada Ribuan Penyuluh Pertanian</h3>
                    <p class="mb-3 font-normal text-sm text-darkGrey">RURAL Empowerment and Agricultural Development Scaling-up Initiative atau REA...</p>
                    <p class="mb-3 font-normal text-xs text-darkLight">06 April 2021</p>
                </div>
                @endfor
            </div>
        </section>
    
        <!-- Zona Integrasi -->
        <section class="container px-20">
            <h2 class="header-title">
                Zona Integrasi
            </h2>
            <p class="header-subtitle">Menolak Suap, Pungli dan Gratifikasi</p>
            <div class="grid grid-cols-2 gap-10">
                <div class="space-y-5 items-center flex flex-col justify-center">
                    <div class="flex justify-between items-center p-4 border rounded-md w-full">
                        <div class="space-x-5 flex">
                            <img src="{{asset('assets/img/integrasi/wbs.png')}}" alt="">
                            <div class="flex flex-col justify-center gap-1">
                                <h3 class="font-semibold text-xl">WBS</h3>
                                <p class="text-sm text-darkGrey">Whistleblower's System</p>
                            </div>
                        </div>
                        <span class="material-icons-outlined">chevron_right</span>
                    </div>
                    <div class="flex justify-between items-center p-4 border rounded-md w-full">
                        <div class="space-x-5 flex">
                            <img src="{{asset('assets/img/integrasi/wbk.png')}}" alt="">
                            <div class="flex flex-col justify-center gap-1">
                                <h3 class="font-semibold text-xl">WBK</h3>
                                <p class="text-sm text-darkGrey">Wilayah Bebas dari Korupsi</p>
                            </div>
                        </div>
                        <span class="material-icons-outlined">chevron_right</span>
                    </div>
                    <div class="flex justify-between items-center p-4 border rounded-md w-full">
                        <div class="space-x-5 flex">
                            <img src="{{asset('assets/img/integrasi/upg.png')}}" alt="">
                            <div class="flex flex-col justify-center gap-1">
                                <h3 class="font-semibold text-xl">UPG</h3>
                                <p class="text-sm text-darkGrey">Unit Pengelolah Gratifikasi</p>
                            </div>
                        </div>
                        <span class="material-icons-outlined">chevron_right</span>
                    </div>
                    <div class="flex justify-between items-center p-4 border rounded-md w-full">
                        <div class="space-x-5 flex">
                            <img src="{{asset('assets/img/integrasi/spi.png')}}" alt="">
                            <div class="flex flex-col justify-center gap-1">
                                <h3 class="font-semibold text-xl">SPI</h3>
                                <p class="text-sm text-darkGrey">Sistem Pengendali Intern</p>
                            </div>
                        </div>
                        <span class="material-icons-outlined">chevron_right</span>
                    </div>
    
                </div>
                <div class="items-center">
                    <img src="{{asset('assets/img/integrasi/integrasi.png')}}" alt="" srcset="">
                </div>
            </div>
        </section>
    
        <!-- Artikel Pertanian -->
        <section class="container">
            <h2 class="header-title">
                Artikel Pertanian
            </h2>
            <p class="header-subtitle">Baca artikel tentang pertanian disini</p>
            <div class="grid grid-cols-2 gap-10">
                @for($i=1; $i <= 4; $i++)
                <div class="rounded-sm grid grid-cols-3 gap-5">
                    <img class="rounded-sm w-full h-auto" src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                    <div class="col-span-2 flex flex-col justify-between">
                        <h3 class="font-semibold text-xl col-span-2">Pengolahan Buah Naga untuk Cemilan Keluarga</h3>
                        <p class="font-normal text-sm text-darkGrey col-span-2">RURAL Empowerment and Agricultural Development Scaling-up Initiative atau REA...</p>
                        <a class="text-secondary font-semibold text-xs">Artikel Umum</a>
                    </div>
                </div>
                @endfor
            </div>
        </section>

        <section class="container">
            <h2 class="header-title">
                Info dklat
            </h2>
            <div class="swiper-container diklat">
                <div class="swiper-wrapper">
                @for($i=1; $i <= 6; $i++)
                <div class="swiper-slide">
                    <div class="rounded-sm">
                        <img class="rounded-sm w-full h-auto" src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                        <p class="text-secondary font-semibold text-xs mt-5 mb-1">Artikel Umum</p>
                        <h3 class="font-semibold text-xl mb-3">Harapan Mentan SYL Kepada Ribuan Penyuluh Pertanian</h3>
                        <p class="mb-3 font-normal text-sm text-darkGrey">RURAL Empowerment and Agricultural Development Scaling-up Initiative atau REA...</p>
                        <p class="mb-3 font-normal text-xs text-darkLight">06 April 2021</p>
                    </div>
                </div>
                @endfor

            </div>
            <div class="swiper-pagination"></div>
            </div>
        </section>


        <section class="container mb-20">
            <div class="grid grid-cols-3">
                <div class="max-h-96 overflow-y-auto">
                    <a class="twitter-timeline" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="max-h-96 overflow-y-auto">
                    <script src="https://apis.google.com/js/platform.js"></script>
                    <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
                </div>
                
                <div class="max-h-96 overflow-y-auto">
                    <iframe src="https://www.youtube.com/embed/?listType=user_uploads&list=PLC77007E23FF423C6" class="h-96" ></iframe>
                </div>

            </div>
        </section>
@endsection

@push('add-script')

<script>
    
    let apikey = "084a2d4cc7b7bcad0eca16b89d961937";
    
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
        nextEl: "",
        prevEl: "",
        },
    });


    var swiper = new Swiper(".diklat", {
        slidesPerView: 3,
        spaceBetween: 50,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
      });
</script>
@endpush