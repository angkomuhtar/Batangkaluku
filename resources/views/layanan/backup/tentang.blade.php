@extends('app')

@section('main')
    <section class="container">
        <div class="w-full rounded-md relative">
            <img src="{{asset('assets/img/banner.png')}}" class="w-full"> 
            <div class="absolute top-0 bottom-0 left-12 flex flex-col justify-center">
                <h3 class="text-white text-header-1 pb-3">Lembaga</h3>
                <h6 class="text-header-3 text-white">BBPP Batangkaluku</h6>  
            </div>
        </div>
    </section>

    <section class="section">
        <div class="">
            @include('lembaga.lembaga-side')
        </div>    
        <div class="col-span-3 space-y-10">
            <div class="space-y-3">
                <h3 class="text-title text-dark">Profil BBPP Batangkaluku</h3>
                <p class="text-body">Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku ini merupakan perwujudan kesiapan BBPP Batangkaluku dalam rangka optimalisasi tugas dan fungsi sebagai lembaga pelatihan pertanian. Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku merupakan salah satu UPT Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian berperan penting dalam meningkatkan kapasitas sumberdaya manusia pertanian melalui pelatihan. Napak tilas perjalanan BBPP yaitu Tahun 1976 bernama “Balai Latihan Pegawai Pertanian Batangkaluku”, di tahun 2000 menjadi “Balai Diklat Pertanian”, lalu 2002 diubah menjadi “Balai Diklat Mekanisasi Pertanian”. Memasuki tahun 2003 menjadi “Balai Besar Diklat Mekanisasi Pertanian”, dan di tahun 2007 menjadi “Balai Besar Pelatihan Pertanian Batangkaluku” sampai sekarang.  </p>
                <p class="text-body">Tantangan yang dihadapi oleh BBPP Batangkaluku adalah berupaya keras agar dapat mewujudkan VISI, yaitu  menjadi  lembaga  pelatihan terpercaya dan berdaya saing untuk menghasilkan SDM  pertanian yang kreatif, inovatif dan profesional. Meretas jalan untuk mewujudkan visi dari sejak kehadiran lembaga pelatihan ini, bukanlah hal yang mudah. Jalan panjang dan berliku telah dilalui, tantangan datang silih berganti termasuk seringnya terjadi perubahan dan penyesuaian organisasi karena tuntutan perkembangan pembangunan pertanian.</p>
            </div>

            <div class="space-y-3">
                <h3 class="text-title text-dark">Tugas Pokok BBPP Batangkaluku</h3>
                <p class="text-body">"Melaksanakan Pelatihan Fungsional Bagi Aparatur, Pelatihan Teknis dan Profesi, Mengembangkan Model dan Teknik Pelatihan Fungsional dan Teknis di Bidang Pertanian Bagi Aparatur dan Non Aparatur Pertanian".</p>
            </div>
        </div>

    </section>
@endsection

@push('add-script')


@endpush