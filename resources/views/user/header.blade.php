
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">GymFit</h1><span>.</span>
      </a>

      @guest
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#portfolio">Galeri</a></li>
          <li><a href="/#pricing">Membership</a></li>
          <li><a href="/#team">Trainer</a></li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @endguest

      @auth
      @guest
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#portfolio">Galeri</a></li>
          <li><a href="/#pricing">Membership</a></li>
          <li><a href="/#team">Trainer</a></li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @endguest

      @auth
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="">Home</a></li>
          <li><a href="/#pricing">Membership</a></li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      @endauth
      @guest
      <a class="btn-getstarted" href="/login">Get Started</a>
      <a class="btn-getstarted" href="/login">Get Started</a>
      @endguest
      @auth
      <a class="btn-getstarted" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      @endauth

    </div>
  </header>