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
                @foreach ($data->pageAttachments AS $row)
                    <a href="{{asset('storage/'.$row->attachment)}}" download style="font-size: larger">
                        <div class="border shadow pull-right" style="padding: 5px; border-radius: 5px; margin-bottom: 5px">
                            {{$lang == 'en' ? ($row->name_en ?? $row->name) : $row->name}}<br>
                            <span style="font-size: x-small">{{tanggal($row->created_at)}}</span>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>

    </section>
@endsection

@push('add-script')


@endpush
