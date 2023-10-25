<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLIV Website</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-icons">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="assets/img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            CLIV</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ms-5">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="ms-3">
                <form class="d-flex p-search" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                  </form>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
          </div>
          @guest
          <a href="{{ route('login-page') }}" class="btn btn-outline-secondary">Login</a>
          <a href="{{ route('register-page') }}" class="btn btn-primary ms-3" role="button">SignUp </a>
          @else
          <a href="{{ route('login') }}" class="nav-link active" >Profile</a>
          <a href="{{ route('logout') }}" class="btn btn-outline-secondary ms-5">Logout</a>
          @endguest
        </div>
      </nav>

      <div class="container-fluid bg-con">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <h1 class="font-jumbotron pt-5 pb-5 pe-5 ps-5">Profile Portfolio </h1>
                </div>      
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <p class="fontpenjelasan pt-5" >Buat Portfoliomu sendiri untuk <br>kebutuhan profil dan cv </p>
                <p class="fontpenjelasan pt-5">“A good portfolio is more than a long list of good stocks and bonds. It is a balanced whole, providing the investor with protections and opportunities with respect to a wide range of contingencies” <br>-Harry Markowits</p>
            </div>
        </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>