@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full"> 
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">Artikel Berita</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>  
            </div>
        </div>
    </section>

    <section class="section">
        <div class="">
            @include('artikel.artikel-side')
        </div>  
        <div class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-2 gap-6">
            @for($i=1; $i <= 6; $i++)
            <div class="rounded-sm">
                <img class="rounded-sm w-full h-auto" src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                <p class="text-secondary font-semibold text-xs mt-5 mb-1">Artikel Umum</p>
                <h3 class="font-semibold text-xl mb-3">Harapan Mentan SYL Kepada Ribuan Penyuluh Pertanian</h3>
                <p class="mb-3 font-normal text-sm text-darkGrey">RURAL Empowerment and Agricultural Development Scaling-up Initiative atau REA...</p>
                <p class="mb-3 font-normal text-xs text-darkLight">06 April 2021</p>
            </div>
            @endfor
            <div class="lg:col-span-2 flex justify-center">
                <button class="bg-secondary text-white p-3 rounded-md">
                    Tampilkan Lebih Banyak Berita
                </button>
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