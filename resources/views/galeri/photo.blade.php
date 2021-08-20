@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full"> 
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">Satuan Kerja</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>  
            </div>
        </div>
    </section>

    <section class="container flex lg:space-x-6">
        <div class="hidden lg:block w-4/12">
            @include('galeri.side')
        </div>    
        <div class="w-full space-y-10 px-4 pb-10">
            <h3 class="text-header-2 text-dark"> Album Photo</h3>
            <div class="grid lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-md border border-border">
                    <img class="rounded-md" src="https://picsum.photos/600/400/?random=artist&grayscale" alt="">
                    <div class="p-3">
                        <h3 class="text-title">
                            HUT Republik Indonesia  Ke-72
                        </h3>
                        <p class="text-overline py-4"> 2020-08-17</p>
                    </div>
                </div>
                <div class="bg-white rounded-md border border-border">
                    <img class="rounded-md" src="https://picsum.photos/600/400/?random=artist&grayscale" alt="">
                    <div class="p-3">
                        <h3 class="text-title">
                            HUT Republik Indonesia  Ke-72
                        </h3>
                        <p class="text-overline py-4"> 2020-08-17</p>
                    </div>
                </div>
                <div class="bg-white rounded-md border border-border">
                    <img class="rounded-md" src="https://picsum.photos/600/400/?random=artist&grayscale" alt="">
                    <div class="p-3">
                        <h3 class="text-title">
                            HUT Republik Indonesia  Ke-72
                        </h3>
                        <p class="text-overline py-4"> 2020-08-17</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('add-script')

<script>
    $(document).ready(function(){
        $(".collapse-btn").click(function(){
            $(this).parent().toggleClass("open");
            $(this).children("svg").toggleClass("transform rotate-180");
            $(this).siblings().toggle("fast");

        })
    })
</script>
@endpush