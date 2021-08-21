<div class="rounded-sm border border-border py-4 px-2 w-full lg:w-auto">
    <div class="border-b border-border">
        <h3 class="text-title text-dark mb-4">
            {{__('general.unit_work')}}
        </h3>
    </div>
    <ul class="py-3 space-y-1">
        <a href="{{route('satker',['lang' => $lang,'service' => 'sistem_pengendalian_intern'])}}">
            <li class="cursor-pointer side-menu {{route('satker',['service' => 'sistem_pengendalian_intern']) == url()->current() ? 'active' : ''}}">Sistem Pengendali Intern</li>
        </a>
        <a href="{{route('satker',['lang' => $lang,'service' => 'WBK_dan_WBBM'])}}">
            <li class="cursor-pointer side-menu {{route('satker',['service' => 'WBK_dan_WBBM']) == url()->current() ? 'active' : ''}}">WBK - WBBM</li>
        </a>
        <a href="{{route('satker',['lang' => $lang,'service' => 'PPID'])}}">
            <li class="cursor-pointer side-menu {{route('satker',['service' => 'PPID']) == url()->current() ? 'active' : ''}}">PPID</li>
        </a>
        <a href="{{route('satker',['lang' => $lang,'service' => 'pengadaan_barang_dan_jasa'])}}">
            <li class="cursor-pointer side-menu {{route('satker',['service' => 'pengadaan_barang_dan_jasa']) == url()->current() ? 'active' : ''}}">Pengadaan Barang & Jasa</li>
        </a>
        <a href="{{route('satker',['lang' => $lang,'service' => 'perpustakaan'])}}">
            <li class="cursor-pointer side-menu {{route('satker',['service' => 'perpustakaan']) == url()->current() ? 'active' : ''}}">Perpustakaan</li>
        </a>
        <a href="{{route('satker',['lang' => $lang,'service' => 'ISO'])}}">
            <li class="cursor-pointer side-menu {{route('satker',['service' => 'ISO']) == url()->current() ? 'active' : ''}}">ISO</li>
        </a>
    </ul>
</div>
