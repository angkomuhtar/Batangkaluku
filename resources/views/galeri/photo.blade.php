@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full">
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">{{__('general.gallery')}}</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="hidden lg:block">
            @include('galeri.side')
        </div>
        <div class="lg:col-span-3 px-4 pb-10">
            <h3 class="text-header-2 text-dark"> {{__('general.album_photo')}}</h3>
            <div class="grid lg:grid-cols-3 gap-6">
                @foreach ($data AS $row)
                    <div class="bg-white rounded-md border border-border">
                        <img class="rounded-md" src="{{asset('storage/'.$row->content)}}" alt="">
                        <div class="p-3">
                            <h3 class="text-title">
                                {{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title}}
                            </h3>
                            <p class="text-overline py-4">{{$row->created_at->format('Y-m-d')}}</p>
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
