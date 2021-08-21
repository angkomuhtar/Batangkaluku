@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full"> 
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">Lembaga</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>  
            </div>
        </div>
    </section>

    <section class="section">
        <div class="">
            @include('lembaga.lembaga-side')
        </div>    
        <div class="lg:col-span-3 space-y-10">
            <div class="w-full">
                <div class="space-y-4">
                    @for($q=1; $q < 4; $q++)
                    <div class="border rounded-md collapsible">
                        <button type="button" aria-label="Open item" title="Open item" class="collapse-btn flex items-center justify-between w-full p-4 focus:outline-none">
                            <p class="text-lg font-medium">Kepala balai</p>
                            <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="2,7 12,17 22,7" stroke-linejoin="round"></polyline>
                            </svg>
                        </button>
                        <div class="p-4 pt-0 hidden space-y-6">
                            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-white rounded-md p-2">
                                    <img src="https://picsum.photos/400/500/?random=artist&grayscale" alt="" class="rounded-md" >
                                    <div class="text-center p-4">
                                        <h3 class="text-sm text-dark mb-3"> 
                                        Rosdiana, S.Pi, M.M
                                        </h3>
                                        <p class="capitalize text-xs text-darkLight">
                                            kepala Bagian Umum
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
                                @for($o=1; $o < 9; $o++)
                                <div class="bg-white rounded-md p-2">
                                    <img src="https://picsum.photos/400/500/?random=artist&grayscale" alt="" class="rounded-md" >
                                    <div class="text-center p-4">
                                        <h3 class="text-sm text-dark mb-3"> 
                                        Rosdiana, S.Pi, M.M
                                        </h3>
                                        <p class="capitalize text-xs text-darkLight">
                                            kepala Bagian Umum
                                        </p>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endfor
                    <!-- https://picsum.photos/600/400/?random=${n} -->
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