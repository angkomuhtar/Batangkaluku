<div class="rounded-sm border border-border py-4 px-2 w-full lg:w-auto">
    <div class="border-b border-border">
        <h3 class="text-title text-dark mb-4">
            {{__('general.institution')}}
        </h3>
    </div>
    <ul class="py-3 space-y-1">
        <a href="{{route('lembaga.tentang',['lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('lembaga.tentang') === url()->current() ? 'active' : ''}}">
                {{__('general.about_us')}}
            </li>
        </a>
        <a href="{{route('lembaga.struktur',['lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('lembaga.struktur') === url()->current() ? 'active' : ''}}">{{__('general.org_structure')}}</li>
        </a>
        <a href="{{route('lembaga.sdm',['lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('lembaga.sdm') === url()->current() ? 'active' : ''}}">{{__('general.human_resources')}}</li>
        </a>
    </ul>
</div>
