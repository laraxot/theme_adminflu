<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{trans('adm_theme::lang.'.last($containers).'_plural')}}<small
                        class="ml-3 mr-3">|</small><small>{{trans('adm_theme::lang.'.last($containers).'_desc')}}</small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>
                            {{trans('adm_theme::lang.dashboard')}}</a></li>
                    <li class="breadcrumb-item"><a
                            href="{{-- route('restaurants.index') --}}">{{trans('adm_theme::lang.'.last($containers).'_plural')}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{trans('adm_theme::lang.'.last($containers).'_table')}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
