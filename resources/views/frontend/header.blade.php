<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
        <h1 class="text-light"><span>Pathao Courier</span></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active " href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('services')}}">Services</a></li>
        <li><a href="{{route('gallery')}}">Gallery</a></li>
        <li><a href="{{route('team')}}">Team</a></li>
        
        <li><a href="{{route('contact')}}">Contact Us</a></li>
      <!-- </ul>
      <ul class="pull-right navbar-nav"> -->
      @if (Route::has('login'))
        @auth
          <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
          <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link">Logout</a></li>
        @else
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Log in</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
          @endif
        @endauth

      @endif
    </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->

  </div>
</header><!-- End Header -->
