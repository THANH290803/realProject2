<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-431:41-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version Four || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{asset('user/css/material-design-iconic-font.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{asset('user/css/fontawesome-stars.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('user/css/meanmenu.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{asset('user/css/slick.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{asset('user/css/jquery-ui.min.css')}}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('user/css/venobox.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('user/css/helper.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('user/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <!-- Modernizr js -->
    <script src="{{asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<style>
    .hb-menu nav > ul > li > a::after{
        display: none;
    }
    .bg-1, .bg-2, .bg-3 {
        background-image: url(images/slider/macbook-pro-14-inch-va-macbook-pro-16-inch.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        min-height: 475px;
        height: 480px;
        width: 780px;
    }
    .bg-2 {
        background-image: url(images/slider/tong-hop-cac-dong-macbook-duoc-ra-mat-cho-den-hien-tai-2.jpg);
    }
    .bg-3 {
        background-image: url(images/slider/macbook-air-m2.png);
    }
</style>
<style>
    .box {
        display: flex;
        align-items: center;
        border-radius: 10px; /* Đặt border-radius cho .box */
        background-color: #f8f9fa;
    }

    .customer-image {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px; /* Kích thước chiều cao của ảnh */
        width: auto; /* Kích thước chiều rộng tự động */
        margin-bottom: 10px;
    }

    .customer-image img {
        max-height: 100%; /* Kích thước chiều cao của ảnh là tối đa 100% của .customer-image */
        max-width: 100%; /* Kích thước chiều rộng của ảnh là tối đa 100% của .customer-image */
    }
    .customer-name {
        margin-left: 10px;
    }

    .panel-body {
        display: flex;
        align-items: center;
        margin-left: 50px;
    }

    .nav-pills {
        margin-left: 10px;
        list-style: none;
        padding: 0;
        gap: 100px;
    }

    .list-item {
        margin-left: 15px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        transition: background-color 0.3s, color 0.3s;
    }

    .list-item:hover {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .nav-pills a {
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    .nav-pills i {
        margin-right: 5px;
    }


    /* Định dạng container */
    .secce-box {
        text-align: center; /* Căn giữa nội dung theo chiều ngang */
        padding: 20px; /* Khoảng cách bên trong container */
        background-color: #f8f9fa; /* Màu nền */
        border: 1px solid #ddd; /* Đường viền xung quanh container */
        border-radius: 10px; /* Góc bo tròn */
        /*box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1); !* Hiển thị bóng đổ nhẹ *!*/
    }

    /* Định dạng tiêu đề */
    .secce-box h3 {
        font-size: 27px; /* Kích thước chữ lớn hơn */
        color: #333; /* Màu chữ */
    }

    /* Định dạng mô tả */
    .secce-box p {
        font-size: 16px; /* Kích thước chữ */
        color: #666; /* Màu chữ */
    }

    /* Định dạng đường kẻ ngăn cách */
    .secce-box hr {
        border: none;
        border-top: 1px solid #ddd;
        margin: 20px 0;
    }

    /* Định dạng bao bọc bảng */
    .table-wrapper {
        overflow-x: auto; /* Tạo thanh trượt ngang */
    }

    /* Định dạng bảng cuộn */
    .scrolling-table {
        width: 100%; /* Bảng cuộn có độ rộng 100% */
        overflow: scroll; /* Kích hoạt thanh trượt */
        white-space: nowrap; /* Ngăn dòng tiêu đề của bảng bị ngắt dòng */
    }

    /* Định dạng bảng */
    .custom-table {
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 10px;
        width: 100%;
        /* Các thuộc tính khác của bảng */
    }

    /* Định dạng dòng tiêu đề của bảng */
    .custom-table th {
        background-color: #3498db;
        text-align: center;
        padding: 15px;
        border: 1px solid #ddd;
        color: #fff;
        font-weight: bold;
    }

    /* Định dạng các ô dữ liệu của bảng */
    .custom-table td {
        text-align: center;
        padding: 15px;
        border: 1px solid #ddd;
    }

    /* Hiệu ứng hover cho các ô dữ liệu */
    .custom-table tr:hover {
        background-color: #f5f5f5;
        transition: background-color 0.3s ease-in-out;
    }

    /* Tạo hiệu ứng giả shadow cho dòng tiêu đề */
    .custom-table th::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 10px;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(52, 152, 219, 0.1), rgba(52, 152, 219, 0.8));
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    /* Hiệu ứng hover cho dòng tiêu đề */
    .custom-table th:hover::before {
        opacity: 1;
    }

    /* Định dạng liên kết trong các ô */
    td a {
        text-decoration: none; /* Loại bỏ gạch chân mặc định */
        display: inline-block; /* Biến các liên kết thành khối để có thể áp dụng padding và margin */
        padding: 5px; /* Đặt giá trị padding tùy ý */
        color: #333; /* Màu văn bản tùy ý */
        /* Các thuộc tính CSS khác nếu cần */
    }

    /* Định dạng biểu tượng FontAwesome */
    td a i.fa {
        font-size: 18px; /* Đặt kích thước biểu tượng tùy ý */
        /* Các thuộc tính CSS khác nếu cần */
    }

    /* Thay đổi màu của biểu tượng FontAwesome */
    td a.view-product-link i.fa {
        color: 	#1E90FF; /* Đổi màu của biểu tượng cho lớp view-product-link */
    }

    td a.complete-link i.fa {
        color: lime; /* Đổi màu của biểu tượng cho lớp complete-link */
    }

    td a.cancel-link i.fa {
        color: red; /* Đổi màu của biểu tượng cho lớp cancel-link */
    }

    /* Định dạng khi di chuột qua liên kết */
    td a:hover {
        background-color: #f0f0f0; /* Đổi màu nền khi di chuột qua */
        /* Các thuộc tính CSS khác nếu cần */
    }

    .box-khung {
        border: 1px solid #f8f9fa; /* Đặt viền đen với độ dày 2px */
        border-radius: 10px; /* Đặt border radius thành 10px để tạo góc cong */
        /*padding: 10px; !* Thêm padding để tạo khoảng cách từ viền đến nội dung *!*/
        padding-left: 2.5px;
        padding-right: 2.5px;
        display: inline-block; /* Đặt hiển thị là inline-block để nó chỉ chiếm không gian cần thiết */
    }

</style>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{asset('http://browsehappy.com/')}}">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Begin Body Wrapper -->
<div class="body-wrapper">
    <!-- Begin Header Area -->
    <header class="li-header-4">
        <!-- Begin Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Top Left Area -->
                    <div class="col-lg-3 col-md-4">
                        <div class="header-top-left">
                            <ul class="phone-wrap">
                                <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Left Area End Here -->
                    <!-- Begin Header Top Right Area -->
                    <div class="col-lg-9 col-md-8">
                        <div class="header-top-right">
                            <ul class="ht-menu">
                                <!-- Begin Setting Area -->
                                <li>
                                    <div class="ht-setting-trigger"><span>Setting</span></div>
                                    <div class="setting ht-setting">
                                        <ul class="ht-setting-list">
                                            @if(Auth::check() || Auth::guard('customer')->check())
                                                <!-- Hiển thị liên kết "My Account" khi đã đăng nhập -->
                                                <li><a href="{{ asset('user/my-account') }}">My Account</a></li>
                                                <li><a href="{{ route('user.logout') }}">Log Out</a></li>
                                            @else
                                                <!-- Hiển thị liên kết "Sign In" nếu chưa đăng nhập -->
                                                <li><a href="{{ route('user.loginRegister') }}">Sign In</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                                <!-- Setting Area End Here -->
                                <!-- Begin Currency Area -->
                                <!-- Currency Area End Here -->
                                <!-- Begin Language Area -->
                                <li>
                                    <span class="language-selector-wrapper">Language :</span>
                                    <div class="ht-language-trigger"><span>English</span></div>
                                    <div class="language ht-language">
                                        <ul class="ht-setting-list">
                                            <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                            <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Language Area End Here -->
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Top Area End Here -->
        <!-- Begin Header Middle Area -->
        <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Logo Area -->
                    <div class="col-lg-3">
                        <div class="logo pb-sm-30 pb-xs-30">
                            <a href="index.html">
                                <img src="images/menu/logo/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                        <!-- Begin Header Middle Searchbox Area -->
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- Header Middle Searchbox Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="header-middle-right">
                            <ul class="hm-menu">
                                <!-- Begin Header Middle Wishlist Area -->
                                <li class="hm-wishlist">
                                    <a href="wishlist.html">
                                        <span class="cart-item-count wishlist-item-count">0</span>
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </li>
                                <!-- Header Middle Wishlist Area End Here -->
                                <!-- Begin Header Mini Cart Area -->
                                <li class="hm-minicart">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text">Cart
                                        @php
                                            // Get the cart data from the session
                                            $cart = session('cart');

                                            // Initialize the total quantity
                                            $totalQuantity = 0;

                                            // Check if $cart is an array or Countable
                                            if (is_array($cart) || $cart instanceof Countable) {
                                                // Calculate the total quantity
                                                foreach ($cart as $cartItem) {
                                                    $totalQuantity += $cartItem['quantity'];
                                                }
                                            }

                                        @endphp
                                        <span class="cart-item-count">{{ $totalQuantity }}</span></span>
                                    </div>
                                    <div class="minicart">
                                        <div class="minicart-button">
                                            <a href="{{asset('user/cart')}}" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                <span>View Full Cart</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>

                                <!-- Header Mini Cart Area End Here -->
                            </ul>
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Middle Area End Here -->
        <!-- Begin Header Bottom Area -->
        <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Header Bottom Menu Area -->
                        <div class="hb-menu">
                            <nav>
                                <ul>
                                    <li class="dropdown-holder"><a href="{{asset('user/index')}}">Home</a></li>
                                    @foreach($categories as $categoryItem)
                                        <li class="megamenu-holder"><a href="{{ route('user.laptop', ['category' => $categoryItem->name]) }}">{{ $categoryItem->name }}</a></li>
                                    @endforeach
                                    <li class="dropdown-holder" style="display: inline-block; position: relative; padding-right: 40px; transition: all 0.3s ease-in-out;"><a href="{{asset('user/blog')}}">Blog</a>
                                    </li>
                                    <li style="padding-right: 25px;"><a href="{{asset('user/about')}}">About Us</a></li>
                                    <li style=""><a href="{{asset('user/contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Bottom Menu Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Area End Here -->
        <!-- Begin Mobile Menu Area -->
        <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End Here -->
    </header>

    <div class="content-wraper pb-60" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Li's Banner Area -->
                    <!-- Li's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 mt-40">
                                            <div class="outer-box">
                                            <div class="box">
                                                <!-- single-product-wrap start -->
                                                <div class="customer-box">
                                                    <div class="customer-image">
                                                        <img src="{{ asset('img-anhthe/istockphoto-1193260669-612x612.jpg') }}" alt="Li's Product Image">
                                                    </div>
                                                    <div class="customer-name">
                                                        <h4>{{ $customer->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body"><!--  panel-body Begin  -->
                                                    <ul class="nav-pills nav-stacked nav"><!--  nav-pills nav-stacked nav Begin  -->
                                                        <li class="list-item">
                                                            <a href="{{ asset('user/my-account') }}">
                                                                <i class="fa fa-list"></i> My Orders
                                                            </a>
                                                        </li>

                                                        <li class="list-item">
                                                            <a href="{{ asset('user/edit-account') }}">
                                                                <i class="fa fa-pencil"></i> Edit Account
                                                            </a>
                                                        </li>
                                                        <li class="list-item">
                                                            <a href="{{ asset('user/change-pass') }}">
                                                                <i class="fa fa-user"></i> Change Password
                                                            </a>
                                                        </li>

                                                        <li class="list-item">
                                                            <a href="{{ route('user.logout') }}">
                                                                <i class="fa fa-sign-out"></i> Log Out
                                                            </a>
                                                        </li>
                                                    </ul><!--  nav-pills nav-stacked nav Begin  -->
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                        </div>
                                            </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mt-40" style="padding: 0px">
                                            <div class="secce-box">
                                                <h3 style="text-align: center">My Order</h3>
                                                <p>Your orders are all here</p> <hr>
                                                    <table class="custom-table">
                                                        <thead>
                                                        <tr>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Customer Name</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Số điện thoại</th>
                                                            <th>Order Date:</th>
                                                            <th>Payment Method</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Order Detail</th>
                                                            <th>Chức năng</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($orders as $order)
                                                        <tr>
                                                            <td>{{ $order->random_id }}</td>
                                                            <td>{{ $order->customer->name }}</td>
                                                            <td>{{ $order->customer->address }}</td>
                                                            <td>{{ $order->customer->phone_number }}</td>
                                                            <td>{{ $order->purchase_date }}</td>
                                                            <td>{{ $order->paymentMethod->name }}</td>
                                                            <td>
                                                                @if($order->status == 1)
                                                                    <span class="box-khung" style="color: black; background-color: #fda602">{{ "Chờ xác nhận" }}</span>
                                                                @elseif($order->status == 2)
                                                                    <span class="box-khung" style="color: green; background-color: yellow">{{ "Xác nhận đơn hàng" }}</span>
                                                                @elseif($order->status == 3)
                                                                    <span class="box-khung" style="color: blue; background-color: pink">{{ "Đang giao hàng / Đã giao hàng cho bên vận chuyển" }}</span>
                                                                @elseif($order->status == 4)
                                                                    <span class="box-khung" style="color: purple; background-color: #b7b7ff">{{ "Đã giao hàng" }}</span>
                                                                @elseif($order->status == 5)
                                                                    <span class="box-khung" style="color: #ff9b00; background-color: #c5e7ff">{{ "Hoàn Thành Đơn Hàng" }}</span>
                                                                @elseif($order->status == 6)
                                                                    <span class="box-khung" style="color: red; background-color: beige">{{ "Hủy đơn hàng" }}</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ number_format($order->totalPrice, 0, ',', '.') }} VND</td>
                                                            <td>
                                                                <a href="{{ route('user.showDetailOrder', ['order_id' => $order->id]) }}" class="view-product-link">
                                                                    <i class="fa fa-info"></i>
                                                                </a>
                                                            </td>
                                                            @if($order->status != 1 && $order->status != 2 && $order->status != 3 && $order->status != 6 && $order->status != 5)
                                                                <td>
                                                                    <a href="{{ route('order.complete', ['order_id' => $order->id]) }}" class="complete-link">
                                                                        <i class="fa fa-check-circle"></i>
                                                                    </a>
                                                                </td>
                                                            @endif
                                                            @if($order->status != 3 && $order->status != 4 && $order->status != 5 && $order->status != 6)
                                                            <td>
                                                                <a href="{{ route('order.cancel', ['order_id' => $order->id]) }}" class="cancel-link" id="cancelLink">
                                                                    <i class="fa fa-ban"></i>
                                                                </a>

                                                            </td>
                                                            @endif
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <!-- Begin Footer Static Top Area -->
        <div class="footer-static-top">
            <div class="container">
                <!-- Begin Footer Shipping Area -->
                <div class="footer-shipping pt-60 pb-25">
                    <div class="row">
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/1.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>Free Delivery</h2>
                                    <p>And free returns. See checkout for delivery dates.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/2.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>Safe Payment</h2>
                                    <p>Pay with the world's most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/3.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>Shop with Confidence</h2>
                                    <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                        <!-- Begin Li's Shipping Inner Box Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                            <div class="li-shipping-inner-box">
                                <div class="shipping-icon">
                                    <img src="{{ asset('user/images/shipping-icon/4.png') }}" alt="Shipping Icon">
                                </div>
                                <div class="shipping-text">
                                    <h2>24/7 Help Center</h2>
                                    <p>Have a question? Call a Specialist or chat online.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Shipping Inner Box Area End Here -->
                    </div>
                </div>
                <!-- Footer Shipping Area End Here -->
            </div>
        </div>
        <!-- Footer Static Top Area End Here -->
        <!-- Begin Footer Static Middle Area -->
        <div class="footer-static-middle">
            <div class="container">
                <div class="footer-logo-wrap pt-50 pb-35">
                    <div class="row">
                        <!-- Begin Footer Logo Area -->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-logo">
                                <img src="{{ asset('user/images/menu/logo/1.jpg') }}" alt="Footer Logo">
                                <p class="info">
                                    We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                </p>
                            </div>
                            <ul class="des">
                                <li>
                                    <span>Address: </span>
                                    6688Princess Road, London, Greater London BAS 23JK, UK
                                </li>
                                <li>
                                    <span>Phone: </span>
                                    <a href="#">(+123) 123 321 345</a>
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Logo Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Product</h3>
                                <ul>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Our company</h3>
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-4">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Follow Us</h3>
                                <ul class="social-link">
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="rss">
                                        <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                            <i class="fa fa-rss"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Begin Footer Newsletter Area -->
                            <div class="footer-newsletter">
                                <h4>Sign up to newsletter</h4>
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form form-group" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                            <button  class="btn" id="mc-submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Area End Here -->
                        </div>
                        <!-- Footer Block Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->
        <div class="footer-static-bottom pt-55 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Footer Links Area -->
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">Online Shopping</a></li>
                                <li><a href="#">Promotions</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Most Populars</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Special Products</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Our Stores</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Warantee</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Policy Shipping</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links Area End Here -->
                        <!-- Begin Footer Payment Area -->
                        <div class="copyright text-center">
                            <a href="#">
                                <img src="{{ asset('user/images/payment/1.png') }}" alt="">
                            </a>
                        </div>
                        <!-- Footer Payment Area End Here -->
                        <!-- Begin Copyright Area -->
                        <div class="copyright text-center pt-25">
                            <span><a href="https://www.templatespoint.net" target="_blank">Templates Point</a></span>
                        </div>
                        <!-- Copyright Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Bottom Area End Here -->
    </div>
    <!-- Footer Area End Here -->
    <!-- Begin Quick View | Modal Area -->
    <div class="modal fade modal-wrapper" id="exampleModalCenter" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/1.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/2.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/3.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/4.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/5.jpg') }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('user/images/product/large-size/6.jpg') }}" alt="product image">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/1.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/2.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/3.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/4.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/5.jpg') }}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{ asset('user/images/product/small-size/6.jpg') }}" alt="product image thumb"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2>Today is a good day Framed poster</h2>
                                    <span class="product-details-ref">Reference: demo_15</span>
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="review-item"><a href="#">Read Review</a></li>
                                            <li class="review-item"><a href="#">Write Review</a></li>
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">$57.98</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('user/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('user/js/vendor/popper.min.js')}}"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<!-- Ajax Mail js -->
<script src="{{asset('user/js/ajax-mail.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{asset('user/js/jquery.meanmenu.min.js')}}"></script>
<!-- Wow.min js -->
<script src="{{asset('user/js/wow.min.js')}}"></script>
<!-- Slick Carousel js -->
<script src="{{asset('user/js/slick.min.js')}}"></script>
<!-- Owl Carousel-2 js -->
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope js -->
<script src="{{asset('user/js/isotope.pkgd.min.js')}}"></script>
<!-- Imagesloaded js -->
<script src="{{asset('user/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Mixitup js -->
<script src="{{asset('user/js/jquery.mixitup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('user/js/jquery.countdown.min.js')}}"></script>
<!-- Counterup -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
<script src="{{asset('user/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('user/js/waypoints.min.js')}}"></script>
<!-- Barrating -->
<script src="{{asset('user/js/jquery.barrating.min.js')}}"></script>
<!-- Jquery-ui -->
<script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
<!-- Venobox -->
<script src="{{asset('user/js/venobox.min.js')}}"></script>
<!-- Nice Select js -->
<script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
<!-- ScrollUp js -->
<script src="{{asset('user/js/scrollUp.min.js')}}"></script>
<!-- Main/Activator js -->
<script src="{{asset('user/js/main.js')}}"></script>
</body>
<script>
    // Lấy tất cả các phần tử có class "cancel-link"
    var cancelLinks = document.querySelectorAll('.cancel-link');

    // Lặp qua tất cả các liên kết "Hủy đơn hàng" và lắng nghe sự kiện cho mỗi liên kết
    cancelLinks.forEach(function(cancelLink) {
        cancelLink.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a

            // Sử dụng SweetAlert2 để hiển thị thông báo xác nhận
            Swal.fire({
                title: 'Xác nhận hủy đơn hàng',
                text: 'Bạn có chắc chắn muốn hủy đơn hàng?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hủy đơn hàng',
                cancelButtonText: 'Không',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Nếu người dùng xác nhận, chuyển hướng đến route hủy đơn hàng
                    window.location.href = cancelLink.getAttribute('href');
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Thành công!',
            text: '{{ session('success') }}',
        });
        @endif

        @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Lỗi!',
            text: '{{ session('error') }}',
        });
        @endif
    });
</script>
<!-- index-431:47-->
</html>
