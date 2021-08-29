


<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark">
        {{__('general.unit_work')}}
        </h3>
    </div>
    <ul class="menu-items  hidden">
        <li class="flex">
            <a href="{{route('satker',['lang' => $lang,'service' => 'sistem_pengendalian_intern'])}}" 
                class="menu-links {{route('satker',['service' => 'sistem_pengendalian_intern']) == url()->current() ? 'active' : ''}}">
                Sistem Pengendali Intern
            </a>
        </li>
        <li class="flex">
            <a href="{{route('satker',['lang' => $lang,'service' => 'WBK_dan_WBBM'])}}" 
                class="menu-links {{route('satker',['service' => 'WBK_dan_WBBM']) == url()->current() ? 'active' : ''}}">
                WBK - WBBM
            </a>
        </li>
        <li class="flex">
            <a href="{{route('satker',['lang' => $lang,'service' => 'PPID'])}}" 
                class="menu-links {{route('satker',['service' => 'PPID']) == url()->current() ? 'active' : ''}}">
                PPID
            </a>
        </li>
        <li class="flex">
            <a href="{{route('satker',['lang' => $lang,'service' => 'pengadaan_barang_dan_jasa'])}}" 
                class="menu-links {{route('satker',['service' => 'pengadaan_barang_dan_jasa']) == url()->current() ? 'active' : ''}}">
                Pengadaan Barang & Jasa
            </a>
        </li>
        <li class="flex">
            <a href="{{route('satker',['lang' => $lang,'service' => 'perpustakaan'])}}" 
                class="menu-links {{route('satker',['service' => 'perpustakaan']) == url()->current() ? 'active' : ''}}">
                Perpustakaan
            </a>
        </li>
        <li class="flex">
            <a href="{{route('satker',['lang' => $lang,'service' => 'ISO'])}}" 
                class="menu-links {{route('satker',['service' => 'ISO']) == url()->current() ? 'active' : ''}}">
                ISO
            </a>
        </li>
    </ul>
</div>
