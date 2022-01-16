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
    <!------------------------------------------
    Page Header
    ------------------------------------------->
    <section class="breadcrumb-section pb-3 pt-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </div>
    </section>
    <section class="products-grid pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="card w-100">
                    <div class="card-header text-center">
                        Cart
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Produk</th>
                                    <th>Category</th>
                                    <th>Harga</th>
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $cart->product->name }}</td>
                                        <td>{{ $cart->product->category->name }}</td>
                                        <td>@currency($cart->product->price)</td>
                                        <td>
                                            <form action="/checkout" method="post" class="d-inline">
                                                @csrf
                                                <input type="hidden" value={{ $cart->product->id }} id="product_id"
                                                    name="product_id">
                                                <input type="hidden" value={{ $cart->id }} id="cart"
                                                    name="cart">
                                                <button class="btn btn-success btn-icon btn-sm" type="submit">
                                                    Buy Now
                                                </button>
                                            </form>
                                            <form action="/carts/{{ $cart->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-icon btn-sm" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
