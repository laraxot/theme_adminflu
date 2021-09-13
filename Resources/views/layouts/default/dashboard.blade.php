@extends('adm_theme::layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header content-header{{-- setting('fixed_header') --}}">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>{{trans('adm_theme::lang.dashboard')}}</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">{{trans('adm_theme::lang.dashboard')}}</a></li>
					<li class="breadcrumb-item active">{{trans('adm_theme::lang.dashboard')}}</li>
				</ol>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<div class="content">
	<div class="row">
        @php
		$panel=Panel::get(\Auth::user());
		//ddd($panel->areas());
		//$areas=\Auth::User()->areaAdminAreas;
        $areas=$panel->areas();
        //dddx($areas);
        @endphp

        @foreach($areas as $area)
            @component('adm_theme::layouts.components.widgets.card',$area->toArray())
            @slot('body')
                <span style="text-align: center;background-color:darkorange;">
                <img src="{{ $area->icon_src }}"  height="50px" width="50px"/>
                </span>
            @endslot
            @endcomponent
		@endforeach
	</div>
</div>
@endsection
