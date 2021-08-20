@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full"> 
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">Satuan Kerja</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>  
            </div>
        </div>
    </section>

    <section class="container flex lg:space-x-6">
        <div class="hidden lg:block">
            @include('satker.side')
        </div>    
        <div class="w-full space-y-10 px-4 pb-10">
            <h3 class="text-header-2 text-dark"> Pejabat Pengelola informasi dan Dokumentasi (PPID)</h3>
            <div class="space-y-5">
                <h3 class="text-title">Hak Pengguna Informasi Publik</h3>
                <p class="text-body">Pembangunan Zona Integritas Menuju Wilayah Bebas dari Korupsi (WBK) dan Wilayah Birokrasi Bersih dan Melayani (WBBM). Pemerintah telah menerbitkan Peraturan Presiden Nomor 81 Tahun 2010 tentang Grand Design Reformasi Birokrasi yang mengatur tentang pelaksanaan program reformasi birokrasi. Peraturan tersebut menargetkan tercapainya tiga sasaran hasil utama yaitu peningkatan kapasitas dan akuntabilitas organisasi, pemerintah yang bersih dan bebas KKN, serta peningkatan pelayanan publik.</p>
                <p class="text-body">Predikat Menuju WBK adalah predikat yang diberikan kepada suatu unit kerja yang memenuhi sebagian besar manajemen perubahan, penataan tatalaksana, penataan sistem manajemen SDM, penguatan pegawasan, dan penguatan akuntabilitas kinerja, sedangkan Predikat Menuju WBBM adalah predikat yang diberikan kepada suatu unit kerja/satuan kerja yang sebelumnya telah mendapat predikat Menuju WBK dan memenuhi sebagian besar manajemen perubahan, penataan tatalaksana, penataan sistem manajemen SDM, penguatan pengawasan, penguatan akuntabilitas kinerja, dan penguatan kualitas layanan publik. </p>
            </div>
            <div class="space-y-5">
                <h3 class="text-title">Unit Pengelola Gratifikasi (UPG)</h3>
                <p class="text-body">Pengendalian gratifikasi merupakan proses integral pada tindakan dan kegiatan yang dilakukan secara terus menerus oleh pimpinan dan seluruh pegawai untuk menciptakan lingkungan organisasi yang bebas dari gratifikasi dalam mewujudkan wilayah bebas dari korupsi (WBK). </p>
                <p class="text-body">Untuk lebih mengoptimalkan pencegahan atau pengelolaan gratifikasi maka dibentuk Sub Unit Pengelola Gratifikasi (Sub UPG) yang merupakan mitra dari manajemen untuk membantu pimpinan dalam ikut mengendalikan dan mencegah terjadinya gratifikasi pada Balai Besar Pelatihan Pertanian Batangkaluku. Sub UPG Balai Besar Pelatihan Pertanian Batangkaluku mempunyai tugas yaitu Melakukan upaya-upaya pencegahan praktik-praktik gratifikasi di lingkungan Unit Kerja Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku.</p>
            </div>
            <div class="p-2">
                <h3 class="text-subtitle-3"> Download Dokumen Pembentukan :</h3>
                <a href="#" class="w-full lg:w-3/4 flex items-center py-5 space-x-5 border-b border-border">
                    <span>
                        <svg class="w-14 h-14" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M41.6 6.40039L52.8 19.2004H41.6V6.40039Z" fill="#6CB909"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.8 6.4C8.8 5.07452 9.87452 4 11.2 4H39.3143C39.9781 4 40.6123 4.27494 41.066 4.75947L54.5518 19.1595C54.9683 19.6042 55.2 20.1907 55.2 20.8V57.6C55.2 58.9255 54.1255 60 52.8 60H11.2C9.87452 60 8.8 58.9255 8.8 57.6V6.4ZM13.6 8.8V55.2H50.4V23.2H39.3143C37.9888 23.2 36.9143 22.1255 36.9143 20.8V8.8H13.6ZM41.7143 12.4738L47.2643 18.4H41.7143V12.4738ZM32 23.2H19.2V18.4H32V23.2ZM44.8 31.2V36H19.2V31.2H44.8ZM44.8 44V48.8H19.2V44H44.8Z" fill="#055A5B"/>
                        </svg>
                    </span>
                    <div class="w-3/4">
                        <h3 class="text-title"> SK Pembentukan Satuan Pelaksana Pengendalian Intern</h3>
                    </div>
                    <span>
                        <svg class="w-10 h-10" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21 5a1 1 0 10-2 0v19.315l-6.64-6.393a1 1 0 10-1.387 1.44l8.333 8.025a1 1 0 001.388 0l8.333-8.025a1 1 0 00-1.387-1.44L21 24.315V5zm-7.667 29a1 1 0 100 2h13.334a1 1 0 000-2H13.333z" fill="#6CB909"/></svg>
                    </span>
                </a>
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