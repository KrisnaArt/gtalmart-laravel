<header class="header clearfix">
    <div class="top-bar d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                    <ul class="top-links contact-info">
                        <li><i class="fas fa-envelope"></i> <a
                                href="mailto:contact@example.com?subject=MESSAGE FROM YOUR WEBSITE"
                                target="_blank">contact@example.com</a></li>
                        <li><i class="fab fa-whatsapp"></i> <a
                                href="https://api.whatsapp.com/send?phone=123456&text=This%20is%20a%20test"
                                target="_blank">Chat Only</a></li>
                    </ul>
                </div>
                @if (Route::is('checkout'))

                @else
                    <div class="col-6 text-right">
                        @auth
                            <ul class="top-links account-links">
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-link-icon" href="" id="navbar-default_dropdown_1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Welcome Back, {{ auth()->user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbar-default_dropdown_1">
                                        <a class="dropdown-item" href="/dashboard">My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @else
                            <ul class="top-links account-links">
                                <li><i class="fa fa-power-off"></i> <a href="/login">Login</a></li>
                            </ul>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="header-main border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12 col-sm-6">
                    <a class="navbar-brand mr-lg-5" href="/">
                        <i class="fas fa-cart-plus fa-3x"></i> <span class="logo">Gtal-Mart</span>
                    </a>
                </div>
                @if (Route::is('login') || Route::is('register') || Route::is('checkout') || Route::is('payment') || Route::is('uploadpayment'))

                @else
                    <div class="col-lg-7 col-12 col-sm-6">
                        <form action="/products-search" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-12 col-sm-6">
                        <div class="right-icons pull-right d-none d-lg-block">
                            <div class="single-icon wishlist">
                                <a href="/whislists"><i class="far fa-heart fa-2x"></i></a>
                                <span class="badge badge-default"></span>
                            </div>
                            <div class="single-icon shopping-cart">
                                <a href="/carts"><i class="fa fa-shopping-cart fa-2x"></i></a>
                                <span class="badge badge-default"></span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @if (Route::is('login') || Route::is('register') || Route::is('checkout') || Route::is('payment') || Route::is('uploadpayment'))

    @else
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
    @endif
</header>
