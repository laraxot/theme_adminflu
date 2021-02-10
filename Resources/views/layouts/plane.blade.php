<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ \App::getLocale() }}" class="no-js">
<!--<![endif]-->
@section('htmlheader')
    @include('adm_theme::layouts.htmlheader')
@show
<body class="{{ isset($body_class)?$body_class:'' }}" >
	@yield('body')

	@section('scripts')
    	@include('adm_theme::layouts.scripts')
	@show

</body>
</html>


