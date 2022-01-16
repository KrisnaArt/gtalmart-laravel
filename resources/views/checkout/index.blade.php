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
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Produk</span>
                        <span class="badge badge-secondary badge-pill">{{ $product_count }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $product->name }}</h6>
                                <small class="text-muted">{{ $product->excerpt }}</small>
                            </div>
                            <span class="text-muted">@currency($product->price)</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (Rp)</span>
                            <strong>@currency($product->price)</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Halaman Checkout</h4>
                    <form action="/checkoutProduct" method="post">
                        @csrf
                        <input type="hidden" class="form-control" id="cart" name="cart" placeholder="cart"
                            value="{{ $cart->id }}">
                        <input type="hidden" class="form-control" id="category" name="category" placeholder="category"
                            value="{{ $product->category->id }}">
                        <input type="hidden" class="form-control" id="product_id" name="product_id" placeholder="product_id"
                            value="{{ $product->id }}">
                            <input type="hidden" class="form-control" id="status" name="status" placeholder="status"
                            value="Menunggu Pembayaran">
                        <div class="mb-3">
                            <label for="username">Nama</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username" value="{{ $user->name }}" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="you@example.com" value="{{ $user->email }}" required readonly>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
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
