@php
$menus = Theme::getXmlMenu();
//$menus=Theme::getAdminJsonMenu();
@endphp

@if (isset($menus[0]))
    @foreach ($menus[0] as $el)
        <li class="nav-header">{{ $el->nome }}</li>
        @foreach ($menus[$el->id] as $sub_el)
            @if (!isset($menus[$sub_el->id]))
                <li class="nav-item">
                    <a class="nav-link" href="{{ $sub_el->url }}">
                        {!! $sub_el->icon ?? '' !!}
                        <p>{{ $sub_el->nome }}</p>
                    </a>
                </li>
            @else
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        {!! $sub_el->icon ?? '' !!}
                        <p>{{ $sub_el->nome }} <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($menus[$sub_el->id] as $sub_sub_el)

                            @if (!isset($menus[$sub_sub_el->id]))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $sub_sub_el->url }}">
                                        {!! $sub_sub_el->icon ?? '' !!}
                                        <p>{{ $sub_sub_el->nome }}</p>
                                    </a>
                                </li>
                            @else
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        {!! $sub_sub_el->icon ?? '' !!}
                                        <p>{{ $sub_sub_el->nome }} <i class="right fa fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @foreach ($menus[$sub_sub_el->id] as $sub_sub_sub_el)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ $sub_sub_sub_el->url }}">
                                                    {!! $sub_sub_sub_el->icon ?? '' !!}
                                                    <p>{{ $sub_sub_sub_el->nome }}</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    @endforeach
@endif
