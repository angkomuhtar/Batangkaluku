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

    <section class="content">
        <div class="hidden lg:block">
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
                                    {{__('general.officer_name')}}
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    NIP
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    {{__('general.rank_class')}}
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-border text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    {{__('general.position')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pejabat AS $row)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">{{$loop->iteration}}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">{{$row->name}}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">{{$row->nip}}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">{{$lang == 'en' ? $row->rank_en ?? $row->rank : $row->rank}}</td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-no-wrap">{{$lang == 'en' ? $row->position_en ?? $row->position : $row->position}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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
