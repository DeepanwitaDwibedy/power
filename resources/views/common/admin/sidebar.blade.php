<nav class="sidebar sidebar-bunker">
    <div class="sidebar-header">
        <a href="#" class="logo" style="color: #fff"><span>SHREE</span>GANESH</a>
        {{--<a href="index.html" class="logo"><img src="{{ asset('admin/assets/dist/img/logo.png') }}" alt=""></a>--}}
    </div><!--/.sidebar header-->
    {{--<div class="profile-element d-flex align-items-center flex-shrink-0">--}}
        {{--<div class="avatar online">--}}
            {{--<img src="{{ asset('admin/assets/dist/img/avatar-1.jpg') }}" class="img-fluid rounded-circle" alt="">--}}
        {{--</div>--}}
        {{--<div class="profile-text">--}}
            {{--<h6 class="m-0">Naeem Khan</h6>--}}
            {{--<span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="9cf9e4fdf1ecf0f9dcfbf1fdf5f0b2fff3f1">[email&#160;protected]</a></span>--}}
        {{--</div>--}}
    {{--</div><!--/.profile element-->--}}
    {{--<form class="search sidebar-form" action="#" method="get" >--}}
        {{--<div class="search__inner">--}}
            {{--<input type="text" class="search__text" placeholder="Search...">--}}
            {{--<i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>--}}
        {{--</div>--}}
    {{--</form><!--/.search-->--}}
    <div class="sidebar-body">
        <nav class="sidebar-nav">
            <ul class="metismenu">
                <li class="@yield('dashboard')"><a href="{{ url('/dashboard') }}" ><i class="typcn typcn-home-outline mr-2"></i> Dashboard</a></li>
                <li class="@yield('blogs')"><a href="{{ url('/blogs') }}"><i class="typcn typcn-puzzle-outline mr-2"></i>BLOG</a></li>

            </ul>
        </nav>
    </div><!-- sidebar-body -->
</nav>