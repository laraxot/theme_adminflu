<head>
    <meta charset="UTF-8">
    <title>{{-- setting('app_name') --}} | {{-- setting('app_short_description') --}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" type="image/png" href="{{-- $app_logo --}}"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    @stack('css_lib')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{Theme::asset('adm_theme::dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-sweetalert/sweetalert.css')}}">
    {{--<!-- Bootstrap -->--}}
    {{--<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">--}}

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ Theme::asset('adm_theme::dist/css/custom.css') }}{{-- asset('css/custom.css') --}}">
    <link rel="stylesheet" href="{{ Theme::asset('adm_theme::dist/css/primary.css') }}{{-- asset('css/'.setting("theme_color","primary").'.css') --}}">
    @yield('css_custom')
    {!! Theme::showStyles(false) !!}
    @livewireStyles
</head>
