@extends('app')

@section('main')
    <section class="container">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                @foreach ($slider AS $row)
                    <div class="swiper-slide">
                        <img src="{{asset('storage/'.$row->image)}}" alt="">
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="header-title">
            Update Covid-19 Indonesia
        </h2>
        <p class="header-subtitle">{{__('general.last_update')}} {{now()->format('Y-m-d H:i:s')}}</p>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-confirmed">
                <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-confirmed">
                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                        <path fill="#32A7E2"
                              d="M31.993 29.242a1.5 1.5 0 00-2.122 2.121l2.122-2.12zm-.74-3.339a4.72 4.72 0 01-4.717 4.722v3a7.72 7.72 0 007.717-7.722h-3zm-4.717 4.722a4.72 4.72 0 01-4.717-4.722h-3a7.72 7.72 0 007.717 7.722v-3zm-4.717-4.722a4.72 4.72 0 014.717-4.722v-3a7.72 7.72 0 00-7.717 7.722h3zm4.717-4.722a4.72 4.72 0 014.717 4.722h3a7.72 7.72 0 00-7.717-7.722v3zm3.335 10.182l5.318 5.322 2.122-2.12-5.318-5.322-2.122 2.12zM3.76 13.566l-1.498-.069v.017l-.001.018 1.5.034zM20 7.272l-1.08 1.04L20 9.435l1.08-1.123L20 7.272zm16.24 6.294l1.499-.034v-.018l-.001-.017-1.499.07zm.01.46h1.5v-.035l-1.5.035zM5.966 23.599l1.343-.669-1.343.669zm7.263-20.724c-5.913 0-10.696 4.732-10.967 10.622l2.997.138c.2-4.343 3.715-7.76 7.97-7.76v-3zm7.852 3.356c-1.989-2.066-4.771-3.356-7.852-3.356v3c2.224 0 4.238.928 5.69 2.437l2.162-2.08zm5.69-3.356c-3.081 0-5.863 1.29-7.852 3.356l2.162 2.08a7.87 7.87 0 015.69-2.436v-3zm10.967 10.622c-.271-5.89-5.054-10.622-10.967-10.622v3c4.255 0 7.77 3.417 7.97 7.76l2.997-.138zm.012.494l-.011-.46-3 .07.011.46 3-.07zM2.26 13.513c-.007.17-.011.34-.011.513h3c0-.127.003-.254.008-.38l-2.997-.133zm0 .019l-.01.46 2.999.068.01-.46-2.999-.068zm-.011.494c0 3.923.926 7.335 2.373 10.241L7.31 22.93c-1.252-2.514-2.059-5.47-2.059-8.904h-3zm2.373 10.241c1.973 3.964 4.897 6.955 7.705 9.047 2.79 2.078 5.556 3.336 7.315 3.768l.714-2.914c-1.287-.316-3.693-1.365-6.236-3.26-2.526-1.881-5.096-4.53-6.812-7.978l-2.686 1.337zm32.25-3.856c.558-1.956.877-4.084.877-6.385h-3c0 2.02-.28 3.872-.762 5.563l2.885.822z"/>
                        <path stroke="#32A7E2" stroke-width="3" d="M15.313 9.375a6.563 6.563 0 00-6.556 6.25"/>
                    </svg>
                </div>
                <p class="text-confirmed text-2xl font-bold mb-2" id="jumlah-positif">0</p>
                <p class="text-confirmed text-xl font-semibold">{{__('general.confirmed')}}</p>
            </div>
            <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-injury">
                <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-injury">
                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                        <path fill="#FF8700" fill-rule="evenodd"
                              d="M13.23 2.875c-5.914 0-10.697 4.732-10.968 10.622V13.515c-.008.17-.012.34-.012.51l3 .035.01-.441c.208-4.336 3.72-7.744 7.97-7.744 2.223 0 4.237.928 5.69 2.437L20 9.435l1.08-1.123a7.87 7.87 0 015.69-2.437c4.25 0 7.762 3.408 7.97 7.744l.01.441 3-.069-.011-.46v-.017l-.001-.017c-.271-5.89-5.054-10.622-10.967-10.622A10.83 10.83 0 0020 5.247a10.83 10.83 0 00-6.77-2.372zM4.622 24.267c1.973 3.964 4.897 6.955 7.705 9.047 2.79 2.078 5.556 3.336 7.315 3.768l.357.087.357-.087c1.76-.432 4.526-1.69 7.315-3.768 2.808-2.092 5.732-5.083 7.705-9.047L32.69 22.93c-1.716 3.448-4.287 6.097-6.812 7.978-2.324 1.732-4.533 2.757-5.879 3.162-1.346-.405-3.555-1.43-5.88-3.162-2.524-1.881-5.095-4.53-6.811-7.978l-2.686 1.337zM15.237 11.68a1.5 1.5 0 00-2.808-.515l-3.325 6.181H3.75a1.5 1.5 0 000 3H10a1.5 1.5 0 001.321-.79l1.548-2.877.956 7.268a1.5 1.5 0 002.812.507l2.604-4.904.013-.024.887 2.638a1.5 1.5 0 002.824.055l2.015-5.298.905 2.445a1.5 1.5 0 001.407.98h8.958a1.5 1.5 0 000-3h-7.914l-1.93-5.216a1.5 1.5 0 00-2.808-.013l-1.948 5.122-.75-2.227a1.5 1.5 0 00-2.78-.155l-1.547 3.32-.385.727-.95-7.224z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="text-injury text-2xl font-bold mb-2" id="jumlah-dirawat">0</p>
                <p class="text-injury text-xl font-semibold">{{__('general.treated')}}</p>
            </div>
            <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-heal">
                <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-heal">
                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                        <path fill="url(#paint0_linear)" fill-rule="evenodd"
                              d="M13.23 2.875c-5.914 0-10.697 4.732-10.968 10.622V13.515c-.008.17-.012.34-.012.51 0 3.924.926 7.336 2.373 10.242 1.973 3.964 4.897 6.955 7.705 9.047 2.79 2.078 5.556 3.336 7.315 3.768l.357.087.357-.087c1.76-.432 4.526-1.69 7.315-3.768 2.808-2.092 5.732-5.083 7.705-9.047 1.447-2.906 2.373-6.318 2.373-10.241 0-.171-.004-.341-.011-.51v-.003l-.001-.016c-.271-5.89-5.054-10.622-10.967-10.622A10.83 10.83 0 0020 5.247a10.83 10.83 0 00-6.77-2.372zM7.308 22.93c-1.25-2.51-2.056-5.46-2.059-8.887l.01-.424c.208-4.336 3.72-7.744 7.97-7.744 2.223 0 4.237.928 5.69 2.437L20 9.435l1.08-1.123a7.87 7.87 0 015.69-2.437c4.25 0 7.762 3.408 7.97 7.744l.01.424c-.003 3.427-.81 6.377-2.059 8.887-1.716 3.448-4.287 6.097-6.812 7.978-2.324 1.732-4.533 2.757-5.879 3.162-1.346-.405-3.555-1.43-5.88-3.162-2.524-1.881-5.095-4.53-6.811-7.978zm21.877-8.744a1.5 1.5 0 00-2.122-2.122l-8.798 8.799-3.332-4.284a1.5 1.5 0 00-2.368 1.842l4.375 5.625a1.5 1.5 0 002.245.14l10-10z"
                              clip-rule="evenodd"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="28.058" x2="4.624" y1="2.375" y2="45.001"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#6CB909"/>
                                <stop offset="1" stop-color="#055A5B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <p class="text-heal text-2xl font-bold mb-2" id="jumlah-sembuh">0</p>
                <p class="text-heal text-xl font-semibold">{{__('general.healed')}}</p>
            </div>
            <div class="py-10 items-center rounded-lg flex flex-col justify-center bg-opacity-20 bg-death">
                <div class="p-3 rounded-xl bg-opacity-30 mb-5 bg-death">
                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                        <path fill="#E74C3C"
                              d="M27.5 20.625a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM15 23.125a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/>
                        <path fill="#E74C3C" fill-rule="evenodd"
                              d="M4.375 17.5C4.375 8.87 11.371 1.875 20 1.875c8.63 0 15.625 6.996 15.625 15.625 0 4.242-1.692 8.09-4.434 10.905-.172 2.315-.465 4.779-1.972 6.635-1.677 2.066-4.563 3.085-9.219 3.085s-7.542-1.019-9.219-3.085c-1.507-1.856-1.8-4.32-1.972-6.635A15.578 15.578 0 014.375 17.5zM20 4.375c-7.249 0-13.125 5.876-13.125 13.125 0 3.71 1.538 7.06 4.016 9.45l.346.333.033.48c.18 2.593.421 4.432 1.452 5.702.554.682 1.427 1.294 2.903 1.691v-4.531h2.5v4.932c.57.044 1.192.068 1.875.068s1.306-.024 1.875-.068v-4.932h2.5v4.531c1.476-.397 2.349-1.008 2.903-1.691 1.03-1.27 1.271-3.109 1.452-5.703l.033-.48.346-.333a13.083 13.083 0 004.016-9.449c0-7.249-5.876-13.125-13.125-13.125z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="text-death text-2xl font-bold mb-2" id="jumlah-meninggal">0</p>
                <p class="text-death text-xl font-semibold">{{__('general.death')}}</p>
            </div>
        </div>
    </section>

    <!-- News Update -->
    <section class="container">
        <h2 class="header-title">
            {{__('general.latest_news')}}
        </h2>
        <p class="header-subtitle">{{__('general.latest_news_desc')}}</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news AS $row)
                <div class="rounded-sm">
                    <a href="{{route('artikel.detail',['title' => $row->title_str, 'id' => $row->id,'type' => $row->type, 'lang' => $lang])}}">
                        <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$row->image)}}"
                             alt="{{$row->title}}">
                        <p class="text-secondary font-semibold text-xs mt-5 mb-1">{{__('general.artikel_'.$row->type)}}</p>
                        <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}</h3>
                        <p class="mb-3 font-normal text-sm text-darkGrey">{{$row->desc_str}}...</p>
                        <p class="mb-3 font-normal text-xs text-darkLight">{{tanggal($row->published_time)}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Zona Integrasi -->
    <section class="container px-20">
        <h2 class="header-title">
            {{__('general.integration_zone')}}
        </h2>
        <p class="header-subtitle">{{__('general.i_zone_desc')}}</p>
        <div class="grid lg:grid-cols-2 gap-10">
            <div class="space-y-5 items-center flex flex-col justify-center order-last lg:order-none">
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
            {{__('general.artikel_pertanian')}}
        </h2>
        <p class="header-subtitle">{{__('general.artikel_pertanian_desc')}}</p>
        <div class="grid lg:grid-cols-2 gap-6">
            @foreach ($news_pertanian AS $row)
                <div class="rounded-sm grid grid-cols-3 gap-5">
                    <a href="{{route('artikel.detail',['title' => $row->title_str, 'id' => $row->id,'type' => $row->type, 'lang' => $lang])}}">
                        <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$row->image)}}" alt="">
                        <div class="col-span-2 flex flex-col justify-between">
                            <h3 class="font-semibold text-xl col-span-2">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title}}</h3>
                            <p class="font-normal text-sm text-darkGrey col-span-2">{{$row->desc_str}}...</p>
                            <a class="text-secondary font-semibold text-xs">{{__('general.artikel_'.$row->type)}}</a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container">
        <h2 class="header-title">
            {{__('general.edu_info')}}
        </h2>
        <div class="swiper-container diklat">
            <div class="swiper-wrapper">
                @foreach($news_pelatihan AS $row)
                    <div class="swiper-slide">
                        <div class="rounded-sm">
                            <a href="{{route('artikel.detail',['title' => $row->title_str, 'id' => $row->id,'type' => $row->type, 'lang' => $lang])}}">
                                <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$row->image)}}" alt="">
                                <p class="text-secondary font-semibold text-xs mt-5 mb-1">{{__('general.artikel_'.$row->type)}}</p>
                                <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title}}</h3>
                                <p class="mb-3 font-normal text-sm text-darkGrey">{{$row->desc_str}}...</p>
                                <p class="mb-3 font-normal text-xs text-darkLight">{{tanggal($row->published_time)}}</p>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="container">
        <h2 class="header-title">
            {{__('general.weather_info')}}
        </h2>
        <div class="flex justify-center space-x-4">
            <div class="bg-secondary opacity-75 rounded-lg text-white px-7 py-6 space-y-2">
                <div class="flex justify-between space-x-4 mb-4 items-center">
                    <input id="weatCity" type="text"
                           class="w-full text-xs opacity-25 bg-black rounded-lg p-3 text-white placeholder-white"
                           placeholder="Gowa">
                    <button id="searchWeat">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
                <div class="flex jusify-center gap-6 items-center">
                    <div>
                        <h2 class="text-2xl font-bold city"></h2>
                        <h2 class="text-2xl font-bold suhu"> 0 C</h2>
                        <img class="" src="https://openweathermap.org/img/wn/02n@2x.png" alt="">
                    </div>
                    <div>
                        <h2 class="font-semibold text-md desc"></h2>
                        <h2 class="font-semibold text-md kelembapan">Kelembapan : <span>0</span> %</h2>
                        <h2 class="font-semibold text-md angin">Kecepatan Angin : <span>0</span> Km/jam</h2>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="container">
        <h2 class="header-title">
            {{__('general.e_service')}} BBPP Batangkaluku
        </h2>
        <div class="flex justify-center gap-6 flex-wrap">
            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)" fill="#BFBFBF">
                            <path
                                d="M73.36 5H6.64C5.233 5 4 6.232 4 7.64V71.72c0 1.408 1.232 2.64 2.64 2.64h66.72c1.408 0 2.64-1.232 2.64-2.64V7.64C76 6.232 74.944 5 73.36 5zm-2.641 64.078H9.28V24.012H70.72v45.066zm0-50.347H9.28v-8.45H70.72v8.45z"/>
                            <path
                                d="M30.23 35.279h32.039c1.408 0 2.64-1.233 2.64-2.64 0-1.41-1.232-2.641-2.64-2.641h-32.04c-1.407 0-2.64 1.232-2.64 2.64 0 1.409 1.233 2.64 2.64 2.64zM30.23 48.482h32.039c1.408 0 2.64-1.232 2.64-2.64 0-1.409-1.232-2.641-2.64-2.641h-32.04c-1.407 0-2.64 1.232-2.64 2.64 0 1.409 1.233 2.64 2.64 2.64zM30.23 61.509h22.18c1.41 0 2.641-1.233 2.641-2.64 0-1.41-1.232-2.642-2.64-2.642H30.23c-1.409 0-2.64 1.233-2.64 2.641s1.232 2.64 2.64 2.64zM17.379 61.509h2.464c1.409 0 2.641-1.233 2.641-2.64 0-1.41-1.232-2.642-2.64-2.642h-2.465c-1.408 0-2.64 1.233-2.64 2.641s1.056 2.64 2.64 2.64zM17.379 48.482h2.464c1.409 0 2.641-1.232 2.641-2.64 0-1.409-1.232-2.641-2.64-2.641h-2.465c-1.408 0-2.64 1.232-2.64 2.64 0 1.409 1.056 2.64 2.64 2.64zM17.379 35.279h2.464c1.409 0 2.641-1.233 2.641-2.64 0-1.41-1.232-2.641-2.64-2.641h-2.465c-1.408 0-2.64 1.232-2.64 2.64 0 1.409 1.056 2.64 2.64 2.64z"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <path fill="#fff" transform="translate(4 5)" d="M0 0h72v69.359H0z"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">PPID</h5>
                </div>
            </div>
            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M40.092 23.752c5.356 0 9.876-4.352 9.876-9.876C49.968 8.52 45.615 4 40.09 4c-5.523 0-9.708 4.52-9.708 10.044 0 5.356 4.352 9.708 9.709 9.708zm0-14.73c2.678 0 5.021 2.176 5.021 5.022 0 2.678-2.176 5.021-5.021 5.021-2.846 0-5.022-2.176-5.022-5.021 0-2.846 2.343-5.022 5.022-5.022zM52.813 24.59H27.37c-4.687 0-8.37 3.85-8.37 8.369v20.59c0 1.338 1.004 2.51 2.343 2.51h6.194v12.555c0 2.008.837 3.85 2.176 5.189 1.34 1.339 3.348 2.176 5.19 2.176 2.175 0 4.017-.837 5.356-2.344l.167.168c1.507 1.506 3.515 2.343 5.692 2.176 3.85-.168 7.03-3.515 7.03-7.7V54.385h5.691c1.34 0 2.344-1.004 2.344-2.343V33.126c0-4.687-3.85-8.537-8.37-8.537zm3.516 25.108h-3.18V38.65c0-1.339-1.005-2.343-2.344-2.343-1.34 0-2.344 1.004-2.344 2.343v29.796c0 1.507-1.172 2.846-2.51 2.846-1.005 0-1.675-.335-2.01-.837-.502-.502-.836-1.172-.836-1.841V53.716c0-1.34-1.005-2.344-2.344-2.344h-.67c-1.339 0-2.343 1.005-2.343 2.344v14.898a2.644 2.644 0 01-2.678 2.678c-.67 0-1.34-.335-1.842-.837-.67-.502-.837-1.172-.837-1.841V38.65c0-1.339-1.004-2.343-2.343-2.343-1.34 0-2.344 1.004-2.344 2.343v12.555h-3.85V32.959c0-2.009 1.674-3.683 3.683-3.683h25.276c2.01 0 3.683 1.674 3.683 3.683v16.74h-.167z"
                            fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">E-Personal</h5>
                </div>
            </div>
            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M39.673 39.564a11.733 11.733 0 0011.782-11.782A11.733 11.733 0 0039.672 16 11.733 11.733 0 0027.89 27.782c0 6.545 5.4 11.782 11.782 11.782zm0-18.655c3.763 0 6.872 3.11 6.872 6.873 0 3.764-3.109 6.872-6.872 6.872-3.764 0-6.873-3.109-6.873-6.872 0-3.764 3.11-6.873 6.873-6.873z"
                            fill="#BFBFBF"/>
                        <path
                            d="M64.873 45.127c3.109-1.309 5.236-4.254 5.236-7.69 0-4.582-3.763-8.346-8.345-8.346-4.582 0-8.346 3.764-8.346 8.345 0 3.437 2.127 6.382 5.236 7.691-1.472.328-2.945.982-4.254 1.636-3.764-3.6-9-5.89-14.564-5.89-5.563 0-10.636 2.127-14.4 5.727-1.309-.655-2.618-1.31-3.927-1.473 3.11-1.309 5.236-4.254 5.236-7.69 0-4.582-3.763-8.346-8.345-8.346-4.582 0-8.345 3.764-8.345 8.345 0 3.437 2.127 6.382 5.236 7.691C8.745 46.437 4 52.164 4 58.873c0 1.309 1.145 2.454 2.455 2.454h12.109v.818c0 1.31 1.145 2.455 2.454 2.455h37.636c1.31 0 2.455-1.145 2.455-2.455v-.818h12.6c1.31 0 2.455-1.145 2.455-2.454-.164-6.71-5.073-12.437-11.291-13.746zm-6.546-7.69c0-1.8 1.473-3.437 3.437-3.437 1.963 0 3.436 1.473 3.436 3.436 0 1.8-1.473 3.437-3.436 3.437-1.964 0-3.437-1.637-3.437-3.437zm-43.527 0c0-1.8 1.473-3.437 3.436-3.437 1.964 0 3.437 1.473 3.437 3.436 0 1.8-1.473 3.437-3.437 3.437-1.963 0-3.436-1.637-3.436-3.437zM9.236 56.417c1.146-3.927 4.746-6.873 9-6.873 1.31 0 2.619.328 3.764.819a25.499 25.499 0 00-2.782 6.054H9.236zm14.4 3.273c1.146-7.855 8.018-13.91 16.2-13.91 8.182 0 14.891 6.055 16.2 13.91h-32.4zm36.491-3.273c-.654-2.127-1.473-4.09-2.618-5.89 1.31-.655 2.618-.983 4.091-.983 4.255 0 7.854 2.946 9 6.873H60.127z"
                            fill="#BFBFBF"/>
                        <path
                            d="M47.036 55.927h-4.909c-1.309 0-2.454-1.145-2.454-2.454 0-1.31 1.145-2.455 2.454-2.455h4.91c1.309 0 2.454 1.145 2.454 2.455 0 1.309-1.145 2.454-2.455 2.454z"
                            fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">e-p4s</h5>
                </div>
            </div>

            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)" fill="#BFBFBF">
                            <path
                                d="M49.554 19.327c0-1.426-1.247-2.674-2.673-2.674H27.1c-1.426 0-2.673 1.248-2.673 2.674 0 1.425 1.247 2.673 2.673 2.673h19.782c1.426 0 2.673-1.248 2.673-2.673zM43.317 27.703h-18c-1.426 0-2.673 1.248-2.673 2.673 0 1.426 1.247 2.674 2.673 2.674h18c1.426 0 2.673-1.248 2.673-2.674 0-1.425-1.247-2.673-2.673-2.673z"/>
                            <path
                                d="M72.366 12.91c-1.425-.355-2.851.714-3.03 2.14L59 70.653H16.584c-1.782 0-3.564-.89-4.812-2.316-.713-.892-1.069-1.96-1.247-3.03h40.277c1.248 0 2.317-.891 2.673-2.139L64.168 7.03c.178-.713 0-1.604-.534-2.139C63.099 4.356 62.208 4 61.495 4h-42.95c-1.248 0-2.317.891-2.674 2.139L5.178 62.277c-.713 3.386.178 6.772 2.317 9.446C9.634 74.396 13.02 76 16.405 76H60.96c1.248 0 2.317-.891 2.674-2.139l10.693-57.92c.356-1.426-.535-2.852-1.96-3.03zM20.683 9.348H58.11l-9.624 50.792H11.06l9.624-50.792z"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <path fill="#fff" transform="translate(5 4)" d="M0 0h69.505v72H0z"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">e-Book</h5>
                </div>
            </div>
            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M52.346 59.038c-1.384 0-2.596 1.212-2.596 2.597v9.173H12.192V9.192H49.75v11.25c0 1.385 1.212 2.596 2.596 2.596 1.385 0 2.596-1.211 2.596-2.596V6.596C54.942 5.212 53.731 4 52.346 4H9.596C8.212 4 7 5.212 7 6.596v66.808C7 74.789 8.212 76 9.596 76h42.75c1.385 0 2.596-1.212 2.596-2.596v-11.77c0-1.384-1.211-2.596-2.596-2.596z"
                            fill="#BFBFBF"/>
                        <path
                            d="M73.808 19.577c-.173-.692-.52-1.212-1.212-1.558l-7.961-4.846c-1.212-.692-2.77-.346-3.635.866l-3.288 5.192-18 29.077c-.174.346-.347.692-.347 1.211L38.5 59.731c0 1.038.346 1.904 1.212 2.423.346.346.865.346 1.384.346.52 0 .866-.173 1.385-.346l8.827-5.192c.346-.174.692-.52.865-.866l21.462-34.269c.173-.865.346-1.558.173-2.25zm-9.52-.692l3.462 2.25-.52.865-3.46-2.25.518-.865zM48.02 52.635l-3.807 2.25.346-4.5L61 24.077l3.462 2.25-16.443 26.308zM45.596 26.673V16.29c0-1.385-1.211-2.597-2.596-2.597H18.942c-1.384 0-2.596 1.212-2.596 2.596v10.385c0 1.385 1.212 2.596 2.596 2.596H43c1.558 0 2.596-1.038 2.596-2.596zm-5.192-2.596H21.538v-5.192h18.866v5.192zM39.02 37.923c0-1.385-1.212-2.596-2.597-2.596H19.115c-1.384 0-2.596 1.211-2.596 2.596 0 1.384 1.212 2.596 2.596 2.596h17.308c1.385 0 2.596-1.038 2.596-2.596zM35.558 47.615c0-1.384-1.212-2.596-2.596-2.596H19.114c-1.384 0-2.596 1.212-2.596 2.596 0 1.385 1.212 2.596 2.596 2.596h13.847c1.384 0 2.596-1.211 2.596-2.596zM18.942 54.711c-1.384 0-2.596 1.212-2.596 2.597 0 1.384 1.212 2.596 2.596 2.596h10.385c1.385 0 2.596-1.212 2.596-2.596 0-1.385-1.211-2.597-2.596-2.597H18.942z"
                            fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">Monev Portal</h5>
                </div>
            </div>

            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M63.714 35.399c-1.464 0-2.744 1.263-2.744 2.706v32.482H10.487V16.632h36.4c1.462 0 2.743-1.263 2.743-2.707s-1.28-2.707-2.744-2.707H7.744C6.28 11.218 5 12.301 5 13.925v59.368C5 74.737 6.28 76 7.744 76h55.97c1.463 0 2.743-1.263 2.743-2.707V38.105c0-1.443-1.28-2.706-2.743-2.706z"
                            fill="#BFBFBF"/>
                        <path
                            d="M59.507 11.038c-1.098-.903-2.927-.722-3.841.36L27.132 44.783c-.366.36-.549.722-.549 1.263l-2.56 13.173c-.183 1.083.182 1.985.914 2.707.549.36 1.098.541 1.646.541.366 0 .732 0 1.098-.18l11.889-5.414c.366-.18.731-.36.914-.722l28.351-33.383c.549-.541.732-1.263.549-1.985 0-.722-.366-1.444-.915-1.805l-8.962-7.94zM37.009 52l-6.585 2.887 1.464-7.218 26.155-30.857 5.122 4.33L37.009 52zM74.14 12.662l-9.878-8.12c-1.097-.903-2.926-.722-3.84.36-.915 1.083-.732 2.888.365 3.79l9.877 8.12c.549.361 1.098.722 1.83.722.731 0 1.645-.36 2.194-.902a3.259 3.259 0 00-.549-3.97zM18.535 24.572c-1.463 0-2.743 1.263-2.743 2.707 0 1.443 1.28 2.706 2.743 2.706h12.987c1.463 0 2.743-1.263 2.743-2.706 0-1.444-1.28-2.707-2.743-2.707H18.535z"
                            fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">Agri-Learning</h5>
                </div>
            </div>

            <div class="pelayanan">
                <div class="pelayanan-content ">
                    <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M73.382 54.217L58.874 39.708c-3.762-3.761-9.673-3.761-13.434 0l-.717.717-5.015-5.195.717-.716c3.761-3.762 3.761-9.673 0-13.434L25.916 6.57c-3.762-3.761-9.672-3.761-13.434 0l-5.91 6.27c-3.762 3.76-3.762 9.672 0 13.433L21.08 40.783c3.761 3.761 9.672 3.761 13.434 0l1.612-1.612 5.194 5.194-1.612 1.612c-3.761 3.762-3.761 9.673 0 13.434L54.217 73.92c3.761 3.761 9.672 3.761 13.434 0l6.09-6.09c3.403-3.94 3.403-10.03-.359-13.613zm-43.167-28.48c-1.075-1.075-2.687-1.075-3.762 0-1.074 1.075-1.074 2.687 0 3.761l5.732 5.732-1.612 1.612c-1.612 1.612-4.12 1.612-5.732 0L10.333 22.334c-1.433-1.433-1.433-4.12.179-5.732l5.91-5.911c1.613-1.612 4.12-1.612 5.732 0l14.51 14.508c1.611 1.612 1.611 4.12 0 5.732l-.717.717-5.732-5.911zM69.62 63.71l-6.09 6.09c-1.612 1.612-4.12 1.612-5.732 0L43.291 55.291c-1.613-1.612-1.613-4.12 0-5.731l1.612-1.612 5.731 5.731c1.075 1.075 2.687 1.075 3.762 0 1.075-1.074 1.075-2.686 0-3.761l-5.732-5.732.716-.716c1.613-1.612 4.12-1.612 5.732 0l14.509 14.508c1.612 1.612 1.612 4.12 0 5.732z"
                            fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-xl font-semibold">Seirama</h5>
                </div>
            </div>


        </div>

    </section>
