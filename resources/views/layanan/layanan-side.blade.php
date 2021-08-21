<div class="rounded-sm border border-border py-4 px-2 w-full lg:w-auto">
    <div class="border-b border-border">
        <h3 class="text-title text-dark mb-4">
            {{__('general.serv_n_info')}}
        </h3>
    </div>
    <ul class="py-3 space-y-1">
        <a href="{{route('layanan',['service' => 'sop_balai' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'sop_balai']) == url()->current() ? 'active' : ''}}">
                SOP Balai
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'jaringan_informasi_dan_dokumentasi' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'jaringan_informasi_dan_dokumentasi']) == url()->current() ? 'active' : ''}}">
                Jaringan Informasi & Dokumentasi
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'surat_keputusan_balai' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'surat_keputusan_balai']) == url()->current() ? 'active' : ''}}">
                Surat keputusan Balai
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'info_pelatihan' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'info_pelatihan']) == url()->current() ? 'active' : ''}}">
                Info Pelatihan
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'pejabat_LHKPN_-_LHKASN' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'pejabat_LHKPN_-_LHKASN']) == url()->current() ? 'active' : ''}}">
                Pejabat LHKPN/LHKASN
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'rencana_strategis' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'rencana_strategis']) == url()->current() ? 'active' : ''}}">
                Rencana Strategis
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'rencana_kerja_tahunan' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu  {{route('layanan',['service' => 'rencana_kerja_tahunan']) == url()->current() ? 'active' : ''}}">
                Rencana Kerja Tahunan
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'lakin_-_lakip' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'lakin_-_lakip']) == url()->current() ? 'active' : ''}}">
                Lakin/Lakip
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'IKM' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'IKM']) == url()->current() ? 'active' : ''}}">
                IKM
            </li>
        </a>
        <a href="{{route('layanan',['service' => 'keuangan' ,'lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('layanan',['service' => 'keuangan']) == url()->current() ? 'active' : ''}}">
                Keuangan
            </li>
        </a>
    </ul>
</div>
