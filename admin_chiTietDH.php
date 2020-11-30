<!DOCTYPE html>
<html lang="en">

<?php
    require('ConnectDB.php');
    $dh_id = $_REQUEST['don_hang_id'];
    $sql = sprintf("SELECT CONCAT(kh.ho,'',kh.ten) AS ten, kh.dia_chi, kh.sdt, sp.ten_sp, FORMAT(gia + '15000','#,#') AS gia , dh.trang_thai
                    FROM khach_hang kh, san_pham sp, don_hang dh
                    WHERE kh.id = dh.cus_id AND sp.id = dh.pro_id AND dh.id = %d",$dh_id);
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
    <link type="text/css" rel="stylesheet" href="css/table1.css" />



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- BACK TO TOP -->
    <button onclick="backtotop()" style="display:none; width: 45px;height: 45px; position: fixed; bottom: 30px; right: 15px;z-index: 99;" id="backtotop" class="Dangky"><i class="fa fa-arrow-up"></i></button>
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
                        <a target="_blank" href="https://www.google.com/maps/place/52+%C3%9At+T%E1%BB%8Bch,+Ph%C6%B0%E1%BB%9Dng+4,+T%C3%A2n+B%C3%ACnh,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7964026,106.6563014,17z/data=!3m1!4b1!4m5!3m4!1s0x3175293407251959:0x770179e0802a3f97!8m2!3d10.7964026!4d106.6584901"><i class="fa fa-map-marker"></i> 52 Út Tịch</a>
                    </li>
                </ul>
                <ul class="header-links pull-right">
                    <li id="tk"><a href="javascript:void(0);"><i class="fa fa-user"></i>Quản trị</a></li>
                    <li id="t"><a href="#" onclick="thoat()"><i class="fa fa-user-o"></i>Thoát</a>
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
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->
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
                    <li><a href="store_Search.php?phone_type=0&price_min=&price_max=&trang=1&btnSearch=0">Danh mục</a></li>
                    <li><a href="store_Search.php?phone_type=1&price_min=&price_max=&trang=1&btnSearch=0">iPhone</a></li>
                    <li><a href="store_Search.php?phone_type=2&price_min=&price_max=&trang=1&btnSearch=0">SAMSUNG</a></li>
                    <li><a href="store_Search.php?phone_type=3&price_min=&price_max=&trang=1&btnSearch=0">OPPO</a></li>
                    <li><a href="store_Search.php?phone_type=4&price_min=&price_max=&trang=1&btnSearch=0">XIAOMI</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 onclick="window.open('admin.php','_self')" class="aside-title"><a onclick="detail()"><i
                                    class="fa fa-user-circle-o" aria-hidden="true"></i> Quản trị viên</h3></a>
                            <div class="product-widget">
                                <h3 class="product-name">
                                    <a href="admin_themSP.php">
                                        <font size="2">
                                            <p id="list1"><i class="fa fa-user-o" aria-hidden="true"></i> &nbsp; Thêm Sản phẩm
                                            </p>
                                        </font>
                                    </a>
                                </h3>
                            </div>

                            <div class="product-widget">
                                <h3 class="product-name">
                                    <a href="admin_suaSP.php?trang=1">
                                        <font size="2">
                                            <p id="list1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Sửa/Xoá sản phẩm
                                            </p>
                                        </font>
                                    </a>
                                </h3>
                            </div>

                            <div class="product-widget">
                                <h3 class="product-name">
                                    <a href="admin_quanly.php">
                                        <font size="2">
                                            <p id="list3"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; Quản lý đơn hàng
                                            </p>
                                        </font>
                                    </a>
                                </h3>
                            </div>

                            <div class="product-widget">
                                <h3 class="product-name">
                                    <a href="admin_thongKe.php">
                                        <font size="2">
                                            <p id="list3"><i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp; Thống kê
                                            </p>
                                        </font>
                                    </a>
                                </h3>
                            </div>
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <div id="store" class="col-md-9">
                    <div id="chitiet">
                        <div style="font-family: sans-serif;font-size:medium;">
                            <div style="width:32.6%; float: left; background: #fff;padding: 10px;margin-bottom: 15px;">
                                Địa chỉ người nhận
                                <div style=" min-height: 145px; background: #f1f1f1;border-radius: 4px;padding: 5px 10px;line-height: 1.38;">
                                    <p style="padding-top:10px;font-size: small;">Tên khách hàng: <?=$row['ten'];?></p>
                                    <p style="font-size: small;font-weight: 0;">Địa chỉ: <?=$row['dia_chi'];?></p>
                                    <p style="font-size: small;font-weight: 0;">Điện thoại: <?=$row['sdt'];?></p>

                                </div>
                            </div>
                            <div style="width:32.6%; float: left; background: #fff;padding: 10px;margin-bottom: 15px;">
                                Sản phẩm
                                <div style="min-height: 145px; background: #f1f1f1;border-radius: 4px;padding: 5px 10px;line-height: 1.38;">
                                    <p style="font-size: small; font-weight: 0; padding-top:10px">Tên sản phẩm: <?=$row['ten_sp'];?></p>
                                    <p style="font-size: small; font-weight: 0;">Tổng tiền: <?=$row['gia'];?>₫</p>
                                </div>
                            </div>
                            <div style="width:32.6%; float: left; background: #fff;padding: 10px;margin-bottom: 15px;">
                                Hình thức thanh toán
                                <div style="min-height: 145px; background: #f1f1f1;border-radius: 4px;padding: 5px 10px;line-height: 1.38;">
                                    <p style="font-size: small; font-weight: 0; padding-top:10px">Thanh toán tiền mặt khi nhận hàng
                                    </p>
                                    <p style="font-size: small; font-weight: 0; font-style: italic; color:red">Trạng thái: <?=$row['trang_thai'];?></p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /manage -->
                    </div>
                </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /SECTION -->

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
                                <li><a href="javascript:void()"><i class="fa fa-phone"></i>+86 090 613 6148</a></li>
                                <li><a href="javascript:void()"><i class="fa fa-envelope-o"></i>electro@gmail.com</a>
                                </li>
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
        <?php  $conn->close();   ?>
    </footer>
    <!-- /FOOTER -->

    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/admin.js"></script>
	
	<?php 
	if (isset($_REQUEST['them'])) {
		echo '<script list1();></script>';
	}
	?>

</body>

</html>