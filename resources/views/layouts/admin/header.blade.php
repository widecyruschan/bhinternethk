<nav class="navbar navbar-default navbar-fixed-top navbar-top" style="">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link is-active no-animation">
                <span class="hamburger-inner"></span>
            </button>
            <ol class="breadcrumb hidden-xs">
                <li class="active"><i class="voyager-boat"></i> Join Events</li>
            </ol>
        </div>
        <ul class="nav navbar-nav  navbar-right ">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false"><img src="/storage/users/default.png" class="profile-img"> <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="/storage/users/default.png" class="profile-img">
                        <div class="profile-body">
                            <h5 style="font-weight: bold">{{ auth()->user()->name }}</h5>
                            <h5 style="margin: 0;">{{ auth()->user()->email }}</h5>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="class-full-of-rum">
                        <a href="/admin/profile">
                            <i class="voyager-person"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="voyager-home"></i>
                            Website
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="btn btn-danger btn-block">
                            <i class="voyager-power"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
