<ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    @include('admin._partials.menu-with-sub-items', ['title' => $title, 'config' => config('cms')])
    @include('admin._partials.menu-with-sub-items', ['title' => $title, 'config' => config('members')])
</ul>
