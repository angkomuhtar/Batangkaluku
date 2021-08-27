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

            <div class="py-4">
                <div class="overflow-x-auto">
                    <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal border-2">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        TANI-04.01.CFM-02.MAKRO-01 Peningkatan Kompetensi Petani Melalui Pelatihan
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Status SOP Mikro
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Norma Waktu
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                        1
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                        Akreditasi Kelembagaan Pelatihan Pertanian
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                            Baru
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                            Baru
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="py-4">
                <div class="overflow-x-auto">
                    <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal border-2">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Penanggung jawab
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                        Status SOP Mikro
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                        1
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                        Subbag. Kepegawaian & RT
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">
                                        SOP 1
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            @if ($data->pageAttachments->count())
                <h3 class="" style="font-weight: bolder">
                    {{__('general.download_doc')}} :
                </h3>
                @foreach ($data->pageAttachments AS $row)
                    <a href="{{asset('storage/'.$row->attachment)}}" download class="py-3 text-title flex justify-between items-center border-b border-border space-x-4 ">
                        <i class="far fa-file-alt fa-2x"></i>
                        <div class="flex-1">
                            <h3 class="text-title leading-3"> {{$lang == 'en' ? ($row->name_en ?? $row->name) : $row->name}} </h3>
                            <span class="text-overline">{{tanggal($row->created_at)}}</span>
                        </div>
                        <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 5a1 1 0 10-2 0v19.315l-6.64-6.393a1 1 0 10-1.387 1.44l8.333 8.025a1 1 0 001.388 0l8.333-8.025a1 1 0 00-1.387-1.44L21 24.315V5zm-7.667 29a1 1 0 100 2h13.334a1 1 0 100-2H13.333z" fill="#6CB909"/></svg>
                    </a>
                @endforeach
            @endif
        </div>
    </section>
@endsection

@push('add-script')


@endpush
