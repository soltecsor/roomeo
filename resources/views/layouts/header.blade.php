<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">

        <div class="navbar-header">
            <a class="navbar-brand">
                <span>
                    <img src="http://roomeouk.com/roomeo/public/images/logoH.png" alt="homepage" width="100px" height="100%"/>
                </span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0"></ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('public/images/uploads').'/'.$avatar}}"  alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{ asset('public/images/uploads').'/'.$avatar}}" alt="user"></div>
                                    <div class="u-text">
                                        <h5>{{ Auth::user()->name }}</h5>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                        <a href="{!! url('/') !!}" class="btn btn-rounded btn-danger btn-sm"><i class="fa fa-eye"></i> Display Site</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{!! url('/profile') !!}"><i class="ti-user"></i> My Profile</a></li>
                            <li>
                                <a  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Logout</a>
                                </a>

                                <form id="logout-form" action="logoff" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>