<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    require('ConnectDB.php');
    $product_id = $_GET['product'];
    $_SESSION["product"] = $product_id;

    $sql_sp = sprintf("SELECT * FROM san_pham WHERE id = %d",$product_id);
    $sql_gia = sprintf("SELECT FORMAT(gia, '#,#') AS gia FROM san_pham WHERE id = %d",$product_id);
    $sql_total = sprintf("SELECT FORMAT(gia + '15000','#,#') AS gia FROM san_pham WHERE id = %d",$product_id);
    $result_sp = $conn->query($sql_sp);
    $result_gia = $conn->query($sql_gia);
    $result_total = $conn->query($sql_total);
    $row = $result_sp->fetch_assoc();
    $row_gia = $result_gia->fetch_assoc();
    $row_total = $result_total->fetch_assoc();

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

</head>

<body>
    <!-- BACK TO TOP -->
    <button onclick="backtotop()"
        style="display:none; width: 45px;height: 45px; position: fixed; bottom: 30px; right: 15px;z-index: 99;"
        id="backtotop" class="Dangky"><i class="fa fa-arrow-up"></i></button>
    <!-- /BACK TO TOP -->
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +86 090 613 6148</a></li>
                    <li><a href=""><i class="fa fa-envelope-o"></i> electro@gmail.com</a></li>
                    <li>
                        <a target="_blank"
                            href="https://www.google.com/maps/place/52+%C3%9At+T%E1%BB%8Bch,+Ph%C6%B0%E1%BB%9Dng+4,+T%C3%A2n+B%C3%ACnh,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7964026,106.6563014,17z/data=!3m1!4b1!4m5!3m4!1s0x3175293407251959:0x770179e0802a3f97!8m2!3d10.7964026!4d106.6584901"><i
                                class="fa fa-map-marker"></i> 52 Út Tịch</a>
                    </li>
                </ul>
                <ul class="header-links pull-right">
                    <li id="dk"><a href="Dangky.php"><i class="fa fa-user"></i> Đăng ký</a></li>
                    <li id="tk" style="display:none"><a href="user.php"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li id="admin" style="display:none"><a href="admin.php"><i class="fa fa-user"></i>Quản trị</a></li>
                    <li id="dn"><a href="Dangky.php"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
                    <li id="t" onclick="thoat()" style="display:none"><a href="javascript:void()"><i class="fa fa-user-o"></i>Thoát</a>
                    </li>
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
                            <a href="index.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
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
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=0&price_min=&price_max=&trang=1&btnSearch=0">Danh mục</a></li>
                    <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=1&price_min=&price_max=&trang=1&btnSearch=0">iPhone</a></li>
                    <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=2&price_min=&price_max=&trang=1&btnSearch=0">SAMSUNG</a></li>
                    <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=3&price_min=&price_max=&trang=1&btnSearch=0">OPPO</a></li>
                    <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=4&price_min=&price_max=&trang=1&btnSearch=0">XIAOMI</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Giỏ hàng</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li class="active">Giỏ hàng</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details" style="margin-bottom:20px;">
                        <h3 style="font-weight:500px;">Giỏ hàng</h3>
                    </div>
                    <div class="product-widget">
                        <div id="wg1" class="product-widget">
                            <div class="product-img">
                                <img style="width:120%" src="<?=$row['hinh1'];?>" alt="">

                            </div>
                            <div class="product-body" style="padding-left:15%;">
                                <h3 style="font-size: 16px;padding-top: 7px;"><a href="Products/product.php?product=<?=$product_id?>"><?=$row['ten_sp'];?></a></h3>
                                <h4 class="product-price">
                                    <div style="min-height: 33px;width: 60%;">
                                        <div id="price_dot" style="float: left; padding-top:8.5px;font-size: 16px;font-weight: 500;"><?=$row_gia['gia'];?>₫</div>
                                    </div>
                                </h4>
                            </div>
                            <button onclick="window.open('store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=0&price_min=&price_max=&trang=1&btnSearch=0','_self')" class="delete"><i class="fa fa-close"></i></button>
                        </div>
                    </div>    
                    <!-- /Billing Details -->

                    <!-- Order notes -->
                    <br><br><br><br>
                    <div class="order-notes">
                        <textarea style="width: 631px; height: 144px;" class="input" placeholder="Chú thích"></textarea>
                    </div>
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Đơn hàng</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>Sản phẩm</strong></div>
                            <div><strong>Giá</strong></div>
                        </div>
                        <div class="order-products">
                            <div class="order-col">
                                <div>1x <?=$row['ten_sp'];?></div>
                                <div><?=$row_gia['gia'];?>₫</div>
                            </div>
                        </div>
                        <div class="order-col">
                            <div>Phí giao hàng</div>
                            <div>20,000₫</div>
                        </div>
                        <div class="order-col">
                            <div><strong>Tổng tiền</strong></div>
                            <div><strong class="order-total"><?=$row_total['gia'];?>₫</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2" checked>
                            <label for="payment-2">
                                <span></span>
                                Thanh toán tiền mặt khi nhận hàng
                            </label>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            Tôi đã đọc và chấp nhận các <a href="terms.html">điều khoản và dịch vụ</a>
                        </label>
                    </div>
                    <a href="checkOut.php" onclick="return checkmua();" class="primary-btn order-submit">Đặt mua</a>
                </div>
                <!-- /Order Details -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p><strong>Đăng ký để nhận thêm nhiều ưu đãi</strong></p>
                        <form action="javascript:void()">
                            <input class="input" type="email" placeholder="Nhập Vào Email Của Bạn">
                            <button onclick="alert('Cám ơn bạn đã đăng ký')" class="newsletter-btn"><i
                                    class="fa fa-envelope"></i> Đăng ký</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/home" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Giới thiệu</h3>
                            <p>Công ty Electro là nhà bán lẻ số 1 Việt Nam về doanh thu và lợi nhuận.</p>
                            <ul class="footer-links">
                                <li><a href="https://www.google.com/maps/place/52+%C3%9At+T%E1%BB%8Bch,+Ph%C6%B0%E1%BB%9Dng+4,+T%C3%A2n+B%C3%ACnh,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7964026,106.6563014,17z/data=!3m1!4b1!4m5!3m4!1s0x3175293407251959:0x770179e0802a3f97!8m2!3d10.7964026!4d106.6584901"
                                        target="_blank"><i class="fa fa-map-marker"></i>52 Út Tịch</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+86 090 613 6148</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>electro@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Danh mục</h3>
                            <ul class="footer-links">
                                <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=1&price_min=&price_max=&trang=1&btnSearch=0">iPhone</a></li>
                                <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=2&price_min=&price_max=&trang=1&btnSearch=0">SAMSUNG</a></li>
                                <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=3&price_min=&price_max=&trang=1&btnSearch=0">OPPO</a></li>
                                <li><a href="store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=4&price_min=&price_max=&trang=1&btnSearch=0">XIAOMI</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông tin</h3>
                            <ul class="footer-links">
                                <li><a href="contact.html">Liên hệ</a></li>
                                <li><a href="privacypolicy.html">Chính sách bảo mật</a></li>
                                <li><a href="terms.html">Điều khoản và dịch vụ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Dịch vụ</h3>
                            <ul class="footer-links">
                                <li><a href="contact.html">Chăm sóc khách hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="javascript:void()"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="Products/js/product.js"></script>
    <script src="js/index.js"></script>

</body>

</html>