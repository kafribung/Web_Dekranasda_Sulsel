<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="{{ asset('dash/images/logo.png') }}" title="Admin INR"
                    alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ url(Auth::user()->takeImg) }}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href=""
                        onclick="event.preventDefault(); document.getElementById('logout').submit();"><i
                            class="fa fa-power-off"></i>Logout
                    </a>
                    <form id="logout" action="{{ route('logout') }}" method="POST" style="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /#header -->