@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full">
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">{{__('general.ser_n_info')}}</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="">
            @include('layanan.layanan-side')
        </div>
        <div class="col-span-3 space-y-10">
            <h3 class="text-header-3">
                {{$lang == 'en' ? $data->title_en ?? $data->title : $data->title}}
            </h3>
            <div class="space-y-3">
                {!! $lang == 'en' ? ($data->content_en ?? $data->content) : $data->content !!}
            </div>
            @if ($data->pageAttachments->count())
                <h3 class="" style="font-weight: bolder">
                    {{__('general.download_doc')}} :
                </h3>
            @endif
            <div class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach($training AS $row)
                    <div class="rounded-sm">
                        <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$row->image)}}" alt="{{$row->title}}">
                        <h3 class="font-semibold text-xl mb-3">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}</h3>
                        <p class="mb-3 font-normal text-sm text-darkGrey">{{tanggal($row->date,true)}}</p>
                        <p class="mb-3 font-normal text-sm text-darkGrey">{{$row->time_start}} - {{$row->time_end ?? __('general.finish')}}</p>
                        <p class="mb-3 font-normal text-sm text-darkGrey">{{$row->location}}</p>
                    </div>
                @endforeach
                <div class="lg:col-span-2 flex justify-center">
                    {{$training->links()}}
                    {{--                <button class="bg-secondary text-white p-3 rounded-md">--}}
                    {{--                    Tampilkan Lebih Banyak Berita--}}
                    {{--                </button>--}}
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
