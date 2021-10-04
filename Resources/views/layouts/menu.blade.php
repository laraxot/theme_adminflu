
<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{-- url('dashboard') --}}">@if($icons)
            <i class="nav-icon fa fa-dashboard"></i>@endif
        <p>{{trans('adm_theme::lang.dashboard')}}</p></a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('favorites*') ? 'active' : '' }}" href="{{-- route('favorites.index') --}}">@if($icons)
            <i class="nav-icon fa fa-heart"></i>@endif<p>{{trans('adm_theme::lang.favorite_plural')}}</p></a>
</li>


@include('adm_theme::layouts.partials.sidebar.menu')






