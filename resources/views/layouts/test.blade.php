<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default Title')</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-icons">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{ asset('assets/img/Image.png') }}" type="image/png">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      {{-- <i class='bx bxl-c-plus-plus'></i> --}}
      <img src="assets/img/Image.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      <span class="logo_name">CLIV</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="/e">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/e">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Input Profile</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Input Profile</a></li>
          <li><a href="/a">Data Diri</a></li>
          <li><a href="/pendidikan">Riwayat Pendidikan</a></li>
          <li><a href="/pekerjaan">Riwayat Pekerjaan</a></li>
          <li><a href="/skill">Skill</a></li>
        </ul>
      </li>

      <li>
        <a href="/f">
          <i class="bi bi-file-earmark-person"></i>
          <span class="link_name">CV</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/f">CV</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      {{-- <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li> --}}
      <li>
        <a href="#">
          
          <i class='bx bx' ><img src="{{ asset('assets/img/aboutUs.png') }}" alt="aboutUs" width="25" height="25"></i>
          <span class="link_name">About Us</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/ProfilePage/1">About Us</a></li>
          
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>

      <li>
    <div class="profile-details">
      @auth
      <div class="profile-content">
        {{-- <img src="image/profile.jpg" alt="profileImg"> --}}
        <a href="{{ route('password') }}"><i class="bi bi-pencil-square"></i></a>
      </div>
      <div class="name-job">
        <div class="profile_name"><b>{{ Auth::user()->name }}</b></div>
        <div class="job"><b>{{ Auth::user()->username }}</b></div>
      </div>
      <a href="{{ route('logout') }}"><i class='bx bx-log-out'></i></a>
      @endauth
      @guest
      <a href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right">Login</i></a>
      <a href="{{ route('register') }}"><i class="bi bi-r-square">Register</i></a>
      @endguest
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      @auth
      <span class="text"><p>Welcome {{ Auth::user()->name }}</p></span>
      {{-- <p>Welcome <b>{{ Auth::user()->name }}</b></p> --}}
      {{-- <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
      <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a> --}}
      @endauth
      @guest
      <span class="text"><p>Welcome to CLIV</p></span>
      {{-- <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
      <a class="btn btn-info" href="{{ route('register') }}">Register</a> --}}
      @endguest
    </div>
    @auth
      @yield('content')
    @endauth
    @guest
    <h3>You cannot access this page without logging in. Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a>.</h3>
    @endguest
    {{-- @yield('content') --}}
  </section>

  <script src="{{ asset('assets/script.js') }}"></script>
  
</body>
</html>
