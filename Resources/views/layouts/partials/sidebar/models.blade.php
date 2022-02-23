@php
if (!isset($params['module'])) {
    return;
}
$models = getModuleModels($params['module']);
$container0 = Arr::first($containers);
@endphp
<li class="nav-header">Models</li>
@foreach ($models as $k => $v)
    @php
        $m = new $v();
        $panel = Panel::make()->get($m);
        $url = $panel->url('index');
    @endphp
    <li class="nav-item">
        <a class="nav-link" href="{{ $url }}">
            <p>{{ $k }} </p>
        </a>
    </li>
@endforeach
