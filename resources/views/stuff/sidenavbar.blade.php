<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="advance-admin/assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        {{ Auth::user()->name }}
                    <br />
                        <small></small>
                    </div>
                </div>

            </li>
            <li>
                <a class="active-menu" href="{{ route('stuff.stuffhome') }}"><i class="fa fa-dashboard "></i>Request</a>
            </li>
            <li>
                <a href="{{ route('stuff.priviousrequest') }}"><i class="fa fa-desktop "></i>Previous Requests</span></a>
            </li>

        </ul>

    </div>

</nav>