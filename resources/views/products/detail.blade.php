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
                <li class="breadcrumb-item"><a href="/products">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </section>
    <section class="product-page pb-4 pt-4">
        <div class="container">
            <div class="row product-detail-inner">
                <div class="col-lg-6 col-md-6 col-12">
                    <div id="product-images" class="carousel slide" data-ride="carousel">
                        <!-- slides -->
                        <div class="carousel-inner">
                            @if ($products->image)
                                <div class="carousel-item active"> <img
                                        src="{{ asset('storage/' . $products->image) }}" alt="Product 1"> </div>
                            @else
                                <div class="carousel-item active"> <img src="https://picsum.photos/200/300"
                                        alt="Product 1"> </div>
                            @endif
                        </div> <!-- Left right -->
                        <a class="carousel-control-prev" href="#product-images" data-slide="prev"> <span
                                class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next"
                            href="#product-images" data-slide="next"> <span class="carousel-control-next-icon"></span>
                        </a><!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                    data-target="#product-images">
                                    @if ($products->image)
                                        <div class="carousel-item active"> <img
                                                src="{{ asset('storage/' . $products->image) }}" alt="Product 1">
                                        </div>
                                    @else
                                        <div class="carousel-item active"> <img src="https://picsum.photos/200/300"
                                                alt="Product 1"> </div>
                                    @endif
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="product-detail">
                        <h2 class="product-name">{{ $products->name }}</h2>
                        <div class="product-price">
                            <span class="price">@currency($products->price)</span>
                        </div>
                        <div class="product-short-desc">
                            <p>{{ $products->excerpt }}</p>
                        </div>
                        <div class="product-select">

                            <div class="row">
                                <div class="col-md-5">
                                    @auth
                                        <form action="/carts" method="post">
                                            @csrf
                                            <input type="hidden" value={{ auth()->user()->id }} id="user_id"
                                                name="user_id">
                                            <input type="hidden" value={{ $products->id }} id="product_id"
                                                name="product_id">
                                            <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                                        </form>
                                    @endauth
                                    @guest
                                        <a href="/login" class="btn btn-primary btn-block">Add to Cart</a>
                                    @endguest
                                </div>
                                <div class="col-md-4">
                                    @auth
                                        @if (URL::previous() == 'http://gtalmart-laravel.test/whislists') 
                                            <form action="/whislists/{{ $whislist->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-secondary"><span style="color:Red"><i
                                                            class="fas fa-heart"></i></span></button>
                                            </form>
                                        @else
                                            <form action="/whislists" method="post">
                                                @csrf
                                                <input type="hidden" value={{ auth()->user()->id }} id="user_id"
                                                    name="user_id">
                                                <input type="hidden" value={{ $products->id }} id="product_id"
                                                    name="product_id">
                                                <button type="submit" class="btn btn-secondary"><i
                                                            class="fas fa-heart"></i></button>
                                            </form>
                                        @endif
                                    @endauth
                                    @guest
                                        <a href="/login" class="btn btn-secondary"><i class="far fa-heart"></i></a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <div class="product-categories">
                            <ul>
                                <li class="categories-title">Category :</li>
                                <li><a
                                        href="/products-category/{{ $products->category->slug }}">{{ $products->category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li class="categories-title">Share :</li>
                                <li><a href="http://www.facebook.com/{{ $products->slug }}"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li><a href="http://www.instagram.com/{{ $products->slug }}"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/{{ $products->slug }}"><i
                                            class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{ ddd($whislist) }}
            <div class="row">
                <div class="col-12">
                    <div class="product-details">
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                        data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                        aria-controls="tabs-icons-text-1" aria-selected="true">Description</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Reviews</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                        aria-labelledby="tabs-icons-text-1-tab">
                                        {{ $products->description }}
                                    </div>
                                    {{-- <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <div class="review-form">
                                            <h3>Write a review</h3>
                                            <form>
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input type="text" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Review</label>
                                                    <textarea cols="4" class="form-control"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="other-products pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                @foreach ($product_datas as $product_data)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="/products/{{ $product_data->slug }}">
                                    <img src="{{ asset('storage/' . $products->image) }}" class="img-fluid" />
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a href="/products/{{ $product_data->slug }}">{{ $product_data->name }}</a>
                                </h3>
                                <div class="product-price">
                                    <span>@currency( $product_data->price )</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
