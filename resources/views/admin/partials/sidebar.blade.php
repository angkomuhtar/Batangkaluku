<div
    class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">

    <div class="logo-w">
        <a class="logo" href="index.html">
            <div class="logo-element"></div>
            <div class="logo-label">
                BBPP Batangkaluku
            </div>
        </a>
    </div>
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
            <div class="avatar-w">
                <img alt="" src="{{asset('assets')}}/img/user-0.png"/>
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                    {{auth()->user()->name ?? 'Guest'}}
                </div>
                <div class="logged-user-role">
                    Administrator
                </div>
            </div>
        </div>
    </div>
    <h1 class="menu-page-header">
        Page Header
    </h1>
    <ul class="main-menu">
        <li class="">
            <a href="{{url('')}}" target="_blank">
                <div class="icon-w">
                    <div class="fa fa-globe"></div>
                </div>
                <span>Website</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'summary') ? 'active' : ''}}">
            <a href="{{route('dashboard')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-home"></div>
                </div>
                <span>Dashboard</span></a>
        </li>
        <li class="sub-header">
            <span>Home</span>
        </li>
        <li class="{{str_contains(url()->current(),'slider') ? 'active' : ''}}">
            <a href="{{route('dashboard.slider')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-image"></div>
                </div>
                <span>Slider</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'konten/maklumat') ? 'active' : ''}}">
            <a href="{{route('dashboard.konten.edit','maklumat')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-edit-1"></div>
                </div>
                <span>Maklumat</span></a>
        </li>
        <li class="sub-header">
            <span>Lembaga</span>
        </li>
        <li class="{{str_contains(url()->current(),'konten/tentang_kami') ? 'active' : ''}}">
            <a href="{{route('dashboard.konten.edit','tentang_kami')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-edit-3"></div>
                </div>
                <span>Tentang Kami</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'konten/struktur_organisasi') ? 'active' : ''}}">
            <a href="{{route('dashboard.konten.edit','struktur_organisasi')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-hierarchy-structure-2"></div>
                </div>
                <span>Struktur Organisasi</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'sdm') ? 'active' : ''}}">
            <a href="{{route('dashboard.sdm')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-user-check"></div>
                </div>
                <span>Sumber Daya Manusia</span></a>
        </li>
        <li class="sub-header">
            <span>Artikel</span>
        </li>
        <li class="{{str_contains(url()->current(),'artikel/pelatihan') ? 'active' : ''}}">
            <a href="{{route('dashboard.artikel','pelatihan')}}">
                <div class="icon-w">
                    <div class="fa fa-newspaper-o"></div>
                </div>
                <span>Artikel Pelatihan</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'artikel/pertanian') ? 'active' : ''}}">
            <a href="{{route('dashboard.artikel','pertanian')}}">
                <div class="icon-w">
                    <div class="fa fa-tree"></div>
                </div>
                <span>Artikel Pertanian</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'artikel/umum') ? 'active' : ''}}">
            <a href="{{route('dashboard.artikel','umum')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-newspaper"></div>
                </div>
                <span>Artikel Umum</span></a>
        </li>
        <li class="sub-header">
            <span>Layanan & Informasi</span>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/sop_balai') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'sop_balai'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-bookmark"></div>
                </div>
                <span>SOP Balai</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/jaringan_informasi_dan_dokumentasi') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'jaringan_informasi_dan_dokumentasi'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-navigation"></div>
                </div>
                <span>Jaringan Informasi & Dokumentasi</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/surat_keputusan_balai') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'surat_keputusan_balai'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-file"></div>
                </div>
                <span>Surat Keputusan Balai</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/info_pelatihan') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'info_pelatihan'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-calendar-time"></div>
                </div>
                <span>Info Pelatihan</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/pejabat_LHKPN_-_LHKASN') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'pejabat_LHKPN_-_LHKASN'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-users"></div>
                </div>
                <span>Pejabat LHKPN/LHKASN</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/rencana_strategis') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'rencana_strategis'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-paperclip"></div>
                </div>
                <span>Rencana Strategis</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/rencana_kerja_tahunan') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'rencana_kerja_tahunan'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-agenda-1"></div>
                </div>
                <span>Rencana Kerja Tahunan</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/lakin_-_lakip') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'lakin_-_lakip'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-book"></div>
                </div>
                <span>Lakin/Lakip</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/IKM') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'IKM'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-check-circle"></div>
                </div>
                <span>IKM</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/keuangan') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'keuangan'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-dollar-sign"></div>
                </div>
                <span>Keuangan</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/layanan_dan_informasi/aset') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'layanan_dan_informasi','name' => 'aset'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-delivery-box-2"></div>
                </div>
                <span>Aset</span></a>
        </li>
        <li class="sub-header">
            <span>Satuan Kerja</span>
        </li>
        <li class="{{str_contains(url()->current(),'page/satuan_kerja/sistem_pengendalian_intern') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'satuan_kerja','name' => 'sistem_pengendalian_intern'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-window-content"></div>
                </div>
                <span>Sistem Pengendalian Intern</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/satuan_kerja/WBK_dan_WBBM') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'satuan_kerja','name' => 'WBK_dan_WBBM'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-alert-octagon"></div>
                </div>
                <span>WBK - WBBM</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/satuan_kerja/PPID') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'satuan_kerja','name' => 'PPID'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-alert-circle"></div>
                </div>
                <span>PPID</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/satuan_kerja/pengadaan_barang_dan_jasa') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'satuan_kerja','name' => 'pengadaan_barang_dan_jasa'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-shopping-cart"></div>
                </div>
                <span>Pengadaan Barang & Jasa</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/satuan_kerja/perpustakaan') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'satuan_kerja','name' => 'perpustakaan'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-book"></div>
                </div>
                <span>Perpustakaan</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'page/satuan_kerja/ISO') ? 'active' : ''}}">
            <a href="{{route('dashboard.page.edit',['type' => 'satuan_kerja','name' => 'ISO'])}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-disc"></div>
                </div>
                <span>ISO</span></a>
        </li>
        <li class="sub-header">
            <span>Gallery</span>
        </li>
        <li class="{{str_contains(url()->current(),'gallery/foto') ? 'active' : ''}}">
            <a href="{{route('dashboard.gallery','foto')}}">
                <div class="icon-w">
                    <div class="fa fa-image"></div>
                </div>
                <span>Foto</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'gallery/video') ? 'active' : ''}}">
            <a href="{{route('dashboard.gallery','video')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-video"></div>
                </div>
                <span>Video</span></a>
        </li>
        <li class="sub-header">
            <span>Master</span>
        </li>
        <li class="{{str_contains(url()->current(),'bagian') ? 'active' : ''}}">
            <a href="{{route('dashboard.bagian')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-bookmark"></div>
                </div>
                <span>Bagian / Bidang</span></a>
        </li>
        <li class="{{str_contains(url()->current(),'user') ? 'active' : ''}}">
            <a href="{{route('dashboard.user')}}">
                <div class="icon-w">
                    <div class="fa fa-user-o"></div>
                </div>
                <span>User</span></a>
        </li>
    </ul>
</div>
