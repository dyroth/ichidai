<ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li {{ $title == 'Introductie' ? 'class=active' : '' }}>
        <a href="{{ route('admin.introduction.edit') }}"><i class="fa fa-info"></i> <span class="nav-label">Introductie</span></a>
    </li>    <li {{ $title == 'Lesgevers' ? 'class=active' : '' }}>
        <a href="{{ route('admin.coaches.index') }}"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Lesgevers</span></a>
    </li>
    <li {{ $title == 'Lessen' ? 'class=active' : '' }}>
        <a href="{{ route('admin.lessons.index') }}"><i class="fa fa-book"></i> <span class="nav-label">Lessen</span></a>
    </li>
{{--    <li {{ $title == 'Lestijden' ? 'class=active' : '' }}>--}}
{{--        <a href="{{ route('admin.lesson_times.index') }}"><i class="fa fa-clock-o"></i> <span class="nav-label">Lestijden</span></a>--}}
{{--    </li>--}}
</ul>

{{--            <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">--}}
{{--                <li class="">--}}
{{--                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>--}}
{{--                    <ul class="nav nav-second-level">--}}
{{--                        <li><a href="search_results.html">Search results</a></li>--}}
{{--                        <li><a href="lockscreen.html">Lockscreen</a></li>--}}
{{--                        <li><a href="invoice.html">Invoice</a></li>--}}
{{--                        <li><a href="login.html">Login</a></li>--}}
{{--                        <li><a href="login_two_columns.html">Login v.2</a></li>--}}
{{--                        <li><a href="forgot_password.html">Forget password</a></li>--}}
{{--                        <li><a href="register.html">Register</a></li>--}}
{{--                        <li><a href="404.html">404 Page</a></li>--}}
{{--                        <li><a href="500.html">500 Page</a></li>--}}
{{--                        <li class="active"><a href="empty_page.html">Empty page</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
