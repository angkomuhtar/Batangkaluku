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
            <div class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-1 gap-6">
                    <div class="rounded-sm">
                       <table>
                           <thead>
                           <tr>
                               <td>No.</td>
                               <td>{{__('general.officer_name')}}</td>
                               <td>NIP</td>
                               <td>{{__('general.rank_class')}}</td>
                               <td>{{__('general.position')}}</td>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach ($pejabat AS $row)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$row->name}}</td>
                                   <td>{{$row->nip}}</td>
                                   <td>{{$lang == 'en' ? $row->rank_en ?? $row->rank : $row->rank}}</td>
                                   <td>{{$lang == 'en' ? $row->position_en ?? $row->position : $row->position}}</td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
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
