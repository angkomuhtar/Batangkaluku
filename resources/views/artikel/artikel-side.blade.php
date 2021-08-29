
<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark hidden lg:block">
            {{__('general.news')}}
        </h3>

        <button class="lg:hidden" id="side-open"> 
            <i class="far fa-list-alt"></i>
        </button>
    </div>
    <ul class="menu-items  hidden">
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

