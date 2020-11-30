<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    require('ConnectDB.php');    
?>

<style>
    #Dangky {
        display: block;
        margin-bottom: 0.25em;
        font-family: 'Julius Sans One', sans-serif;
        font-size: 1.2em;
        font-style: normal;
        text-transform: uppercase;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - Đăng Ký</title>

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
    <button onclick="backtotop()" style="display:none; width: 45px;height: 45px; position: fixed; bottom: 30px; right: 15px;z-index: 99;" id="backtotop" class="Dangky"><i class="fa fa-arrow-up"></i></button>
    <!-- /BACK TO TOP -->
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +86 090 613 6148</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> electro@gmail.com</a></li>
                    <li>
                        <a href="https://www.google.com/maps/place/52+%C3%9At+T%E1%BB%8Bch,+Ph%C6%B0%E1%BB%9Dng+4,+T%C3%A2n+B%C3%ACnh,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7964026,106.6563014,17z/data=!3m1!4b1!4m5!3m4!1s0x3175293407251959:0x770179e0802a3f97!8m2!3d10.7964026!4d106.6584901"><i class="fa fa-map-marker"></i> 52 Út Tịch</a>
                    </li>
                </ul>
                <ul class="header-links pull-right">
                    <li id="dk"><a href="Dangky.php"><i class="fa fa-user"></i> Đăng ký</a></li>
                    <li id="tk" style="display:none"><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li id="admin" style="display:none"><a href="admin.html"><i class="fa fa-user"></i>Quản trị</a></li>
                    <li id="dn"><a href="Dangky.php"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
                    <li id="t" onclick="thoat()" style="display:none"><a href="#"><i class="fa fa-user-o"></i>Thoát</a>
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
                    <div class="col-md-6">
                        <div class="header-search">
                            <input style="margin-right: -4px;border-radius: 40px 0px 0px 40px;" id="otimkiem" class="input-select" placeholder="Bạn tìm gì...">
                            <button id="nuttimkiem" onclick="search()" class="search-btn">Tìm</button>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
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
                    <ul class="breadcrumb-tree">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li class="active">Tài khoản</li>
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
                <!-- Dang ky -->
                <div class="col-md-7" style="width:50%">
                    <form action="Dangky.php">
                    <!-- Billing Details -->
                    <div class="section-title">
                            <h3 class="title">Tạo tài khoản</h3>
                    </div>

                    <div class="col-md-7" style="width:23%; padding-left:0px;">
                            <!-- Billing Details -->
                        <div class="billing-details">
                            <div class="form-group" style="margin-top:10px; margin-bottom:35px;">
                                <span style="border: 0px solid #E4E7ED; padding: 0px 0px; " class="input" >Họ</span>
                            </div>
                            <div class="form-group">
                                <span style="border: 0px solid #E4E7ED; padding: 0px 0px" value="" class="input" >Tên</span>
                            </div>
                            <div class="form-group" style="margin-top:25px">
                                <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Tên đăng nhập" class="input" type="email" disabled="">
                            </div>
                            <div class="form-group">
                                <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Mật khẩu" class="input" type="text" disabled="">
                            </div>
                            <div class="form-group">
                                <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Email" class="input" type="text" disabled="">
                            </div>
                            <div class="form-group">
                                <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Địa chỉ" class="input" type="text" disabled="">
                            </div>           
                            <div class="form-group">
                                <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Số điện thoại" class="input" type="text" disabled="">
                            </div>
                        </div>
                            <!-- /Billing Details -->   
                    </div>
                        <!-- Dang nhap -->
                    <div class="col-md-5" style="width:65%">
                        <!-- Billing Details -->
                        <div class="billing-details">
                        <div class="form-group">
                            <input id="Họ" class="input" type="text" name="first-name" value="<?php if(isset($_REQUEST['first-name'])) echo $_REQUEST['first-name'];?>">
                        </div>
                        <div class="form-group">
                            <input id="Tên" class="input" type="text" name="last-name" value="<?php if(isset($_REQUEST['last-name'])) echo $_REQUEST['last-name'];?>">
                        </div>
                        <div class="form-group">
                            <input id="tendangnhap" class="input" type="text" name="username" value="<?php if(isset($_REQUEST['username'])) echo $_REQUEST['username'];?>">
                        </div>
                        <div class="form-group">
                            <input id="matkhau" class="input" type="password" name="password" value="<?php if(isset($_REQUEST['password'])) echo $_REQUEST['password'];?>">
                        </div>
                        <div class="form-group">
                            <input id="email" class="input" type="email" name="email" value="<?php if(isset($_REQUEST['email'])) echo $_REQUEST['email'];?>">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" value="<?php if(isset($_REQUEST['email'])) echo $_REQUEST['address'];?>">
                        </div>
                        <div class="form-group">
                            <input id="SDT" type="text" class="input" type="tel" name="tel" value="<?php if(isset($_REQUEST['tel'])) echo $_REQUEST['tel'];?>">
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox" style="color:red; margin-bottom:15px;">
                                <span></span>    
                        <?php  
                            if (isset($_REQUEST['first-name'])){
                            $first_name = $_REQUEST['first-name'];
                            $last_name  = $_REQUEST['last-name'];
                            $username   = $_REQUEST['username'];
                            $password   = $_REQUEST['password'];
                            $email      = $_REQUEST['email'];
                            $dia_chi    = $_REQUEST['address'];
                            $phone      = $_REQUEST['tel'];
                            $sql = sprintf("INSERT INTO khach_hang (ho, ten, username, pass, email, dia_chi, sdt ) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",$first_name,$last_name,$username,$password,$email,$dia_chi,$phone);                     
                            
                            if (empty($first_name))     echo "Vui lòng nhập họ.\n";
                            else if (empty($last_name))      echo "Vui lòng nhập tên.\n";
                            else if (empty($username))       echo "Vui lòng nhập tên đăng nhập.\n";
                            else if (empty($password))       echo "Vui lòng nhập mật khẩu.\n";
                            else if (empty($email))          echo "Vui lòng nhập email.\n";
                            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                                echo "Email không hợp lệ.\n";     
                            else if (empty($dia_chi))        echo "Vui lòng nhập địa chỉ.\n";
                            else if (empty($phone))          echo "Vui lòng nhập số điện thoại.\n";
                            else if (!is_numeric($phone))
                                echo "Số điện thoại không hợp lệ.\n"; 
                            else if (strlen($phone) != 10)
                                echo "Số điện thoại không hợp lệ.\n"; 
                            else if (!empty($username)){
                                $sql_check = sprintf("SELECT COUNT(username) AS dem FROM khach_hang WHERE username = '%s'",$username);
                                $result_check = $conn->query($sql_check);
                                $row_check = $result_check->fetch_assoc();
                                if ($row_check['dem'] != 0 )    echo "Tên đăng nhập đã tồn tại.\n"; 
                                else{
                                    if ($conn->query($sql) === FALSE) 
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    else {
                        ?>
                                <script>
                                    alert("Tạo tài khoản thành công");
                                    window.open("Dangky.php","_self");
                                </script>
                        <?php
                                    }
                                }
                            }
                            }
                        ?>
                                <span></span>
                            </div>
                            <div class="caption">
                                <span></span>
                                <button style="width:150px;" id="nutdangky" class="Dangky">Tạo tài khoản</button>
                            </div>
                        </div>
                    </div>
                        <!-- /Billing Details -->
                    </div>
                    <!-- /Billing Details -->
                    </form>
                </div>
                <!-- Dang nhap -->
                <div class="col-md-5" style="width:50%">
                    <!-- Billing Details -->
                    <div class="section-title">
                            <h3 class="title">Đăng nhập</h3>
                    </div>
                    <div class="col-md-7" style="width:25%; padding-left:0px;">
                        <div class="billing-details">
                            <div class="form-group" style="margin-top:10px; margin-bottom:35px;">
                                <span style="border: 0px solid #E4E7ED; padding: 0px 0px; " class="input" >Tên đăng nhập</span>
                            </div>
                            <div class="form-group">
                                <span style="border: 0px solid #E4E7ED; padding: 0px 0px" value="" class="input" >Mật khẩu</span>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-5" style="width:65%">
                    <form action="Dangky.php">
                    <div class="billing-details">
                        <div class="form-group">
                            <input id="iddangnhap" class="input" type="text" name="login-username">
                        </div>
                        <div class="form-group">
                            <input id="pwdangnhap" class="input" type="password" name="login-password">
                        </div>
                        <div id="sailogin" class="form-group">
                            <div class="input-checkbox" style="color: red;">
                                <span></span>   
                                <?php     
                                    if (isset($_REQUEST['login-username']) && isset($_REQUEST['login-password'])){
                                        $loginU = $_REQUEST['login-username'];
                                        $loginP = $_REQUEST['login-password'];

                                        $sql = sprintf("SELECT username, pass FROM khach_hang WHERE username LIKE '%s' AND pass LIKE '%s'",$loginU,$loginP);
                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();
                                        if ($loginP == 'admin' && $loginU == 'admin'){
                                ?>
                                            <script>
                                                localStorage.setItem("flag", 2);
                                                window.open("admin.php","_self");
                                            </script>
                                <?php            
                                        } else {
                                            if ($result->num_rows == 0){
                                                echo "Sai tên đăng nhập hoặc mật khẩu.";
                                            } else {
                                ?>
                                        <script>
                                            window.open("index.php", "_self");
                                            localStorage.setItem("flag", 1);
                                            localStorage.setItem("username",<?=$row['username'];?>) 
                                        </script>
                                <?php
                                                $_SESSION["username"] = $loginU ;
                                            }
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="caption">
                            <button id="nutdangnhap" class="Dangky">Đăng Nhập</button>
                        </div>
                    </div>
                                </div>
                    </form>
                    <!-- /Billing Details -->
                </div>
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
                            <button onclick="alert('Cám ơn bạn đã đăng ký')" class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng ký</button>
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

    <?php $conn->close(); ?>

    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>

</body>

</html>