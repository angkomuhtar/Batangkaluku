<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark">
        {{__('general.gallery')}}
        </h3>
    </div>
    <ul class="menu-items space-y-1 py-7">
        <li class="flex">
            <a href="{{route('gallery.photo',['lang' => $lang])}}" 
                class="menu-links {{route('gallery.photo') == url()->current() ? 'active' : ''}}">
                {{__('general.album_photo')}}
            </a>
        </li>
        <li class="flex">
            <a href="{{route('gallery.video',['lang' => $lang])}}" 
                class="menu-links {{route('gallery.video') == url()->current() ? 'active' : ''}}">
                {{__('general.album_video')}}
            </a>
        </li>
    </ul>
</div>
