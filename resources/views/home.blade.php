@extends('app')

@section('main')
    <section class="container">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                @foreach ($slider AS $row)
                    <a href="#" class="swiper-slide">
                        <img src="{{asset('storage/'.$row->image)}}" alt="">
                    </a>
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
                <div class="bg-white rounded shadow-sm">
                    <img src="{{asset('storage/'.$row->image)}}" class="object-cover w-full h-64 rounded-md" alt="{{$row->title}}" />
                    <div class="space-y-3 py-3">
                        <p class="mb-3 text-xs font-semibold tracking-wide uppercase ">
                            <a href="#" class="text-secondary text-xs" aria-label="Category" title="{{$row->title}}">{{__('general.artikel_'.$row->type)}}</a>
                            <span class="text-gray-600"></span>
                        </p>
                        <a href="{{route('artikel.detail',['title' => $row->title_str, 'id' => $row->id,'type' => $row->type, 'lang' => $lang])}}" aria-label="Category" title="{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}" class="mb-5 text-lg font-semibold">
                            {{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}
                        </a>
                        <p class="mb-2 text-gray-700 text-sm font-light leading-relaxed">
                            {{$row->desc_str}} ...
                        </p>
                        <p class="text-xs text-darkLight">
                            {{tanggal($row->published_time)}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
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
                        <img class="rounded-sm w-auto h-full object-cover" src="{{asset('storage/'.$row->image)}}" alt="">
                        <div class="col-span-2 flex flex-col justify-between lg:space-y-3">
                            <h3 class="font-semibold text-base lg:text-xl col-span-2 mb-3">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title}}</h3>
                            <p class="font-normal text-sm text-darkGrey col-span-2 leading-relaxed line-clamp">{{$row->desc_str}}...</p>
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
                                <img class="rounded-sm w-auto h-full" src="{{asset('storage/'.$row->image)}}" alt="">
                                <p class="text-secondary font-semibold text-xs mt-5 mb-1">{{__('general.artikel_'.$row->type)}}</p>
                                <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title}}</h3>
                                <!-- <p class="mb-3 font-normal text-sm text-darkGrey">{{$row->desc_str}}...</p> -->
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
                        <h2 class="text-2xl font-bold suhu"> 25 C</h2>
                        <img class="" src="https://openweathermap.org/img/wn/02n@2x.png" alt="">
                    </div>
                    <div>
                        <h2 class="font-semibold text-md desc capitali"></h2>
                        <h2 class="font-semibold text-md kelembapan">Kelembapan : <span>6</span> %</h2>
                        <h2 class="font-semibold text-md angin">Kecepatan Angin : <span>6</span> Km/jam</h2>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="container">
        <h2 class="header-title">
            {{__('general.e_service')}} BBPP Batangkaluku
        </h2>

        <div class="grid grid-cols-4 lg:grid-cols-8 gap-5 justify-items-center lg:px-36">
            
            <a href="http://bbpp-batangkaluku-ppid.pertanian.go.id/" target="_blank" class="py-10 w-full border border-border rounded-sm col-span-2 flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M73.3594 5H6.64059C5.23227 5 4 6.23227 4 7.64059V71.7188C4 73.1271 5.23227 74.3594 6.64059 74.3594H73.3594C74.7677 74.3594 76 73.1271 76 71.7188V7.64059C76 6.23227 74.9438 5 73.3594 5ZM70.7188 69.0782H9.28117V24.0122H70.7188V69.0782ZM70.7188 18.7311H9.28117V10.2812H70.7188V18.7311Z" fill="#BFBFBF"/>
                        <path d="M30.2298 35.2787H62.2689C63.6772 35.2787 64.9095 34.0464 64.9095 32.6381C64.9095 31.2298 63.6772 29.9975 62.2689 29.9975H30.2298C28.8215 29.9975 27.5892 31.2298 27.5892 32.6381C27.5892 34.0464 28.8215 35.2787 30.2298 35.2787Z" fill="#BFBFBF"/>
                        <path d="M30.2298 48.4816H62.2689C63.6772 48.4816 64.9095 47.2493 64.9095 45.841C64.9095 44.4327 63.6772 43.2004 62.2689 43.2004H30.2298C28.8215 43.2004 27.5892 44.4327 27.5892 45.841C27.5892 47.2493 28.8215 48.4816 30.2298 48.4816Z" fill="#BFBFBF"/>
                        <path d="M30.2298 61.5086H52.4107C53.8191 61.5086 55.0513 60.2763 55.0513 58.868C55.0513 57.4597 53.8191 56.2274 52.4107 56.2274H30.2298C28.8215 56.2274 27.5892 57.4597 27.5892 58.868C27.5892 60.2763 28.8215 61.5086 30.2298 61.5086Z" fill="#BFBFBF"/>
                        <path d="M17.3789 61.5086H19.8435C21.2518 61.5086 22.4841 60.2763 22.4841 58.868C22.4841 57.4597 21.2518 56.2274 19.8435 56.2274H17.3789C15.9706 56.2274 14.7383 57.4597 14.7383 58.868C14.7383 60.2763 15.7946 61.5086 17.3789 61.5086Z" fill="#BFBFBF"/>
                        <path d="M17.3789 48.4816H19.8435C21.2518 48.4816 22.4841 47.2493 22.4841 45.841C22.4841 44.4327 21.2518 43.2004 19.8435 43.2004H17.3789C15.9706 43.2004 14.7383 44.4327 14.7383 45.841C14.7383 47.2493 15.7946 48.4816 17.3789 48.4816Z" fill="#BFBFBF"/>
                        <path d="M17.3789 35.2787H19.8435C21.2518 35.2787 22.4841 34.0464 22.4841 32.6381C22.4841 31.2298 21.2518 29.9975 19.8435 29.9975H17.3789C15.9706 29.9975 14.7383 31.2298 14.7383 32.6381C14.7383 34.0464 15.7946 35.2787 17.3789 35.2787Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">PPID</h5>
                </div>
            </a>
            <a href="https://epersonal.pertanian.go.id/login/" target="_blank" class="py-10 w-full border border-border rounded-sm col-span-2 flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.0915 23.7523C45.448 23.7523 49.9676 19.4001 49.9676 13.8762C49.9676 8.51961 45.6154 4 40.0915 4C34.5675 4 30.3827 8.51961 30.3827 14.0436C30.3827 19.4001 34.7349 23.7523 40.0915 23.7523ZM40.0915 9.02178C42.7698 9.02178 45.1133 11.1979 45.1133 14.0436C45.1133 16.7219 42.9371 19.0653 40.0915 19.0653C37.2458 19.0653 35.0697 16.8892 35.0697 14.0436C35.0697 11.1979 37.4132 9.02178 40.0915 9.02178Z" fill="#BFBFBF"/>
                        <path d="M52.8133 24.5893H27.3696C22.6826 24.5893 19 28.4393 19 32.9589V53.5482C19 54.8874 20.0044 56.0591 21.3435 56.0591H27.537V68.6136C27.537 70.6223 28.374 72.4636 29.7131 73.8028C31.0523 75.1419 33.061 75.9789 34.9023 75.9789C37.0784 75.9789 38.9197 75.1419 40.2589 73.6354C40.2589 73.6354 40.2589 73.6354 40.4263 73.8028C41.9328 75.3093 43.9415 76.1463 46.1176 75.9789C49.9677 75.8115 53.1481 72.4636 53.1481 68.2788V54.3852H58.8395C60.1786 54.3852 61.183 53.3809 61.183 52.0417V33.1263C61.183 28.4393 57.3329 24.5893 52.8133 24.5893ZM56.3286 49.6982H53.1481V38.6503C53.1481 37.3111 52.1438 36.3068 50.8046 36.3068C49.4655 36.3068 48.4611 37.3111 48.4611 38.6503V52.0417V68.4462C48.4611 69.9527 47.2894 71.2919 45.9502 71.2919C44.9459 71.2919 44.2763 70.9571 43.9415 70.4549C43.4393 69.9527 43.1046 69.2832 43.1046 68.6136V53.7156C43.1046 52.3765 42.1002 51.3721 40.7611 51.3721H40.0915C38.7523 51.3721 37.748 52.3765 37.748 53.7156V68.6136C37.748 70.1201 36.5762 71.2919 35.0697 71.2919C34.4001 71.2919 33.7306 70.9571 33.2284 70.4549C32.5588 69.9527 32.3914 69.2832 32.3914 68.6136V53.7156V38.6503C32.3914 37.3111 31.3871 36.3068 30.0479 36.3068C28.7088 36.3068 27.7044 37.3111 27.7044 38.6503V51.2047H23.8544V32.9589C23.8544 30.9502 25.5283 29.2763 27.537 29.2763H52.8133C54.8221 29.2763 56.496 30.9502 56.496 32.9589V49.6982H56.3286Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">E-Personal</h5>
                </div>
            </a>
            

            <a href="#" onClick="alert('Sementara tidak dapat diakses')" class="py-10 w-full border border-border rounded-sm col-span-2 flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.6727 39.5636C46.2181 39.5636 51.4545 34.3273 51.4545 27.7818C51.4545 21.2364 46.2181 16 39.6727 16C33.1272 16 27.8909 21.2364 27.8909 27.7818C27.8909 34.3273 33.2909 39.5636 39.6727 39.5636ZM39.6727 20.9091C43.4363 20.9091 46.5454 24.0182 46.5454 27.7818C46.5454 31.5455 43.4363 34.6545 39.6727 34.6545C35.909 34.6545 32.8 31.5455 32.8 27.7818C32.8 24.0182 35.909 20.9091 39.6727 20.9091Z" fill="#BFBFBF"/>
                        <path d="M64.8727 45.1273C67.9818 43.8182 70.1091 40.8727 70.1091 37.4364C70.1091 32.8545 66.3455 29.0909 61.7636 29.0909C57.1818 29.0909 53.4182 32.8545 53.4182 37.4364C53.4182 40.8727 55.5455 43.8182 58.6545 45.1273C57.1818 45.4545 55.7091 46.1091 54.4 46.7636C50.6364 43.1636 45.4 40.8727 39.8364 40.8727C34.2727 40.8727 29.2 43 25.4364 46.6C24.1273 45.9455 22.8182 45.2909 21.5091 45.1273C24.6182 43.8182 26.7455 40.8727 26.7455 37.4364C26.7455 32.8545 22.9818 29.0909 18.4 29.0909C13.8182 29.0909 10.0545 32.8545 10.0545 37.4364C10.0545 40.8727 12.1818 43.8182 15.2909 45.1273C8.74545 46.4364 4 52.1636 4 58.8727C4 60.1818 5.14545 61.3273 6.45455 61.3273H18.5636C18.5636 61.6546 18.5636 61.8182 18.5636 62.1455C18.5636 63.4546 19.7091 64.6 21.0182 64.6H58.6545C59.9636 64.6 61.1091 63.4546 61.1091 62.1455C61.1091 61.8182 61.1091 61.6546 61.1091 61.3273H73.7091C75.0182 61.3273 76.1636 60.1818 76.1636 58.8727C76 52.1636 71.0909 46.4364 64.8727 45.1273ZM58.3273 37.4364C58.3273 35.6364 59.8 34 61.7636 34C63.7273 34 65.2 35.4727 65.2 37.4364C65.2 39.2364 63.7273 40.8727 61.7636 40.8727C59.8 40.8727 58.3273 39.2364 58.3273 37.4364ZM14.8 37.4364C14.8 35.6364 16.2727 34 18.2364 34C20.2 34 21.6727 35.4727 21.6727 37.4364C21.6727 39.2364 20.2 40.8727 18.2364 40.8727C16.2727 40.8727 14.8 39.2364 14.8 37.4364ZM9.23636 56.4182C10.3818 52.4909 13.9818 49.5455 18.2364 49.5455C19.5455 49.5455 20.8545 49.8727 22 50.3636C20.8545 52.1636 19.8727 54.2909 19.2182 56.4182H9.23636ZM23.6364 59.6909C24.7818 51.8364 31.6545 45.7818 39.8364 45.7818C48.0182 45.7818 54.7273 51.8364 56.0364 59.6909H23.6364ZM60.1273 56.4182C59.4727 54.2909 58.6545 52.3273 57.5091 50.5273C58.8182 49.8727 60.1273 49.5455 61.6 49.5455C65.8545 49.5455 69.4545 52.4909 70.6 56.4182H60.1273V56.4182Z" fill="#BFBFBF"/>
                        <path d="M47.0364 55.9273H42.1273C40.8182 55.9273 39.6727 54.7818 39.6727 53.4727C39.6727 52.1636 40.8182 51.0182 42.1273 51.0182H47.0364C48.3455 51.0182 49.4909 52.1636 49.4909 53.4727C49.4909 54.7818 48.3455 55.9273 47.0364 55.9273Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">e-p4s</h5>
                </div>
            </a>
            

            <a href="http://lib.bppsdmp.pertanian.go.id/kaluku/" target="_blank" class="py-10 w-full border border-border rounded-sm col-span-2 flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.5544 19.3267C49.5544 17.901 48.3069 16.6535 46.8812 16.6535H27.099C25.6732 16.6535 24.4257 17.901 24.4257 19.3267C24.4257 20.7525 25.6732 22 27.099 22H46.8812C48.3069 22 49.5544 20.7525 49.5544 19.3267Z" fill="#BFBFBF"/>
                        <path d="M43.3168 27.703H25.3168C23.8911 27.703 22.6436 28.9505 22.6436 30.3762C22.6436 31.802 23.8911 33.0495 25.3168 33.0495H43.3168C44.7426 33.0495 45.9901 31.802 45.9901 30.3762C45.9901 28.9505 44.7426 27.703 43.3168 27.703Z" fill="#BFBFBF"/>
                        <path d="M72.3663 12.9109C70.9406 12.5545 69.5148 13.6238 69.3366 15.0495L59 70.6535H16.5842C14.802 70.6535 13.0198 69.7624 11.7723 68.3366C11.0594 67.4455 10.703 66.3762 10.5247 65.3069H50.802C52.0495 65.3069 53.1188 64.4158 53.4752 63.1683L64.1683 7.0297C64.3465 6.31683 64.1683 5.42574 63.6337 4.89109C63.099 4.35644 62.2079 4 61.495 4H18.5445C17.297 4 16.2277 4.89109 15.8713 6.13861L5.17821 62.2772C4.46534 65.6634 5.35643 69.0495 7.49504 71.7228C9.63366 74.396 13.0198 76 16.4059 76H60.9604C62.2079 76 63.2772 75.1089 63.6337 73.8614L74.3267 15.9406C74.6832 14.5149 73.7921 13.0891 72.3663 12.9109ZM20.6832 9.34653H58.1089L48.4851 60.1386H11.0594L20.6832 9.34653Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">e-Book</h5>
                </div>
            </a>

            <a href="http://www.evalap-bbppbatangkaluku.com/FormLogin" target="_blank" class="py-10 w-full border border-border rounded-sm col-span-2 lg:col-start-2 flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M52.3462 59.0385C50.9615 59.0385 49.75 60.25 49.75 61.6346V70.8077H12.1923V9.19231H49.75V20.4423C49.75 21.8269 50.9615 23.0385 52.3462 23.0385C53.7308 23.0385 54.9423 21.8269 54.9423 20.4423V6.59615C54.9423 5.21154 53.7308 4 52.3462 4H9.59615C8.21154 4 7 5.21154 7 6.59615V73.4038C7 74.7885 8.21154 76 9.59615 76H52.3462C53.7308 76 54.9423 74.7885 54.9423 73.4038V61.6346C54.9423 60.25 53.7308 59.0385 52.3462 59.0385Z" fill="#BFBFBF"/>
                        <path d="M73.8077 19.5769C73.6346 18.8846 73.2885 18.3654 72.5962 18.0192L64.6346 13.1731C63.4231 12.4808 61.8654 12.8269 61 14.0385L57.7115 19.2308L39.7115 48.3077C39.5385 48.6538 39.3654 49 39.3654 49.5192L38.5 59.7308C38.5 60.7692 38.8462 61.6346 39.7115 62.1538C40.0577 62.5 40.5769 62.5 41.0962 62.5C41.6154 62.5 41.9615 62.3269 42.4808 62.1538L51.3077 56.9615C51.6538 56.7885 52 56.4423 52.1731 56.0961L73.6346 21.8269C73.8077 20.9615 73.9808 20.2692 73.8077 19.5769ZM64.2885 18.8846L67.75 21.1346L67.2308 22L63.7692 19.75L64.2885 18.8846ZM48.0192 52.6346L44.2115 54.8846L44.5577 50.3846L61 24.0769L64.4615 26.3269L48.0192 52.6346Z" fill="#BFBFBF"/>
                        <path d="M45.5962 26.673V16.2884C45.5962 14.9038 44.3847 13.6923 43 13.6923H18.9423C17.5577 13.6923 16.3462 14.9038 16.3462 16.2884V26.673C16.3462 28.0576 17.5577 29.2692 18.9423 29.2692H43C44.5577 29.2692 45.5962 28.2307 45.5962 26.673ZM40.4039 24.0769H21.5385V18.8846H40.4039V24.0769Z" fill="#BFBFBF"/>
                        <path d="M39.0193 37.923C39.0193 36.5384 37.8077 35.3269 36.4231 35.3269H19.1154C17.7308 35.3269 16.5193 36.5384 16.5193 37.923C16.5193 39.3076 17.7308 40.5192 19.1154 40.5192H36.4231C37.8077 40.5192 39.0193 39.4807 39.0193 37.923Z" fill="#BFBFBF"/>
                        <path d="M35.5577 47.6154C35.5577 46.2308 34.3462 45.0193 32.9616 45.0193H19.1154C17.7308 45.0193 16.5193 46.2308 16.5193 47.6154C16.5193 49 17.7308 50.2116 19.1154 50.2116H32.9616C34.3462 50.2116 35.5577 49 35.5577 47.6154Z" fill="#BFBFBF"/>
                        <path d="M18.9423 54.7115C17.5577 54.7115 16.3462 55.9231 16.3462 57.3077C16.3462 58.6923 17.5577 59.9038 18.9423 59.9038H29.327C30.7116 59.9038 31.9231 58.6923 31.9231 57.3077C31.9231 55.9231 30.7116 54.7115 29.327 54.7115H18.9423Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">Monev Portal</h5>
                </div>
            </a>

            <a href="https://batangkalukuagrilearning.com/" target="_blank" class="py-10 w-full border border-border rounded-sm col-span-2 flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.7137 35.3985C62.2504 35.3985 60.9701 36.6617 60.9701 38.1053V70.5865H10.4873V16.6316H46.8861C48.3494 16.6316 49.6297 15.3684 49.6297 13.9248C49.6297 12.4812 48.3494 11.218 46.8861 11.218H7.74363C6.28036 11.218 5 12.3008 5 13.9248V73.2932C5 74.7368 6.28036 76 7.74363 76H63.7137C65.177 76 66.4573 74.7368 66.4573 73.2932V38.1053C66.4573 36.6617 65.177 35.3985 63.7137 35.3985Z" fill="#BFBFBF"/>
                        <path d="M59.5067 11.0376C58.4093 10.1353 56.5802 10.3158 55.6657 11.3985L27.1319 44.7819C26.7661 45.1428 26.5832 45.5037 26.5832 46.0451L24.0224 59.218C23.8395 60.3007 24.2054 61.203 24.937 61.9248C25.4857 62.2857 26.0344 62.4661 26.5832 62.4661C26.949 62.4661 27.3148 62.4661 27.6806 62.2857L39.5697 56.8721C39.9355 56.6917 40.3013 56.5112 40.4842 56.1503L68.8351 22.7669C69.3838 22.2255 69.5667 21.5037 69.3838 20.7819C69.3838 20.0601 69.018 19.3383 68.4693 18.9774L59.5067 11.0376ZM37.009 52L30.4242 54.8872L31.8875 47.6691L58.0435 16.812L63.1649 21.1428L37.009 52Z" fill="#BFBFBF"/>
                        <path d="M74.1395 12.6616L64.2625 4.54135C63.165 3.63909 61.3359 3.81954 60.4214 4.90225C59.5068 5.98496 59.6897 7.78947 60.7872 8.69172L70.6643 16.812C71.213 17.1729 71.7617 17.5338 72.4934 17.5338C73.225 17.5338 74.1395 17.1729 74.6883 16.6316C75.4199 15.3684 75.237 13.7444 74.1395 12.6616Z" fill="#BFBFBF"/>
                        <path d="M18.5353 24.5714C17.072 24.5714 15.7916 25.8346 15.7916 27.2782C15.7916 28.7218 17.072 29.985 18.5353 29.985H31.5218C32.985 29.985 34.2654 28.7218 34.2654 27.2782C34.2654 25.8346 32.985 24.5714 31.5218 24.5714H18.5353Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">Agri-Learning</h5>
                </div>
            </a>

            <a href="https://seiramabatangkaluku.com/" target="_blank" class="py-10 w-full border border-border rounded-sm col-span-2 col-start-2 lg:col-start-auto flex justify-center">
                <div class="flex flex-col justify-center justify-items-center items-center">
                    <svg class="w-10 lg:w-20" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M73.3824 54.2168L58.8738 39.7082C55.1123 35.9467 49.2014 35.9467 45.4399 39.7082L44.7234 40.4247L39.7081 35.2302L40.4246 34.5137C44.1861 30.7522 44.1861 24.8413 40.4246 21.0798L25.9159 6.57121C22.1545 2.80972 16.2435 2.80972 12.482 6.57121L6.57112 12.8404C2.80963 16.6019 2.80963 22.5128 6.57112 26.2743L21.0797 40.7829C24.8412 44.5444 30.7522 44.5444 34.5136 40.7829L36.1257 39.1708L41.3202 44.3653L39.7081 45.9773C35.9466 49.7388 35.9466 55.6497 39.7081 59.4112L54.2167 73.9199C57.9782 77.6814 63.8891 77.6814 67.6506 73.9199L73.7407 67.8298C77.1439 63.8892 77.1439 57.7992 73.3824 54.2168ZM30.2148 25.7369C29.1401 24.6622 27.528 24.6622 26.4533 25.7369C25.3786 26.8116 25.3786 28.4237 26.4533 29.4984L32.1851 35.2302L30.573 36.8423C28.961 38.4543 26.4533 38.4543 24.8412 36.8423L10.3326 22.3337C8.89966 20.9007 8.89966 18.2139 10.5117 16.6019L16.4227 10.6909C18.0347 9.07887 20.5424 9.07887 22.1545 10.6909L36.6631 25.1996C38.2751 26.8116 38.2751 29.3193 36.6631 30.9314L35.9466 31.6478L30.2148 25.7369ZM69.6209 63.7101L63.5309 69.8001C61.9188 71.4122 59.4112 71.4122 57.7991 69.8001L43.2905 55.2915C41.6784 53.6794 41.6784 51.1718 43.2905 49.5597L44.9025 47.9476L50.6343 53.6794C51.7091 54.7542 53.3211 54.7542 54.3958 53.6794C55.4705 52.6047 55.4705 50.9927 54.3958 49.9179L48.664 44.1861L49.3805 43.4697C50.9926 41.8576 53.5002 41.8576 55.1123 43.4697L69.6209 57.9783C71.233 59.5904 71.233 62.098 69.6209 63.7101Z" fill="#BFBFBF"/>
                    </svg>
                    <h5 class="text-darkGrey text-sm lg:text-xl font-semibold text-center mt-5">Seirama</h5>
                </div>
            </a>

            

        </div>

    </section>

    <section class="container">
        <div class="w-full flex justify-center relative p-6 lg:p-16 rounded-lg bg-no-repeat" style="background:url({{'assets/img/bg-maklumat.png'}});background-repeat: no-repeat;background-size: cover;">
            <!-- <img src="{{'assets/img/bg-maklumat.png'}}" class="absolute botttom-1/2 rounded-md" alt=""> -->
            <div class="flex flex-col lg:flex-row justify-center lg:space-x-4 items-center">
                    <img src="{{'assets/img/logo-circle.png'}}" class="h-auto w-16 lg:w-40 " alt="">
                <div class="flex-1">
                    <h3 class="text-xl lg:text-4xl font-bold text-white leading-8 text-center lg:text-center">
                        {{__('general.service_notice')}}
                    </h3>
                    <p class="text-sm lg:text-xl font-semibold text-white mt-2 lg:mt-6">
                    {!! $lang == 'en' ? $maklumat->content_en ?? $maklumat->content :  $maklumat->content!!}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="grid grid-cols-3 gap-5">
            <div class="">
                <h3 class="font-bold">
                    Youtube
                </h3>
                <div class="flex border-b border-border py-5">
                    <img src="{{$channelsInfo->img}}" alt="" class="w-16 h-16 rounded-full object-cover" >
                    <div class="grid gap-1 px-5">
                        <h3 class="font-semibold text-lg">
                            {{$channelsInfo->name}}
                        </h3>
                        <p class="text-sm font-thin text-gray-500">
                            {{$channelsInfo->subs}} Subscriber
                        </p>
                        <div class="g-ytsubscribe" data-channelid="UCx9t3TUybwKjPEhD26ONOsA" data-layout="default" data-theme="dark" data-count="hidden"></div>
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-2 py-3">
                    <iframe class="w-full h-48 rounded-md col-span-5" id="y-player" src="https://www.youtube.com/embed/XRIXiO9sf9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @foreach($latestVideo AS $row)
                        <a href="#" class="y-list" data-id="{{$row->id->videoId}}">
                            <img class="h-auto w-full object-cover rounded-md" src="{{ $row->snippet->thumbnails->medium->url}}" alt="">
                        </a>
                    @endforeach
                </div>
            </div>
            
        </div>
    </section>
@endsection

@push('add-script')
    <script src="https://apis.google.com/js/platform.js"></script>
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

            $(".y-list").click(function(){
                event.preventDefault();
                console.log($(this).data('id'));
                $("#y-player").attr("src", "https://www.youtube.com/embed/"+$(this).data('id'))
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
