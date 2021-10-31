@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full">
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">{{__('general.news')}}</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="hidden lg:block">
            @include('lembaga.artikel-side')
        </div>
        <div class=" lg:col-span-3 space-y-10">
        <!-- <div class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-1 gap-6"> -->
                <div class="rounded-lg">
                    <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$data->image)}}" alt="{{$data->title}}">
                    <p class="text-secondary font-semibold text-xs mt-5 mb-1">{{__('general.artikel_'.$data->type)}}</p>
                    <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($data->title_en ?? $data->title) : $data->title }}</h3>
                    <p class="mb-3 font-normal text-xs text-darkLight"  >{{tanggal($data->published_time)}}</p>
                    <p class="mb-3 font-normal text-sm text-darkGrey">
                        {!! $lang == 'en' ? ($data->content_en ?? $data->content) : $data->content !!}
                    </p>
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
