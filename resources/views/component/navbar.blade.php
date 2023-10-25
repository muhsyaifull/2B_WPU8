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