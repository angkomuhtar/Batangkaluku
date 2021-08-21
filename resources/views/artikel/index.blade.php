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

    <section class="section">
        <div class="">
            @include('artikel.artikel-side')
        </div>
        <div class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach($data AS $row)
                <div class="rounded-sm">
                    <a href="{{route('artikel.detail',['title' => $row->title_str, 'id' => $row->id,'type' => $row->type, 'lang' => $lang])}}">
                    <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$row->image)}}" alt="{{$row->title}}">
                    <p class="text-secondary font-semibold text-xs mt-5 mb-1">{{__('general.artikel_'.$row->type)}}</p>
                    <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}</h3>
                    <p class="mb-3 font-normal text-sm text-darkGrey">{{$row->desc_str}}...</p>
                    <p class="mb-3 font-normal text-xs text-darkLight"  >{{tanggal($row->published_time)}}</p>
                    </a>
                </div>
            @endforeach
            <div class="lg:col-span-2 flex justify-center">
                {{$data->links()}}
{{--                <button class="bg-secondary text-white p-3 rounded-md">--}}
{{--                    Tampilkan Lebih Banyak Berita--}}
{{--                </button>--}}
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
