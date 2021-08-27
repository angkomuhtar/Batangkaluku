
<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark">
            {{__('general.news')}}
        </h3>
    </div>
    <ul class="menu-items space-y-1 py-7">
        <li class="flex">
            <a href="{{route('artikel',['lang' => $lang,'type' => 'pelatihan'])}}" 
                class="menu-links {{route('artikel','pelatihan') == url()->current() ? 'active' : ''}}">
                {{__('general.artikel_pelatihan')}}
            </a>
        </li>
        <li class="flex">
            <a href="{{route('artikel',['lang' => $lang,'type' => 'pertanian'])}}" 
                class="menu-links {{route('artikel','pertanian') == url()->current() ? 'active' : ''}}">
                {{__('general.artikel_pertanian')}}
            </a>
        </li>
        <li class="flex">
            <a href="{{route('artikel',['lang' => $lang,'type' => 'umum'])}}" 
                class="menu-links {{route('artikel','umum') == url()->current() ? 'active' : ''}}">
                {{__('general.artikel_umum')}}
            </a>
        </li>
    </ul>
</div>

