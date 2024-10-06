<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename"><span>green</span>Space</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : ''}}">Home</a></li>
                <li><a href="{{ route('application') }}" class="{{ request()->is('application') ? 'active' : ''}}">Application</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : ''}}">About</a></li>
                @if(auth()->check())
                    <li><a href="{{ route('home') }}" class="">Profile</a></li>
                    <li><a href="{{ route('logout') }}" class="">Log out</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : ''}}">Login</a></li>
                    <li><a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : ''}}">Register</a></li>
                @endif
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
