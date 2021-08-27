
<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark">
        {{__('general.institution')}}
        </h3>
    </div>
    <ul class="menu-items space-y-1 py-7">
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
