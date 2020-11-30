<!DOCTYPE html>
<html lang="en">

<?php
session_start();
/////////// SEARCH //////////
    require('ConnectDB.php');
    $sql_demSP = sprintf("SELECT COUNT(id) AS dem FROM san_pham");
    $result_dem = $conn->query($sql_demSP);
    $row_dem = $result_dem->fetch_assoc();
    $soluong_SP = $row_dem['dem'];
    $sap_xep = $_GET['btnSearch'];
    $sap_xep = (int)$sap_xep;
    $trang = $_REQUEST['trang'];

    $page = $trang; // todo 
    $numItemPerPage = 6;
    $so_trang = $soluong_SP / $numItemPerPage + 1;
    $so_trang = (int)$so_trang;
    $offset = ($page - 1) * $numItemPerPage; 

    //////////////////////////////////////
    $max = $_REQUEST['price_max'];
    $min = $_REQUEST['price_min'];
    $type = $_REQUEST['phone_type'];

    if (empty($max))    $max = 2147483647;
    else $max = str_replace(",","",$_REQUEST['price_max']);
    if (empty($min))    $min = 0;
	else $min = str_replace(",","",$_REQUEST['price_min']);
    if (empty($type)){  
        if ($sap_xep == 0){
            $sql = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai BETWEEN %d AND %d) LIMIT %d, %d", $min, $max,1,4, $offset, $numItemPerPage);
            $sql_dem = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai BETWEEN %d AND %d)", $min, $max,1,4);
        }
        else if ($sap_xep == 1) {
            $sql = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) ORDER BY gia ASC LIMIT %d, %d", $min, $max,1,2,3,4, $offset, $numItemPerPage);
            $sql_dem = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) ORDER BY gia ASC", $min, $max,1,2,3,4);
        
        }    
        else if ($sap_xep == 2) {
            $sql = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) ORDER BY gia DESC LIMIT %d, %d", $min, $max,1,2,3,4, $offset, $numItemPerPage);
            $sql_dem = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) ORDER BY gia DESC", $min, $max,1,2,3,4);
        }
    }else{
        if ($sap_xep == 0){
            $sql = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d LIMIT %d, %d" , $min, $max, $type, $offset, $numItemPerPage);
            $sql_dem = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d" , $min, $max, $type);
        }
        else if ($sap_xep == 1)  {
            $sql = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d ORDER BY gia ASC LIMIT %d, %d" , $min, $max, $type, $offset, $numItemPerPage);
            $sql_dem = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d ORDER BY gia ASC" , $min, $max, $type);
        }
        else if ($sap_xep == 2) {
            $sql = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d ORDER BY gia DESC LIMIT %d, %d" , $min, $max, $type, $offset, $numItemPerPage);
            $sql_dem = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d ORDER BY gia DESC" , $min, $max, $type);
        }    
    }

    ///////// TIM KIEM THEO TEN //////////
    if(isset($_REQUEST['nut_tim_kiem'])){
        $name = $_REQUEST['otimkiem'];
        if (empty($type)){  
            if ($sap_xep == 0) {
                $sql = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) AND (ten_sp like '%%%s%%') LIMIT %d, %d", $min, $max,1,2,3,4,$name, $offset, $numItemPerPage);
                $sql_dem = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) AND (ten_sp like '%%%s%%')", $min, $max,1,2,3,4,$name);
            }
            else if ($sap_xep == 1) {
                $sql = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) AND (ten_sp like '%%%s%%') ORDER BY gia ASC LIMIT %d, %d", $min, $max,1,2,3,4,$name, $offset, $numItemPerPage);
                $sql_dem = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) AND (ten_sp like '%%%s%%') ORDER BY gia ASC", $min, $max,1,2,3,4,$name);
            }                
            else if ($sap_xep == 2) {
                $sql = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) AND (ten_sp like '%%%s%%') ORDER BY gia DESC LIMIT %d, %d", $min, $max,1,2,3,4,$name, $offset, $numItemPerPage);
                $sql_dem = sprintf("SELECT * FROM san_pham WHERE (gia BETWEEN %f AND %f) AND (id_loai = %d OR id_loai = %d OR id_loai = %d OR id_loai = %d) AND (ten_sp like '%%%s%%') ORDER BY gia DESC", $min, $max,1,2,3,4,$name);
            }    
        }else{
            if ($sap_xep == 0)  {
                $sql = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d AND ten_sp LIKE '%%%s%%' LIMIT %d, %d" , $min, $max, $type, $name, $offset, $numItemPerPage);
                $sql_dem = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d AND ten_sp LIKE '%%%s%%'" , $min, $max, $type, $name);
            }
            if ($sap_xep == 1)  {
                $sql = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d AND ten_sp LIKE '%%%s%%' ORDER BY gia ASC LIMIT %d, %d" , $min, $max, $type, $name, $offset, $numItemPerPage);
                $sql_dem = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d AND ten_sp LIKE '%%%s%%' ORDER BY gia ASC" , $min, $max, $type, $name);
            }
            else if ($sap_xep == 2) {
                $sql = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d AND ten_sp LIKE '%%%s%%' ORDER BY gia DESC LIMIT %d, %d" , $min, $max, $type, $name, $offset, $numItemPerPage);
                $sql_dem = sprintf("SELECT * FROM san_pham WHERE gia BETWEEN %f AND %f AND id_loai = %d AND ten_sp LIKE '%%%s%%' ORDER BY gia DESC" , $min, $max, $type, $name);
            }
        }
    }
    $result = $conn->query($sql);
    $result_dem = $conn->query($sql_dem);
    $soluong_SP = $result_dem->num_rows;
    $so_trang = $soluong_SP / $numItemPerPage;
    $so_trang = ceil($so_trang);
