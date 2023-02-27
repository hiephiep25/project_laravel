<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/taiwindcss@^1.0/dist/taiwind.min.css"> --}}
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->
    <!-- Page preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                            hiepcvper@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        0366125502
                    </div>
                </div>
            </div>
            <div class="ht-right">
                @if(Auth::check())
                    <a href="./login/logout" class="login-panel">
                        <i class="fa fa-user"></i>
                        {{Auth::user()->name}} - Logout
                    </a>
                @else
                    <a href="./login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                @endif

                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./">
                                <img src="front/img/logo.png" height="25" alt="">
                            </a>    
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input name="search" type="text" value="{{request('search')}}" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span>{{Cart::count()}}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach(Cart::content() as $cart)
                                                <tr>
                                                    <td class="si-pic"><img style="height:50px" src="storage/{{$cart->options->images[0]->path}}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$ {{number_format($cart->price, 2)}} x {{$cart->qty}}</p>
                                                            <h6>{{$cart->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i onclick="window.location='./cart/delete/{{$cart->rowId}}'" class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$ {{Cart::total()}}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">View Card</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">Check out</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$ {{Cart::total()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="acvtive"><a href="#">Women's Clothing</a></li>
                            <li><a href="#">Men's Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand codeleanon</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{ (request()->segment(1)=='') ? 'active' :'' }}"><a href="./">Home</a></li>
                        <li class="{{ (request()->segment(1)=='shop') ? 'active' :'' }}"><a href="./shop">Shop</a></li>
                        <li><a href="">Collection</a>
                            <ul class="dropdown">
                                <li><a href="">Men's</a></li>
                                <li><a href="">Women's</a></li>
                                <li><a href="">Kid's</a></li>
                            </ul>
                        </li>
                        <li class="{{ (request()->segment(1)=='') ? 'blog' :'' }}"><a href="./blog">Blog</a></li>
                        <li class="{{ (request()->segment(1)=='') ? 'contact' :'' }}"><a href="./contact">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                            <li><a href="./blog-details">Blog details</a></li>
                            <li><a href="./cart">Shopping cart</a></li>
                            <li><a href="./checkout">Checkout</a></li>
                            <li><a href="./faq">Faq</a></li>
                            <li><a href="./register">Register</a></li>
                            <li><a href="./login">Login</a></li>
                        </ul>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    {{-- Body --}}
    @yield('body')
    <!-- Partner Logo -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Ha Noi</li>
                            <li>Phone: 0366125502</li>
                            <li>Email: hiepcvper@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Servivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Shopping cart</a></li>
                            <li><a href="">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our special offers</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright <script>document.write(new Date().getFullYear());</script>
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/owlcarousel2-filter.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>