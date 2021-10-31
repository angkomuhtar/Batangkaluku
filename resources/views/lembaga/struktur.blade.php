@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full">
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">{{__('general.institution')}}</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="hidden lg:block">
            @include('lembaga.lembaga-side')
        </div>
        <div class=" lg:col-span-3 space-y-10">
            <div class="space-y-3">
                <div class="grid justify-items-center">
                    <img src="{{asset('storage/sdm/struktur.jpeg')}}" class="w-full" alt="">
                </div>
                {!! $lang == 'en' ? ($data->content_en ?? $data->content) : $data->content !!}
            </div>
        </div>
    </section>
@endsection

@push('add-script')


@endpush
