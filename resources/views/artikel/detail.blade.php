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
            @include('artikel.artikel-side')
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
                    @if ($data->attachment)
                        <p class="text-info"><i class="fas fa-file mr-2"> </i><a
                                href="{{asset('storage/'.$data->attachment)}}" download>{{__('general.attachment')}}</a></p>
                    @endif
                </div>
            <hr>
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
