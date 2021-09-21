<!DOCTYPE html>
<html lang="{{-- setting('language','en') --}}" dir="ltr">
@include('adm_theme::layouts.htmlheader')

<body style="height: 100%; background-color: #f9f9f9;" class="hold-transition sidebar-mini primary{{-- setting('theme_color') --}}">
    <div class="wrapper">
        <!-- Main Header -->
        @include('adm_theme::layouts.partials.headernav')


        @include('adm_theme::layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @if (isset($_panel))
                {!! Theme::include('page_header',[],get_defined_vars() ) !!}
            @endif

            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer {{-- setting('fixed_footer','') --}}">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> {{implode('.',str_split(substr(config('installer.currentVersion','v100'),1,3)))}}
            </div>
            <strong>Copyright © {{date('Y')}} <a href="{{url('/')}}">{{-- setting('app_name') --}}</a>.</strong> All rights reserved.
        </footer>

    </div>
    @include('adm_theme::layouts.scripts')
</body>
</html>
