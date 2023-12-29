        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>

            </div>

            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                             <div class="font-weight-bold text-dark">{{ Auth::user()->name }}</div>
                             @if (Auth()->user()->profile_photo_path)
                            <img class="user-avatar rounded-circle" src="{{ Storage::url(Auth()->user()->profile_photo_path) }}" alt="User Avatar">
                            @else
                            <img class="user-avatar rounded-circle" src="{{ asset('images/avatar/user_default.png') }}" alt="User Avatar">
                            @endif
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ route('profile.show') }}"><i class="fa fa-power -off"></i>Profile</a>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <button class="btn btn-danger btn-xs" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
