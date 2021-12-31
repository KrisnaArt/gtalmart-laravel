<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gtal-Mart</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Jquery UI -->
    <link type="text/css" href="css/jquery-ui.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="css/argon-design-system.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link type="text/css" href="css/style.css" rel="stylesheet">

    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    @include('partials.header')
    <!------------------------------------------
    SLIDER
    ------------------------------------------->
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-7">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                @if(session()->has('success'))
                <div class="alert alert-info alert-with-icon">
                  {{ session('success') }}
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span data-notify="icon" class="tim-icons icon-trophy"></span>
                </div>
                @endif
                @if(session()->has('loginError'))
                  <div class="alert alert-danger alert-with-icon">
                    {{ session('loginError') }}
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="tim-icons icon-trophy"></span>
                  </div>
                @endif
                <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
                <div class="btn-wrapper text-center">
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><i class="fab fa-google"></i></span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Or sign in with credentials</small>
                </div>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" type="email" name="email" id="email" autofocus required value="{{ old('email') }}">
                      @error('email') 
                        <div class="invalid-feedback"> 
                          {{ $message }} 
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password" name="password" id="password" required>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Login</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="#" class="text-light"><small></small></a>
              </div>
              <div class="col-6 text-right">
                <a href="/register" class="text-light"><small>Create new account</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('partials.footer')
    <!-- Core -->
    <script src="js/core/jquery.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/core/jquery-ui.min.js"></script>

    <!-- Optional plugins -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Argon JS -->
    <script src="js/argon-design-system.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
