<ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="{{ in_array($title, array_keys($config['items'])) ? 'active' : '' }}">
        <a href="#"><i class="{{ $config['icon'] }}"></i> <span class="nav-label">{{ $config['title'] }}</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            @foreach($config['items'] as $itemTitle => $item)
                <li {{ $title == $itemTitle ? 'class=active' : '' }}>
                    <a href="{{ route($item['route']) }}"><i class="{{ $item['icon'] }}"></i> <span class="nav-label">{{ $itemTitle }}</span></a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
