<div class="rounded-sm border border-border py-4 px-2 w-full lg:w-auto">
    <div class="border-b border-border">
        <h3 class="text-title text-dark mb-4 whitespace-nowrap">
            {{__('general.gallery')}}
        </h3>
    </div>
    <ul class="py-3 space-y-1">
        <a href="{{route('gallery.photo',['lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('gallery.photo') == url()->current() ? 'active' : ''}}">
                {{__('general.album_photo')}}
            </li>
        </a>
        <a href="{{route('gallery.video',['lang' => $lang])}}">
            <li class="cursor-pointer side-menu {{route('gallery.video') == url()->current() ? 'active' : ''}}">
                {{__('general.album_video')}}
            </li>
        </a>
    </ul>
</div>
