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
    <section class="breadcrumb-section pb-3 pt-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Whistlist</li>
            </ol>
        </div>
    </section>
    <section class="products-grid pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        @foreach ($whislists as $whislist)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/products/{{ $whislist->product->slug }}">
                                            @if ($whislist->product->image)
                                                <div style="max-height: 400px;max-width: 400px; overflow: hidden;">
                                                    <img src="{{ asset('storage/' . $whislist->product->image) }}"
                                                        class="img-fluid" />
                                                @else
                                                    <img src="https://picsum.photos/200/300" class="img-fluid" />
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/{{ $whislist->product->slug }}">{{ $whislist->product->name }}</a></h3>
                                        <div class="product-price">
                                            <span>@currency( $whislist->product->price )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $whislists->links() }}
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
