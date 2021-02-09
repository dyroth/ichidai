<ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    @include('admin._partials.menu-with-sub-items', ['title' => $title, 'config' => config('cms')])
    @if (\App\Ichidai\Setting\Helpers\Modules::membersEnabled())
        @include('admin._partials.menu-with-sub-items', ['title' => $title, 'config' => config('members')])
    @endif
</ul>
