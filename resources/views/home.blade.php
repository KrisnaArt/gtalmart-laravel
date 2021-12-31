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
    <section class="slider-section pt-4 pb-4">
        <div class="container">
            <div class="slider-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner shadow-sm rounded">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/slides/slide1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Mountains, Nature Collection</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/slides/slide2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Freedom, Sea Collection</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/slides/slide3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Living the Dream, Lost Island</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-info mr-4">
                            <i class="fas fa-user-clock"></i>
                        </div>
                        <div class="media-body">
                            <h5>Proses Lebih Cepat</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-purple mr-4">
                            <i class="far fa-credit-card"></i>
                        </div>
                        <div class="media-body">
                            <h5>Pembayaran Transfer</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="iconbox iconmedium rounded-circle text-warning mr-4">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="media-body">
                            <h5>Garansi Uang Kembali</h5>
                            <p class="text-muted">
                                All you have to do is to bring your passion. We take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <section class="products-grids trending pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Items</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="img/products/p1.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="img/products/p2.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="img/products/p3.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-detail.html">
                                <img src="img/products/p4.jpg" class="img-fluid" />
                            </a>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-detail.html">Cool &amp; Awesome Item</a></h3>
                            <div class="product-price">
                                <span>$57.00</span>
                            </div>
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
