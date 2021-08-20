<div class="top-bar color-scheme-transparent">
    <!--------------------
    START - Top Menu Controls
    -------------------->
    <div class="top-menu-controls">

        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <img alt="" src="{{asset('assets')}}/img/user-0.png"/>
                </div>
                <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="" src="{{asset('assets')}}/img/user-0.png"/>
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{auth()->user()->name ?? 'Guest'}}
                            </div>
                            <div class="logged-user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="{{route('dashboard.profile')}}"><i
                                    class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="#logout-form" id="logout-button"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                            <form action="{{route('logout')}}" method="post" id="logout-form"></form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------------
        END - User avatar and menu in secondary top menu
        -------------------->
    </div>
    <!--------------------
    END - Top Menu Controls
    -------------------->
</div>
@push('addon-script')
    <script>
        $('#logout-button').click(function (e){
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).submit();
        })
    </script>
@endpush
