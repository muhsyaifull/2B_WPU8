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
            <a class="nav-link active" aria-current="page" href="{{ route('UserPage') }}">Home</a>
            </li>
            <li class="ms-3">
            <form class="d-flex p-search" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </li>
            <li class="nav-item">
                <a href="{{ route('DaftarCV') }}" class="btn btn-primary ms-3 btn-width3" role="button">CV</a>
                <a href="{{ route('DataDiri') }}" class="btn btn-primary ms-3 btn-width5" role="button">Create Data</a>
            </li>
        </ul>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </li>
            <li class="nav-item">
                {{-- <a href="{{ route('homepage') }}" class="btn btn-primary ms-3" role="button">Logout</a> --}}
            </li>
        </ul>
    </div>
</nav>