@endsection

@push('add-script')

    <script>
        let weather = {
            apikey: "084a2d4cc7b7bcad0eca16b89d961937",
            fetchWeather: function (city) {
                fetch(
                    "https://api.openweathermap.org/data/2.5/weather?q="
                    + city
                    + "&units=metric&lang={{$lang}}&appid="
                    + this.apikey
                )
                    .then((response) => response.json())
                    .then((data) => this.displayWeather(data));
            },
            displayWeather: function (data) {
                const {name} = data;
                const {icon, description} = data.weather[0];
                const {temp, humidity} = data.main;
                const {speed, deg} = data.wind;
                $(".suhu").html(temp + " °C");
                $(".kelembapan span").html(humidity);
                $(".angin span").html(speed);
                $(".desc").html(description);
                $(".city").html(data.name);
                console.log(data);
            }
        }

        $(document).ready(function () {
            weather.fetchWeather("gowa");
            $("#searchWeat").click(function () {
                if ($("#weatCity").val() !== "") {
                    weather.fetchWeather($("#weatCity").val());
                }
            })
        })

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
            slidesPerView: 1,
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
        $(document).ready(function () {
            $.get('{{route('ajax.covid')}}')
                .then(function (res) {
                    res.positif = parseInt(res.positif.replace(/,/g, ""))
                    res.sembuh = parseInt(res.sembuh.replace(/,/g, ""))
                    res.meninggal = parseInt(res.meninggal.replace(/,/g, ""))
                    res.dirawat = parseInt(res.dirawat.replace(/,/g, ""))
                    localStorage.setItem('covid', res);
                    showCovid(res)
                }, function () {
                    var covid = localStorage.getItem('covid');
                    showCovid(covid)
                })
        })

        function showCovid(res) {
            var positif = parseInt(res.positif);
            var sembuh = parseInt(res.sembuh);
            var meninggal = parseInt(res.meninggal);
            var dirawat = parseInt(res.dirawat);
            var total = positif + sembuh + meninggal + dirawat;
            $('#total-kasus').html(total.toLocaleString('id-ID'));
            $('#jumlah-positif').html(positif.toLocaleString('id-ID'));
            $('#jumlah-sembuh').html(sembuh.toLocaleString('id-ID'));
            $('#jumlah-meninggal').html(meninggal.toLocaleString('id-ID'));
            $('#jumlah-dirawat').html(dirawat.toLocaleString('id-ID'));
        }
    </script>
@endpush
