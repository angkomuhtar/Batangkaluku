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
            @include('layanan.layanan-side')
        </div>
        <div class=" lg:col-span-3 space-y-10">
            <!-- <div class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-1 gap-6"> -->
            <div class="rounded-lg">
                <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$data->image)}}" alt="{{$data->title}}">
                <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($data->title_en ?? $data->title) : $data->title }}</h3>
                <p class="mb-3 font-normal text-xs text-darkLight">{{tanggal($data->created_at)}}</p>
                <p class="text-info"><i class="far fa-calendar-alt mr-2"> </i>{{tanggal($data->date,true)}}</p>
                <p class="text-info"><i class="far fa-clock mr-2"> </i>{{$data->location}}</p>
                <p class="text-info"><i class="fas fa-map-marked-alt mr-2"> </i>{{$data->time_start}}
                    - {{$data->time_end ?? __('general.finish')}}</p>
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
                @foreach ($other AS $row)
                    <div class="bg-white rounded shadow-sm">
                        <img src="{{asset('storage/'.$row->image)}}" class="object-cover w-full h-64 rounded-md"
                             alt="{{$row->title}}"/>
                        <div class="space-y-3 py-3">
                            <p class="mb-3 text-xs font-semibold tracking-wide uppercase ">
                                <span class="text-gray-600"></span>
                            </p>
                            <a href="{{route('layanan.pelatihan.detail',['id' => $row->id ,'lang' => $lang])}}"
                               aria-label="Category"
                               title="{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}"
                               class="mb-5 text-lg font-semibold">
                                {{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}
                            </a>
                            <p class="text-xs text-darkLight">
                                {{tanggal($row->created_at)}}
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
        $(document).ready(function () {
            $(".collapse-btn").click(function () {
                $(this).parent().toggleClass("open");
                $(this).children("svg").toggleClass("transform rotate-180");
                $(this).siblings().toggle("fast");

            })
        })
    </script>
@endpush
