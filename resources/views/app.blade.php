<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>BBPP Batangkaluku</title>
</head>
<body class="font-opensans">
    @include('header')

    <main class="space-y-20">
        @yield('main')
    </main>

    <footer class="bg-primary mt-5">
        <div class="container">
            <div class="py-20 grid grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="space-y-10">
                    <img src="{{asset('assets/img/logo.png') }}" class="w-full">
                    <div class="alamat">
                        <h6 class="footer-head">{{__('general.off_address')}}</h6>
                        <p class="footer-list">Jl. Poros Malino, Tamarunang, Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92117, Indonesia</p>
                    </div>
                </div>
                <div class="space-y-10">
                    <div class="link">
                        <h6 class="footer-head">{{__('general.related_links')}}</h6>
                        <ul class="space-y-1">
                            <li><a href="#" class="footer-list">Kementrian Pertanian</a></li>
                            <li><a href="#" class="footer-list">CYBEX Pertanian</a></li>
                            <li><a href="#" class="footer-list">BPPDMP</a></li>
                            <li><a href="#" class="footer-list">WBS</a></li>
                            <li><a href="#" class="footer-list">BBPP Lembang</a></li>
                            <li><a href="#" class="footer-list">BBPP Batu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-10">
                    <div class="rate">
                        <h6 class="footer-head">{{__('general.review_our_web')}}</h6>
                        <ul class="space-y-1">
                            <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                {{__('general.very_good')}}</li>
                            <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                {{__('general.good')}}</li>
                            <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                {{__('general.enough')}}</li>
                            <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                {{__('general.not_good')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-10">
                    <div class="link">
                        <h6 class="footer-head">{{__('general.contact_us')}}</h6>
                        <ul class="space-y-1">
                            <li><a href="#" class="footer-list">+0411 - 866396</a></li>
                            <li><a href="#" class="footer-list">infobbpp@pertanian.go.id</a></li>
                        </ul>
                    </div>
                    <div class="link">
                        <h6 class="footer-head">{{__('general.visitor')}}</h6>
                        <ul class="space-y-1">
                            <li><a href="#" class="footer-list">Pages</a></li>
                            <li><a href="#" class="footer-list">Online</a></li>
                            <li><a href="#" class="footer-list">{{__('general.today_visitor')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-darken py-9">
            <p class="text-white text-center">
                    Copyright © BBPP Batangkaluku - {{__('general.ministry')}} R.I.
            </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @stack('add-script')

</body>
</html>
