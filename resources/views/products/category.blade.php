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
    <section class="breadcrumb-section pb-3 pt-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/products">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $category_data->name }}</li>
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
                                <h3>Range Harga</h3>
                            </div>
                            <div class="widget-content shop-by-price">
                                <form method="post" action="{{ URL::current() }}">
                                    @csrf
                                    <div class="row col-12">
                                        <input type="text" id="min" name="min" placeholder="Min" size="2"
                                            class="mb-3" />
                                        <label> - </label>
                                        <input type="text" id="max" name="max" placeholder="Max" size="2"
                                            class="mb-3" />
                                        <button type="submit" onchange="this.form.submit()">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content widget-categories">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="/products-category/{{ $category->slug }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="products-top">
                                <div class="products-top-inner">
                                    <div class="products-found">
                                        <p><span>{{ $product_category }}</span> products found </p>
                                    </div>
                                    <div class="products-sort">
                                        <form method="post" action="{{ URL::current() }}">
                                            @csrf
                                            <span>Sort By : </span>
                                            <select name="sort" id="sort" onchange="this.form.submit()">
                                                @foreach ($sorts as $sort)
                                                    <option value="{{ $sort['name'] }}"
                                                        {{ $sort['name'] == old($sort['name']) ? 'selected' : '' }}>
                                                        {{ $sort['title'] }}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/products/{{ $product->slug }}">
                                            @if ($product->image)
                                                <div style="max-height: 400px;max-width: 400px; overflow: hidden;">
                                                    <img src="{{ asset('storage/' . $product->image) }}"
                                                        class="img-fluid" />
                                                @else
                                                    <img src="https://picsum.photos/200/300" class="img-fluid" />
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="/products/{{ $product->slug }}">{{ $product->name }}</a></h3>
                                        <div class="product-price">
                                            <span>@currency( $product->price )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $products->links() }}
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
