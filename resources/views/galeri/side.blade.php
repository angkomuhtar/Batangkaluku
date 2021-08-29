<div class="menu-side">
    <div class="menu-side-header">
        <h3 class="text-title text-dark hidden lg:block">
        {{__('general.gallery')}}
        </h3>
        <button class="lg:hidden" id="side-open"> 
            <i class="far fa-list-alt"></i>
        </button>
    </div>
    <ul class="menu-items hidden">
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
