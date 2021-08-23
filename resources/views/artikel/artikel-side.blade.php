<div class="rounded-sm border border-border py-4 px-2 w-full lg:w-auto">
    <div class="border-b border-border">
        <h3 class="text-title text-dark mb-4">
            {{__('general.news')}}
        </h3>
    </div>
    <ul class="py-3 space-y-1">
        <a href="{{route('artikel',['lang' => $lang,'type' => 'pelatihan'])}}">
            <li class="cursor-pointer side-menu {{route('artikel','pelatihan') == url()->current() ? 'active' : ''}}">
                {{__('general.artikel_pelatihan')}}
            </li>
        </a>
        <a href="{{route('artikel',['lang' => $lang,'type' => 'pertanian'])}}">
            <li class="cursor-pointer side-menu {{route('artikel','pertanian') == url()->current() ? 'active' : ''}}">
                {{__('general.artikel_pertanian')}}
            </li>
        </a>
        <a href="{{route('artikel',['lang' => $lang,'type' => 'umum'])}}">
            <li class="cursor-pointer side-menu {{route('artikel','umum') == url()->current() ? 'active' : ''}}">{{__('general.artikel_umum')}}</li>
        </a>
    </ul>
</div>
