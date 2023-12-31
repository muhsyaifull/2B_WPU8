<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-icons">
  </head>

  <body>
    <body>
      <div class="bodyLogin">
        <div class="position-absolute top-50 start-50 translate-middle">
              <div class="card">
                  <div class="card-body text-center">
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                          <h1 class="bold-lgn mt-5 me-3 ms-3">REGISTER</h1>
                          {{-- <div class="username p-form">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="username" class="form-control sz-input" id="inputUsername3" placeholder="Masukkan Username" style="width: 100%;" name="username">
                            </div>
                            </div>

                          <div class="username p-form">
                              <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control sz-input" id="inputEmail3" placeholder="Masukkan Email" style="width: 100%;" name="email">
                              </div>
                          </div>

                          <div class="password mt-3 mb-3 p-form">
                              <div class="col-sm-10">
                                  <input type="password" class="form-control sz-input" id="inputPassword3" placeholder="Masukkan Password" style="width: 100%;" name="password">
                              </div>
                          </div>

                          <div class="password mt-3 mb-3 p-form">
                            <div class="col-sm-10">
                                <input type="password" class="form-control sz-input" id="inputPassword3" placeholder="Konfirmasi Password" style="width: 100%;">
                            </div>
                        </div> --}}
                        <div class="mb-3 ms-5 me-5">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" />
                        </div>
                        <div class="mb-3 ms-5 me-5">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                        </div>
                        <div class="mb-3 ms-5 me-5">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                        </div>
                        <div class="mb-3 ms-5 me-5">
                            <label>Password Confirmation<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password_confirm" />
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mt-4">Daftar</button>
                        </div>

                      </form>
                  </div>
              </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </div>
  </body>
  </html>