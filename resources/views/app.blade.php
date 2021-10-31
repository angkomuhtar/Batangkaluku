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

    <main class="space-y-10 lg:space-y-20">
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
                            <form action="" class="space-y-1">
                                <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                    {{__('general.very_good')}}</li>
                                <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                    {{__('general.good')}}</li>
                                <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                    {{__('general.enough')}}</li>
                                <li class="footer-list flex items-center"><input type="radio" name="feed" id="" class="mr-2">
                                    {{__('general.not_good')}}</li>
                                <li class="footer-list flex items-center">
                                    <button type="submit" class="bg-secondary text-white text-xs font-semibold text-center px-2 py-1 rounded-lg mt-5" >Kirim</button>
                                </li>
                            </form>
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
                        <div class="flex gap-5 mt-5">
                            <a href="https://web.facebook.com/bbppbatangkaluku.pertanian/?_rdc=1&_rdr" target="_blank" class="text-white">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                            <a href="https://twitter.com/@bbpp_bk" target="_blank" class="text-white">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                            <a href="https://instagram.com/bbpp.batangkaluku?utm_medium=copy_link" target="_blank" class="text-white">
                                <i class="fab fa-instagram-square fa-2x"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCx9t3TUybwKjPEhD26ONOsA" target="_blank" class="text-white">
                                <i class="fab fa-youtube-square fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="link">
                        <h6 class="footer-head">{{__('general.visitor')}}</h6>
                        <ul class="space-y-1">
                            <li><a href="#" class="footer-list">Pages : {{$visitor->where('route',url()->current())->count()}}</a></li>
                            <li><a href="#" class="footer-list">Online : {{$visitor->where('created_at', '>', now()->subMinutes(10)->toDateTimeString())->unique('unique_id')->count() ?? 1}}</a></li>
                            <li><a href="#" class="footer-list">{{__('general.today_visitor')}} : {{$visitor->where('created_at', '>', now()->subHours(24)->toDateTimeString())->unique('unique_id')->count()}}</a></li>
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

    <script>
        $(document).ready(function(){
            $("#open-menu").click(function(){
                $("#nav-menu").toggleClass("translate-x-full").toggleClass("translate-x-0")
            })
            
            $("#close-menu").click(function(){
                $("#nav-menu").toggleClass("translate-x-0").toggleClass("translate-x-full")
                // $("#nav-menu").toggleClass("right-0").toggleClass("right-full")
            })

            $("#side-open").click(function(){
                $(this).children("i").toggleClass("far").toggleClass('fas fa-times');
                $(".menu-items").toggleClass("hidden")
                $(".menu-side").toggleClass("py-5")
                $(".menu-side-header h3").toggleClass("hidden")
            })

            $(".menu-collapse").click(function(){
                $(this).siblings().toggle("fast");
                $(this).children("span").children("svg").toggleClass("transform -rotate-90");
            })
        })

        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("header");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.remove("relative");
            header.classList.add("fixed");
            header.classList.add("border-b");
            header.classList.add("border-border");
        } else {
            header.classList.add("relative");
            header.classList.remove("fixed");
            header.classList.remove("border-b");
            header.classList.remove("border-border");
        }
        }
    </script>
    @stack('add-script')

</body>
</html>
