<!DOCTYPE html>
<html lang="en">

<?php
    require('../ConnectDB.php');
    $product_id = $_GET['product'];

    $sql_type = sprintf("SELECT * FROM loai_sp l, san_pham s WHERE s.id_loai = l.id_loai AND s.id like '%d'",$product_id);
    $sql_sp = sprintf("SELECT * FROM san_pham WHERE id = %d",$product_id);
    $sql_gia = sprintf("SELECT FORMAT(gia, '#,#') AS gia FROM san_pham WHERE id = %d",$product_id);
    $result_type = $conn->query($sql_type);
    $result_sp = $conn->query($sql_sp);
    $result_gia  = $conn->query($sql_gia);
    $row_type = $result_type->fetch_assoc();
    $row_sp = $result_sp->fetch_assoc();
    $row_gia  = $result_gia->fetch_assoc();           
    $type = $row_sp['id_loai'];      
    $sql_pro = sprintf("SELECT * , FORMAT(gia, '#,#') AS gia1 FROM san_pham WHERE id_loai = %d LIMIT 4",$type);
    $result_pro = $conn->query($sql_pro);
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/9faf06baa4.js"></script>


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
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/table.css" />

    <!-- Modal -->
    <link type="text/css" rel="stylesheet" href="css/Modal.css" />
    <script src="js/Modal.js"></script>

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
                    <li id="dk"><a href="../Dangky.php"><i class="fa fa-user"></i> Đăng ký</a></li>
                    <li id="tk" style="display:none"><a href="../user.php"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li id="admin" style="display:none"><a href="../admin.php"><i class="fa fa-user"></i>Quản trị</a>
                    </li>
                    <li id="dn"><a href="../Dangky.php"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
                    <li id="t" style="display:none"><a href="#" onclick="thoat()"><i class="fa fa-user-o"></i>Thoát</a>
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
                            <a href="../index.php" class="logo">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
                    <script>
                        function go_to_search(){
                            var y = document.getElementById('otimkiem').value;
                            var x = "../store_Search.php?otimkiem=" + y + "&nut_tim_kiem=&phone_type=0&price_min=&price_max=&trang=1&btnSearch=0";
                            window.open(x,"_self");
                        }

                    </script>

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <input style="margin-right: -4px;border-radius: 40px 0px 0px 40px;" id="otimkiem" class="input-select" placeholder="Bạn tìm gì...">
                            <button id="nuttimkiem" onclick="go_to_search()" class="search-btn">Tìm</button>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div id="cart" class="header-ctn" style="display: none;">
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
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="../store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=0&price_min=&price_max=&trang=1&btnSearch=0">Danh mục</a></li>
                    <li><a href="../store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=1&price_min=&price_max=&trang=1&btnSearch=0">iPhone</a></li>
                    <li><a href="../store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=2&price_min=&price_max=&trang=1&btnSearch=0">SAMSUNG</a></li>
                    <li><a href="../store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=3&price_min=&price_max=&trang=1&btnSearch=0">OPPO</a></li>
                    <li><a href="../store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=4&price_min=&price_max=&trang=1&btnSearch=0">XIAOMI</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section" style="padding-top:20px;padding-bottom:20px;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a id="breadcrumbtree" href="../index.php">Trang chủ</a></li>
                        <li><a id="breadcrumb1" href="../store_Search.php?otimkiem=&nut_tim_kiem=&phone_type=<?=$row_type['id_loai'] ?>&price_min=&price_max=&trang=1&btnSearch=0"><?=$row_type['ten_loai'] ?></a></li>
                        <li id="breadcrumb2" class="active"><?=$row_sp['ten_sp'];?></li>
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
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div>
                        <div class="product-preview">
                            <img id="img-main" src="../<?=$row_sp['hinh1'] ?>" alt="">
                            <div class="product-rating">
                                <form action="/action_page.php">
                                    <input type="radio" checked="true" value="" name="pick" onclick="circle1();">
                                    <input type="radio" id="c1" value="" name="pick" onclick="changeIMG1();">
                                    <input type="radio" id="c2" value="" name="pick" onclick="changeIMG2();">
                                    <input type="radio" id="c3" value="" name="pick" onclick="changeIMG3();">
                                </form>
                            </div>
                        </div>

                        <div class="product-preview" style="display: none;">
                            <img id="img-main1" src="../<?=$row_sp['hinh1'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img id="img1" src="../<?=$row_sp['hinh2'] ?>" onclick="changeIMG1();" class="hover-shadow" alt="">
                        </div>

                        <div class="product-preview">
                            <img id="img2" src="../<?=$row_sp['hinh3'] ?>" onclick="changeIMG2();" class="hover-shadow" alt="">
                        </div>

                        <div class="product-preview">
                            <img id="img3" src="../<?=$row_sp['hinh4'] ?>" onclick="changeIMG3();" class="hover-shadow" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <form action = "../Cart.php" id="form_mua">
                        <div class="product-details">
                            <h2 id="product-name" class="product-name"><?=$row_sp['ten_sp'];?></h2>
                            <div><a class="review-link" href="#"></a></div>
                            <div><h3 id="gia" class="product-price"><?=$row_gia['gia'];?>₫</h3></div>
                    </form>
                        <br><br>
                            <div class="add-to-cart">
                                <button id="button_mua" onclick="return checkdangnhap()" name="product" value="<?=$product_id?>" class="add-to-cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Mua ngay</button>
                            </div>
                        </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
                            <li><a data-toggle="tab" href="#tab2">Thông số kỹ thuật</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div id="mota" class="col-md-12">
                                        <p style="margin-left:10%; margin-right:10%;">
                                            <?=nl2br(nl2br($row_sp['mota']));?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="table-center">
                                        <table class="table-fill">
                                            <tbody class="table-hover">
                                                <tr>
                                                    <td class="text-left" width="35%" colspan="2">
                                                        <font color="red">Màn hình</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" width="35%">Công nghệ màn hình</td>
                                                    <td id="TSKT1" class="text-left"> <?=$row_sp['cong_nghe']?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Độ phân giải màn hình</td>
                                                    <td id="TSKT2" class="text-left"> <?=$row_sp['phan_giai_man_hinh']?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Kích thước</td>
                                                    <td id="TSKT3" class="text-left"> <?=$row_sp['man_hinh']?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" width="35%" colspan="2">
                                                        <font color="red">Camera</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Độ phân giải</td>
                                                    <td id="TSKT6" class="text-left"> <?=$row_sp['phan_giai']?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Quay phim</td>
                                                    <td id="TSKT7" class="text-left"> <?=$row_sp['quay_phim']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!-- /tab2  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Các sản phẩm liên quan</h3>
                    </div>
                </div>

                <?php
                    while($row_pro = $result_pro->fetch_assoc()){
                ?>
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img id="lq1c" src="../<?=$row_pro['hinh1'];?>" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a id="lq1a" href="product.php?product=<?=$row_pro['id'];?>"><?=$row_pro['ten_sp'];?></a>
                            </h3>
                            <h4 id="lq1b" class="product-price"><?=$row_pro['gia1'];?>₫</h4>
                            <div class="product-rating"></div>
                        </div>
                        <form action = "../Cart.php" id="form_mua">
                            <div class="add-to-cart">
                                <button id="button_mua" onclick="return checkdangnhap()" name="product" value="<?=$row_pro['id']?>" class="add-to-cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Mua ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /product -->
                <?php
                    }
                ?>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

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
                                <li><a href="../STORE/storei.html?1&0">iPhone</a></li>
                                <li><a href="../STORE/stores.html?1&0">SAMSUNG</a></li>
                                <li><a href="../STORE/storeo.html?1&0">OPPO</a></li>
                                <li><a href="../STORE/storex.html?1&0">XIAOMI</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông tin</h3>
                            <ul class="footer-links">
                                <li><a href="../contact.html">Liên hệ</a></li>
                                <li><a href="../privacypolicy.html">Chính sách bảo mật</a></li>
                                <li><a href="../terms.html">Điều khoản và dịch vụ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Dịch vụ</h3>
                            <ul class="footer-links">
                                <li onclick="account()"><a href="javascript:void()">Tài khoản của tôi</a></li>
                                <li><a href="../Cart.html">Xem giỏ hàng</a></li>
                                <li><a href="../contact.html">Chăm sóc khách hàng</a></li>
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
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
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
    <script src="js/product.js"></script>

    <?php
        $conn->close();
    ?>
</body>

</html>