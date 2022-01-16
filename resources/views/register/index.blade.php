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
    <link href="css/jquery-ui.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link href="css/argon-design-system.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/style.css" rel="stylesheet">

    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    @include('partials.header')
    <!------------------------------------------
    SLIDER
    ------------------------------------------->
    <div class="wrapper">
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
                  <div class="text-muted text-center mb-3"><h5>Sign Up</h5></div>
                  {{-- <div class="text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><i class="fab fa-google"></i></span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                  </div> --}}
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  {{-- <div class="text-center text-muted mb-4">
                    <small>Or sign up with credentials</small>
                  </div> --}}
                  <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                        @error('name') 
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" type="email" name="email" id="email" required value="{{ old('email') }}">
                        @error('email') 
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password" id="password" required>
                        @error('password') 
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="row my-4">
                      <div class="col-12">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary mt-4">Create account</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  <a href="#" class="text-light"><small></small></a>
                </div>
                <div class="col-6 text-right">
                  <a href="/login" class="text-light"><small>Have an Account</small></a>
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
