<header class="header-navbar fixed">

    <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>

    <div class="header-wrapper">

        <div class="header-left" style="display: none">
            <div class="theme-switch-icon"></div>
        </div>

        <div class="header-content">

           
            <div class="dropdown dropdown-menu-end">
                <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="label">
                        <span></span>
                        <div>{{Auth::user()->name}}</div>
                    </div>
                    <img class="img-user rounded-circle" src="{{asset('/assets/images/'.Auth::user()->image)}}" alt="user"srcset="">
                </a>
                <ul class="dropdown-menu small">
                    <!-- <li class="menu-header">
                        <a class="dropdown-item" href="#">Notifikasi</a>
                    </li> -->
                    <li class="menu-content ps-menu">
                        <a href="{{route('profile.index')}}">
                            <div class="description">
                                <i class="ti-user"></i> Perfil
                            </div>
                        </a>
                        <a href="{{route('profile.password')}}">
                            <div class="description">
                                <i class="ti-lock"></i> Senha
                            </div>
                        </a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit()">
                                <div class="description">
                                    <i class="ti-power-off"></i> Logout
                                </div>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>