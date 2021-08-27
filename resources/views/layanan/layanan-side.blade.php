<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark">
            {{__('general.serv_n_info')}}
        </h3>
    </div>
    <ul class="menu-items space-y-1 py-7">
        <li>
           <ul class="pb-5 space-y-1">
               <li>
                   <p class="text-sm font-semibold">
                       Regulasi
                   </p>
               </li>
               <li class="flex">
                   <a href="{{route('layanan',['service' => 'sop_balai' ,'lang' => $lang])}}" 
                       class="menu-links {{route('layanan',['service' => 'sop_balai']) == url()->current() ? 'active' : ''}}">
                       SOP Balai
                    </a>
                </li>
                <li class="flex">
                     <a href="{{route('layanan',['service' => 'jaringan_informasi_dan_dokumentasi' ,'lang' => $lang])}}" 
                        class="menu-links {{route('layanan',['service' => 'jaringan_informasi_dan_dokumentasi']) == url()->current() ? 'active' : ''}}">
                        Jaringan Informasi dan Dokumentasi
                     </a>
                </li>
               <li class="flex">
                    <a href="{{route('layanan',['service' => 'surat_keputusan_balai' ,'lang' => $lang])}}" 
                       class="menu-links {{route('layanan',['service' => 'surat_keputusan_balai']) == url()->current() ? 'active' : ''}}">
                       Surat Keputusan Balai 
                    </a>
               </li>
           </ul> 
        </li>
        <li>
            <p class="text-sm font-semibold">
                Informasi Publik
            </p>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'info_pelatihan' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'info_pelatihan']) == url()->current() ? 'active' : ''}}">
                Info Pelatihan
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'pejabat_LHKPN_-_LHKASN' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'pejabat_LHKPN_-_LHKASN']) == url()->current() ? 'active' : ''}}">
                Pejabat LHKPN/LHKASN
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'rencana_strategis' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'rencana_strategis']) == url()->current() ? 'active' : ''}}">
                Rencana Strategis
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'rencana_kerja_tahunan' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'rencana_kerja_tahunan']) == url()->current() ? 'active' : ''}}">
                Renacana Kerja Tahunan
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'lakin_-_lakip' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'lakin_-_lakip']) == url()->current() ? 'active' : ''}}">
                Lakin / Lakip
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'IKM' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'IKM']) == url()->current() ? 'active' : ''}}">
                IKM
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'keuangan' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'keuangan']) == url()->current() ? 'active' : ''}}">
                Keuangan
            </a>
        </li>
        <li class="flex">
            <a href="{{route('layanan',['service' => 'aset' ,'lang' => $lang])}}" 
                class="menu-links {{route('layanan',['service' => 'aset']) == url()->current() ? 'active' : ''}}">
                Aset
            </a>
        </li>
    </ul>
</div>