?>

<script>
    function change_Sort(){
        var sort = <?=$sap_xep?>;
        if (sort==1)    document.getElementById('tang_dan').style.color = "red";
            else if (sort==2)    document.getElementById('giam_dan').style.color = "red";
                else document.getElementById('tat_ca').style.color = "red";
    }

</script>

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

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/store.js"></script>
    <script src="js/autoNumeric.js" type=text/javascript> </script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"> </script>

</head>

<body onload="change_Sort();">
<form action="store_Search.php">
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
                    <li id="dk"><a href="Dangky.php"><i class="fa fa-user"></i> Đăng ký</a></li>
                    <li id="tk" style="display:none"><a href="user.php"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li id="admin" style="display:none"><a href="admin.php"><i class="fa fa-user"></i>Quản trị</a>
                    </li>
                    <li id="dn"><a href="Dangky.php"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
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
                            <a href="index.php" class="logo">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <input id="search_bar" style="margin-right: -4px;border-radius: 40px 0px 0px 40px;" name="otimkiem" class="input-select" placeholder="Bạn tìm gì..." value="<?php if(isset($_REQUEST['nut_tim_kiem'])){echo $name;} ?>">
                            <button name="nut_tim_kiem" class="search-btn">Tìm</button>
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
                        <h3 class="aside-title">Mục lục</h3>
                        <div class="checkbox-filter" id="myBtnContainer">
                        <select id="loai_dt" name="phone_type" class="input-select" style="height:30px;">
                            <option value="0">Chọn loại ĐT</option>
                            <option value="1">iPhone</option>
                            <option value="2">Samsung</option>
                            <option value="3">Oppo</option>
                            <option value="4">Xiaomi</option>
                        </select>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Giá tiền</h3>
                        <div>
                            <div class="input-number price-min" style="width:80%">
                                <input id="price_in" name="price_min" type="text" placeholder="Giá thấp nhất">
                            </div>         
                            <span>&nbsp</span>
                            <div class="input-number price-max" style="width:80%">
                                <input id="price_ax" name="price_max" type="text" placeholder="Giá cao nhất">
                            </div>
                            <div class="input-number price-max" style="width:80%; display:none;">
                                <input id="price_ax" name="trang" type="text" value="1">
                            </div>
                            <div class="input-number price-max" style="width:80%; display:none;">
                                <input id="price_ax" name="btnSearch" type="text" value="0">
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div>
                        </br>
                        </br>
                    </div>                    
                    <button type="submit" name="nut_tim_kiem" class="search-btn" style="border-radius: 0px 0px 0px 0px;">Lọc</button>
                </div>
                <!-- /ASIDE -->
                </form>

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix" style="margin-bottom:0px;">
                        <div class="store-sort">
                            <label style="font-family: Sans-serif;font-weight: 600;">Sắp xếp theo:</label>
                        </div>
                        <span>
                            &nbsp&nbsp
                            <a id="tat_ca" href="store_Search.php?otimkiem=<?=$name?><?php if (isset($_REQUEST['nut_tim_kiem'])){echo "&nut_tim_kiem=";}  ?>&phone_type=<?=$type?>&price_min=<?=$min?>&price_max=<?=$max?>&btnSearch=0&trang=1">
                            <i class="fa fa-plus-circle"></i>
                                Tất cả
                            </a>
                        </span>
                        <span>
                            &nbsp&nbsp
                            <a id="tang_dan" href="store_Search.php?otimkiem=<?=$name?><?php if (isset($_REQUEST['nut_tim_kiem'])){echo "&nut_tim_kiem=";}  ?>&phone_type=<?=$type?>&price_min=<?=$min?>&price_max=<?=$max?>&btnSearch=1&trang=1">
                            <i class="fa fa-arrow-circle-up"></i>
                                Giá tăng dần
                            </a>
                        </span>
                        <span>
                            &nbsp&nbsp
                            <a id="giam_dan" href="store_Search.php?otimkiem=<?=$name?><?php if (isset($_REQUEST['nut_tim_kiem'])){echo "&nut_tim_kiem=";}  ?>&phone_type=<?=$type?>&price_min=<?=$min?>&price_max=<?=$max?>&btnSearch=2&trang=1">
                            <i class="fa fa-arrow-circle-down"></i>
                                Giá giảm dần
                            </a>
                        </span>
                    </div>
                    <div class="store-sort" id="kq_tim_kiem">
                        <?php 
                            if(isset($_REQUEST['nut_tim_kiem'])){
                                if (!empty($name))
                                echo "Kết quả tìm kiếm cho: " . $name;
                            }
                        ?>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row" id="store-pages">

                    <?php
                        //echo ($result->num_rows);		
                        while ($soluong_SP > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $sql_gia = sprintf("SELECT FORMAT(gia, '#,#') AS gia FROM san_pham WHERE id = %d",$id);
                                $result_gia = $conn->query($sql_gia);
                                $row_gia = $result_gia->fetch_assoc();		
					?>
                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="<?php echo $row['hinh1']?>" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="Products/product.php?product=<?= $row['id'] ?>"><?= $row['ten_sp'] ?></a></h3>
                                    <h4 class="product-price"><?= $row_gia['gia'] ?>₫</h4>
                                    <div class="product-rating"></div>
                                </div>
                                <form action = "Cart.php" id="form_mua">
                                <div class="add-to-cart">
                                    <button id="button_mua" onclick="return checkdangnhap()" name="product" value="<?=$row['id']?>" class="add-to-cart-btn">
                                        <i class="fa fa-shopping-cart"></i> Mua ngay</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    <?php
                        }
                        $soluong_SP = $soluong_SP - $numItemPerPage;

                    ?>
                    </div>
                        <div class="store-filter clearfix">
                            <ul id="page" class="store-pagination">
                        <script type="text/javascript">
                            var add = "";
                            var trang = <?php echo $trang;?>;
                            count = <?php echo $so_trang; ?>;
                            count = parseInt(count);
                            for (i = 1; i <= count; i++) {
                                if ( i == trang ){
                                    add += "<li class='active'>" + i + "</li>";
                                }else{
                                    add += "<li><a name=li" + i + " href='store_Search.php?otimkiem=<?=$name?>&nut_tim_kiem=&phone_type=<?=$type?>&price_min=<?=$min?>&price_max=<?=$max?>&trang="+ i + "&btnSearch="+"<?=$sap_xep?>'>" + i + "</a></li>";
                                }
                            }
                            document.getElementById("page").innerHTML = add;
                        </script>
                            </ul>
                        </div>
                    <?php   
                    }
                    ?>

                    <?php
                        $conn->close();
                    ?>
                        <!-- /product -->
                    </div>
                    <!-- /   products -->
                </div>
                <!-- /STORE -->
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
                        <form>
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

</body>

</html>