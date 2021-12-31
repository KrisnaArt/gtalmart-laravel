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
    Page Header
    ------------------------------------------->
    <section class="breadcrumb-section pb-3 pt-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
        </div>
    </section>
    <section class="products-grid pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="widget-title">
                                <h3>My Account</h3>
                            </div>
                            <div class="widget-content widget-categories">
                                <ul>
                                  <li><a href="#">Detail Profile</a></li>
                                  <li><a href="#">Transaksi</a></li>
                                  <li><a href="#">Download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                  <div class="card-header pr-5">
                    Featured
                  </div>
                  <div class="card-body pr-5">
                    <h5 class="card-title pr-5">Special title treatment</h5>
                    <p class="card-text pr-5">Dari Halaman ini anda bisa melihat detail profile,transaksi,download.</p>
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
