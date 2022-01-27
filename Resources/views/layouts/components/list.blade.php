<div class="content">
    <div class="clearfix"></div>
    @include('formx::includes.flash')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ $_panel->url('index') }}">
                        <i class="fa fa-list mr-2">
                        </i>{{ trans('adm_theme::lang.' . $last_container . '_table') }}
                    </a>
                </li>
                @can('create', $_panel)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $_panel->url('create') }}">
                            <i class="fa fa-plus mr-2"></i>
                            {{ trans('adm_theme::lang.' . $last_container . '_create') }}
                        </a>
                    </li>
                @endcan
                {{-- @include('layouts.right_toolbar', compact('dataTable')) --}}
            </ul>
        </div>
        <div class="card-body">
            {{ $content }}
            <div class="clearfix"></div>
        </div>
    </div>
</div>
