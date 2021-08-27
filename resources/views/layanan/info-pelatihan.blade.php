@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full">
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">{{__('general.serv_n_info')}}</h3>
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
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-6">
                <div class="lg:col-span-3 md:cols-span-2">
                    <h3 class="text-header-3"> Daftar Pelatihan</h3>
                </div>
                @foreach($training AS $row)
                    <div class="rounded-sm">
                        <img class="rounded-sm w-full h-auto" src="{{asset('storage/'.$row->image)}}" alt="{{$row->title}}">
                        <div class="py-4 grid gap-3">
                            <h3 class="text-subttile-2">{{$lang == 'en' ? ($row->title_en ?? $row->title) : $row->title }}</h3>
                            <p class="text-info"><i class="far fa-calendar-alt mr-2"> </i>{{tanggal($row->date,true)}}</p>
                            <p class="text-info"><i class="far fa-clock mr-2"> </i>{{$row->location}}</p>
                            <p class="text-info"><i class="fas fa-map-marked-alt mr-2"> </i>{{$row->time_start}} - {{$row->time_end ?? __('general.finish')}}</p>
                        </div>
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
