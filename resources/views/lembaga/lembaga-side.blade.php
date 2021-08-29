
<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark hidden lg:block">
            {{__('general.institution')}}
        </h3>
        <button class="lg:hidden" id="side-open"> 
            <i class="far fa-list-alt"></i>
        </button>
    </div>
    <ul class="menu-items hidden">
        <li class="flex">
            <a href="{{route('lembaga.tentang',['lang' => $lang])}}" 
                class="menu-links {{route('lembaga.tentang') == url()->current() ? 'active' : ''}}">
                {{__('general.about_us')}}
            </a>
        </li>
        <li class="flex">
            <a href="{{route('lembaga.struktur',['lang' => $lang])}}" 
                class="menu-links {{route('lembaga.struktur') == url()->current() ? 'active' : ''}}">
                {{__('general.org_structure')}}
            </a>
        </li>
        <li class="flex">
            <a href="{{route('lembaga.sdm',['lang' => $lang])}}" 
                class="menu-links {{route('lembaga.sdm') == url()->current() ? 'active' : ''}}">
                {{__('general.human_resources')}}
            </a>
        </li>
    </ul>
</div>
