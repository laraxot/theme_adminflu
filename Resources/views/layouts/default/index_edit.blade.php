@php
//dddx(get_defined_vars());
$last_container = last($containers);
@endphp

@extends('adm_theme::layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <small class="ml-3 mr-3">|</small>
                        <small>{{ trans('adm_theme::lang.' . $last_container . '_desc') }}</small>
                    </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/dashboard') }}">
                                <i class="fa fa-dashboard">
                                </i> {{ trans('adm_theme::lang.dashboard') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{-- route('restaurants.index') --}}">{{ trans('adm_theme::lang.' . $last_container . '_plural') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ trans('adm_theme::lang.' . $last_container . '_table') }}</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="clearfix">

        </div>
        <x-flash-message />
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{-- url()->current() --}}">
                            <i class="fa fa-list mr-2">
                            </i>{{ trans('adm_theme::lang.' . $last_container . '_table') }}
                        </a>
                    </li>
                    @can('create', $_panel)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $_panel->url('create') }}">
                                <i class="fa fa-plus mr-2">

                                </i>
                                {{ trans('adm_theme::lang.' . $last_container . '_create') }}
                            </a>
                        </li>
                    @endcan

                    {{-- @include('layouts.right_toolbar', compact('dataTable')) --}}
                </ul>
            </div>
            <div class="card-body">
                {{-- @include('restaurants.table')
        {!! $_panel->dataTable()->table() !!} --}}
                @include('adm_theme::layouts.default.index.table')
                <div class="clearfix">

                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('scripts')
  <script>
    {!! $_panel->dataTable()->scripts() !!}
  </script>
  @endpush --}}
