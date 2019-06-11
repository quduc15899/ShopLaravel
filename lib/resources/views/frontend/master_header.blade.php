<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{{asset('public/layout/frontend')}}/">
        <title>Trang chủ</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li><a href="mailto:sale@eshop.com"><i class="fa fa-phone"></i> +0123 456 789</a></li>
                        <li><a href="mailto:sale@eshop.com"><i class="fa fa-envelope-o"></i> sale@eshop.com</a></li>
                        <li><a href="https://bitly.vn/4wzf"><i class="fa fa-map-marker"></i> 141 Chiến Thắng , Tân Triều</a></li>
                    </ul>
                    <ul class="header-links pull-right">
                        <li><a href="{{asset('/login')}}"><i class="fa fa-user-o"></i> My Account</a></li>
                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="{{asset('/')}}" class="logo">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
                            <div class="header-search">
                                <form method="get" action="{{asset('tim-kiem')}}">
                                    <select class="input-select" name="cate">
                                        <option value="0">Camera</option>
                                        <option value="1">Laptop</option>
                                        <option value="2">Computer</option>
                                    </select>
                                    <input class="input" placeholder="Nhập tên sản phẩm tương ứng ..." name="result">
                                    <input type="submit" class="search-btn" value="Search"></input>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Cart -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-shopping-cart" style="color:#4AC4FA"></i>
                                        <span style="color:#4AC4FA">Giỏ hàng</span>
                                        <div class="qty">{{$cart_count}}</div>
                                    </a>
                                    <div class="cart-dropdown">
                                        <div class="cart-list">
                                            @foreach($carts as $cart)
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="@if($cart->type=='camera') {{asset('/lib/storage/app/camera/'.$cart->image)}}
                                                    @elseif($cart->type=='computer') {{asset('/lib/storage/app/computer/'.$cart->image)}}
                                                    @elseif($cart->type=='laptop') {{asset('/lib/storage/app/laptop/'.$cart->image)}}
                                                    @endif " alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">{{$cart->cart_name}}</a></h3>
                                                    <h4 class="product-price"><span class="qty">Giá :</span>{{number_format($cart->cart_price)}} VND</h4>
                                                </div>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')"href="{{asset('huy-hang/'.$cart->cart_slug)}}"><button class="delete"><i class="fa fa-close"></i></button></a>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="cart-summary">
                                            <small>{{$cart_count}} Item(s) selected</small>
                                            <h5>Tổng tiền: {{number_format($cart_tinh_tien)}}</h5>
                                        </div>
                                        <div class="cart-btns">

                                            <a href="{{asset('/gio-hang')}}">Thanh toán  <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{asset('')}}">Home</a></li>
                        <li class="{{ Request::is('camera') ? 'active' : '' }}"><a href="{{asset('/camera')}}">Camera</a></li>
                        <li class="{{ Request::is('laptop') ? 'active' : '' }}"><a href="{{asset('/laptop')}}">Laptop</a></li>
                        <li class="{{ Request::is('computer') ? 'active' : '' }}"><a href="{{asset('/computer')}}">Computer</a></li>
                        <li class="{{ Request::is('lien-he') ? 'active' : '' }}"><a href="{{asset('/lien-he')}}">Liên hệ</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
