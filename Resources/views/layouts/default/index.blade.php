@php
//dddx(get_defined_vars());
$last_container=last($containers);
@endphp

@extends('adm_theme::layouts.app')

@section('content')
    @component('adm_theme::layouts.components.list', get_defined_vars())
        @slot('content')

            @livewire('index')

        @endslot
    @endcomponent
@endsection
