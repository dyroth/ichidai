<div id="page-wrapper" class="gray-bg" @if(!\Illuminate\Support\Facades\Auth::user()->admin) style="margin: 0" @endif>
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            @if(\Illuminate\Support\Facades\Auth::user()->admin)
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
            @endif

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>{{ $title }}</h2>
        </div>

    </div>

    <div class="wrapper wrapper-content">
        @yield('content')
    </div>
{{--    @include('inspinia::layouts.main-panel.footer.main')--}}
</div>
