 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand 0 navbar-light bg-white{{-- setting('fixed_header','') --}} {{-- setting('nav_color','navbar-lightbg-white') --}} border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('dashboard')}}" class="nav-link">{{trans('adm_theme::lang.dashboard')}}</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @if(env('APP_CONSTRUCTION',false))
            <li class="nav-item">
                <a class="nav-link text-danger" href="#"><i class="fa fa-info-circle"></i>
                    {{env('APP_CONSTRUCTION','') }}</a>
            </li>
        @endif
        @can('carts.index')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('carts*') ? 'active' : '' }}" href="{!! route('carts.index') !!}"><i class="fa fa-shopping-cart"></i></a>
            </li>
        @endcan
        @can('notifications.index')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}" href="{!! route('notifications.index') !!}"><i class="fa fa-bell"></i></a>
            </li>
        @endcan
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{-- auth()->user()->getFirstMediaUrl('avatar','icon') --}}" class="brand-image mx-2 img-circle elevation-2" alt="User Image">
                <i class="fa fa fa-angle-down"></i> {!! auth()->user()->name !!}

            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{-- route('users.profile') --}}" class="dropdown-item"> <i class="fa fa-user mr-2"></i> {{trans('adm_theme::lang.user_profile')}} </a>
                <div class="dropdown-divider"></div>
                <a href="{!! url('/logout') !!}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-envelope mr-2"></i> {{__('auth.logout')}}
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</nav>
