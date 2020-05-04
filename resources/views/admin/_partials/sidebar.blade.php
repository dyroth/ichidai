<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">

        <ul class="nav metismenu" style="padding-left:0px;">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="clear">
            <span class="block m-t-xs">
              <strong class="font-bold">Administrator</strong>
            </span>
            <span class="text-muted text-xs block">{{ Auth::user()->name }}<b class="caret"></b></span>
          </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        {{--                        <li><a href="">Profile</a></li>--}}
                        {{--                        <li><a href="">Contacts</a></li>--}}
                        {{--                        <li><a href="">Mailbox</a></li>--}}
                        {{--                        <li class="divider"></li>--}}
                        <li>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        @section('sidebar-menu')
            @include('admin._partials.menu')
        @show
    </div>

</nav>
