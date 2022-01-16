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
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Jquery UI -->
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">

    <!-- Argon CSS -->
    <link href="{{ asset('css/argon-design-system.min.css') }}" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    @include('partials.header')
    <section class="products-grid pb-4 pt-4">
        <div class="container">
            <h4 class="mb-3" style="text-align: center;font-weight: bold">Halaman Payment</h4>
            <hr class="mb-4">
            <div class="row justify-content-md-center">
                <div class="col-sm-6 mx-auto">
                    <div class="text-center">
                        <img src="img/asset/bni.jpg" width="100" height="100">
                    </div>
                    <h5 style="text-align: center;font-weight: bold">BNI</h5>
                    <h5 style="text-align: center;font-weight: bold">123 456 7890</h5>
                </div>
                <div class="col-sm-6 mx-auto">
                    <div class="text-center">
                        <img src="img/asset/bri.png" width="100" height="100">
                    </div>
                    <h5 style="text-align: center;font-weight: bold">BRI</h5>
                    <h5 style="text-align: center;font-weight: bold">1234.56.789012.34.5</h5>
                </div>
                <div class="col-sm-6 mx-auto">
                    <div class="text-center">
                        <img src="img/asset/mandiri.png" width="200" height="100">
                    </div>
                    <h5 style="text-align: center;font-weight: bold">Mandiri</h5>
                    <h5 style="text-align: center;font-weight: bold">123-45-6789012-3</h5>
                </div>
                <div class="col-sm-6 mx-auto">
                    <div class="text-center">
                        <img src="img/asset/bca.png" width="200" height="100">
                    </div>
                    <h5 style="text-align: center;font-weight: bold">BCA</h5>
                    <h5 style="text-align: center;font-weight: bold">1234 5678 90</h5>
                </div>
            </div>
            <form action="/payment" method="post">
                @csrf
                <input type="hidden" class="form-control" id="cart" name="cart" placeholder="cart"
                    value="{{ $cart->id }}">
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Sudah Transfer</button>
            </form>
        </div>
    </section>

    @include('partials.footer')
    <!-- Core -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery-ui.min.js') }}"></script>

    <!-- Optional plugins -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Argon JS -->
    <script src="{{ asset('js/argon-design-system.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
