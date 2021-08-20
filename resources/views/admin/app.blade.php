<!DOCTYPE html>
<html>
<head>
    @include('admin.partials.head')
    @stack('addon-style')
</head>
<body class="menu-position-side menu-side-left full-screen">
<div class="all-wrapper with-side-panel solid-bg-all">
    <div class="layout-w">
    @include('admin.partials.sidebar-mobile')
    @include('admin.partials.sidebar')
    <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
            <!--------------------
            START - Top Bar
            -------------------->
        @include('admin.partials.topbar')
        <!--------------------
            END - Top Bar
            --------------------><!--------------------
          START - Breadcrumbs
          -------------------->
        @include('admin.partials.breadcrumbs')
        <!--------------------
            END - Breadcrumbs
            -------------------->
            <div class="content-i">
                <div class="content-box">
                @yield('content')
                <!--------------------
                      START - Color Scheme Toggler
                      -------------------->
                    <div class="floated-colors-btn first-floated-btn">
                        <div class="os-toggler-w">
                            <div class="os-toggler-i">
                                <div class="os-toggler-pill"></div>
                            </div>
                        </div>
                        <span>Dark </span><span>Colors</span>
                    </div>
                    <!--------------------
                    END - Color Scheme Toggler
                    -------------------->
                </div>
            </div>
        </div>
    </div>
    <div class="display-type"></div>
</div>
@include('admin.partials.script')
@stack('addon-script')
</body>
</html>
