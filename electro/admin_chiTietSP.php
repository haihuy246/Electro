<!DOCTYPE html>
<html lang="en">

<?php
    require('ConnectDB.php');
    $product_id = $_GET['product'];
    $sql_type = sprintf("SELECT ten_loai FROM loai_sp l, san_pham s WHERE s.id_loai = l.id_loai AND s.id like '%d'",$product_id);
    $sql_sp = sprintf("SELECT * FROM san_pham WHERE id = %d",$product_id);
    $sql_gia = sprintf("SELECT FORMAT(gia, '#,#') AS gia FROM san_pham WHERE id = %d",$product_id);
    $result_type = $conn->query($sql_type);
    $result_gia  = $conn->query($sql_gia);
    $result_sp = $conn->query($sql_sp);
    $row_type = $result_type->fetch_assoc();
    $row_sp = $result_sp->fetch_assoc();
    $row_gia  = $result_gia->fetch_assoc();

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

                <!-- STORE -->
                <div id="store" class="col-md-9">                    
                    <!-- add -->
					<form name="frmThemSP" action="quanLySP.php?id=<?=$row_sp['id'];?>'" method="post" enctype="multipart/form-data">
                    <div id="add" style="display: block;">
                        <div>
                            <p style="font-weight: 400; padding-left:15px; font-size: larger;">Sửa sản phẩm</p>
                            </br>
                        </div>
                        <div class="col-md-7" style="width:23%">
                            <!-- Billing Details -->
                            <div class="billing-details">
                                <div class="form-group" style="margin-top:10px; margin-bottom:35px;">
                                    <span style="border: 0px solid #E4E7ED; padding: 0px 0px; " class="input" >Chọn hãng</span>
                                </div>
                                <div class="form-group">
                                    <span style="border: 0px solid #E4E7ED; padding: 0px 0px" value="" class="input" >Tên sản phẩm</span>
                                </div>
                                <div class="form-group" style="margin-top:25px">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Giá sản phẩm" class="input" type="email" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Hình1" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Hình2" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Hình3" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Hình4" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Công nghệ" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Màn hình" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Độ phân giải màn hình" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Độ phân giải Camera" class="input" type="text" disabled="">
                                </div>
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Quay phim" class="input" type="text" disabled="">
                                </div>
                                
                                <!---->
                                <div class="form-group">
                                    <input style="border: 0px solid #E4E7ED; padding: 0px 0px" value="Mô tả" class="input" type="text" disabled="">
                                </div>
                            </div>
                            <!-- /Billing Details -->   
                        </div>
                        <!-- Dang nhap -->
                        <div class="col-md-5" style="width:70%">
                            <!-- Billing Details -->
                            <div class="billing-details">
                                <div class="form-group">
                                    <select name="cboLoai" class="input-select" style="width:50%">
                                        <option value="0">Chọn hãng</option>
                                        <option value="1" <?php if ($row_sp['id_loai'] == 1 ) echo 'selected' ; ?> >iPhone</option>
                                        <option value="2" <?php if ($row_sp['id_loai'] == 2 ) echo 'selected' ; ?> >Samsung</option>
                                        <option value="3" <?php if ($row_sp['id_loai'] == 3 ) echo 'selected' ; ?> >Oppo</option>
                                        <option value="4" <?php if ($row_sp['id_loai'] == 4 ) echo 'selected' ; ?> >Xiaomi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="Tên sản phẩm" style="width:70%" class="input" type="text" name="txtTenSP" value="<?=$row_sp['ten_sp']; ?>">
                                </div>
                                <div class="form-group">
                                    <input id="Giá sản phẩm" style="width:70%" class="input" type="text" name="txtGiaSP" value="<?=$row_gia['gia'];?>">
                                </div>
                                <div class="form-group">
                                    <input style="padding-top:7px;width:70%" class="input" type="file" name="fileHinh1">
                                </div>
                                <div class="form-group">
                                    <input style="padding-top:7px;width:70%" class="input" type="file" name="fileHinh2">
                                </div>
                                <div class="form-group">
                                    <input style="padding-top:7px;width:70%" class="input" type="file" name="fileHinh3">
                                </div>
                                <div class="form-group">
                                    <input style="padding-top:7px;width:70%" class="input" type="file" name="fileHinh4">
                                </div>
                                <div class="form-group">
                                    <input style="width:70%" class="input" type="text" name="txtCong_nghe" value="<?=$row_sp['cong_nghe']; ?>">
                                </div>
                                <div class="form-group">
                                    <input style="width:70%" class="input" type="text" name="txtMan_hinh" value="<?=$row_sp['man_hinh'];?>">
                                </div>
                                <div class="form-group">
                                    <input style="width:70%" class="input" type="text" name="txtPGiai_manhinh" value="<?=$row_sp['phan_giai_man_hinh'];?>">
                                </div>
                                <div class="form-group">
                                    <input style="width:70%" class="input" type="text" name="txtPhan_giai" value="<?=$row_sp['phan_giai'];?>">
                                </div>
                                <div class="form-group">
                                    <input style="width:70%" class="input" type="text" name="txtQuay_phim" value="<?=$row_sp['quay_phim'];?>">
                                </div>
                                
                                <!---->

                                <!---->
                                <div class="form-group">
                                    <textarea name="txtMoTa" style="width: 455px; height: 167px;" class="input"><?=$row_sp['mota'];?></textarea>
                                </div>
                                <div class="caption">
                                    <button type ="submit" style="width:150px" class="Dangky" name="btnSuaSP">Sửa sản phẩm</button>
                                </div>
                                <div id="saiadd" class="form-group" style="color:red;padding-top:20px;display:none">

                                </div>
                            </div>
                            <!-- /Billing Details -->
                        </div>

                        <!-- /store top filter -->
                    </div>
					</form>
                    <!-- /add -->

                    <!-- manage -->
                    <div id="manage" style="display:none;">
                        <div class="store-filter clearfix">
                            <div class="store-sort">
                                <label>
                                    Thời gian:
                                    <select id="sapxep" class="input-select" style="width:90%; height: 32px;">
                                        <option value="0">1/1/2016 - 1/1/2017</option>
                                        <option value="1">1/1/2017 - 1/1/2018</option>
                                        <option value="2">Kể từ 1/1/2018</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <!-- TABLE -->
                        <div class="limiter">
                            <div class="table100">
                                <table>
                                    <thead>
                                        <tr class="table100-head" style="font-family: sans-serif;font-size:medium;">
                                            <th class="column1" style="width:10px">Mã</th>
                                            <th class="column2">Tài khoản</th>
                                            <th class="column3" style="width:110px">Thời gian</th>
                                            <th class="column4" style="width:10px">Đã xử lý</th>
                                            <th class="column5" style="padding-right: 32px;">Xem chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="font-family: sans-serif;font-size:medium;">
                                            <td class="column1" style="width:10px;">200396</td>
                                            <td class="column2">atidman2</td>
                                            <td class="column3" style="width:110px">6/09/2019</td>
                                            <td class="column4" style="width:10px"><input type="checkbox" style="left: 0px;top: 0px;width: 61px;" checked></td>
                                            <td class="column5" style="padding-right: 32px;"><a onclick="detail()"><i
                                                        style="padding-right: 33px" class="fa fa-file-text-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr style="font-family: sans-serif;font-size:medium;">
                                            <td class="column1" style="width:10px">200397</td>
                                            <td class="column2">rbozierj</td>
                                            <td class="column3" style="width:110px">3/06/2018</td>
                                            <td class="column4" style="width:10px"><input type="checkbox" style="left: 0px;top: 0px;width: 61px;" checked></td>
                                            <td class="column5" style="padding-right: 32px;"><a onclick="detail()"><i
                                                        style="padding-right: 33px" class="fa fa-file-text-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr style="font-family: sans-serif;font-size:medium;">
                                            <td class="column1" style="width:10px">200398</td>
                                            <td class="column2">vjorg5</td>
                                            <td class="column3" style="width:110px">31/02/2018</td>
                                            <td class="column4" style="width:10px"><input type="checkbox" style="left: 0px;top: 0px;width: 61px;" checked></td>
                                            <td class="column5" style="padding-right: 32px;"><a onclick="detail()"><i
                                                        style="padding-right: 33px" class="fa fa-file-text-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr style="font-family: sans-serif;font-size:medium;">
                                            <td class="column1" style="width:10px">200399</td>
                                            <td class="column2">vmordonc</td>
                                            <td class="column3" style="width:110px">27/01/2018</td>
                                            <td class="column4" style="width:10px"><input type="checkbox" style="left: 0px;top: 0px;width: 61px;" checked></td>
                                            <td class="column5" style="padding-right: 32px;"><a onclick="detail()"><i
                                                        style="padding-right: 33px" class="fa fa-file-text-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- /TABLE -->



                    </div>
                    <div id="chitiet" style="display: none;">
                        <div style="font-family: sans-serif;font-size:medium;">
                            <div style="width:32.6%; float: left; background: #fff;padding: 10px;margin-bottom: 15px;">
                                Địa chỉ người nhận
                                <div style=" min-height: 145px; background: #f1f1f1;border-radius: 4px;padding: 5px 10px;line-height: 1.38;">
                                    <p style="font-weight: 600; padding-top:10px">atidman2</p>
                                    <p style="font-size: small;font-weight: 0;">Hẻm số 717, đường Tân Sơn, Phường 12, Quận Gò Vấp, TP. Hồ Chí Minh </p>
                                    <p style="font-size: small;font-weight: 0;">Điện thoại:0934 575 626</p>

                                </div>
                            </div>
                            <div style="width:32.6%; float: left; background: #fff;padding: 10px;margin-bottom: 15px;">
                                Hình thức giao hàng
                                <div style="min-height: 145px; background: #f1f1f1;border-radius: 4px;padding: 5px 10px;line-height: 1.38;">
                                    <p style="font-size: small; font-weight: 0; padding-top:10px">Giao vào 6/09/2019</p>
                                    <p style="font-size: small; font-weight: 0;">Miễn phí vận chuyển</p>
                                </div>
                            </div>
                            <div style="width:32.6%; float: left; background: #fff;padding: 10px;margin-bottom: 15px;">
                                Hình thức thanh toán
                                <div style="min-height: 145px; background: #f1f1f1;border-radius: 4px;padding: 5px 10px;line-height: 1.38;">
                                    <p style="font-size: small; font-weight: 0; padding-top:10px">Thanh toán bằng ví MoMo
                                    </p>
                                    <p style="font-size: small; font-weight: 0; font-style: italic; color:red">Thành công
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /manage -->
                        <div style="float: left;padding:10px; padding-right:30px; width:100%;">
                            <div class="limiter">
                                <div class="table100">
                                    <table>
                                        <thead>
                                            <tr class="table100-head" style="font-family: sans-serif;font-size:medium;">
                                                <th class="column1" style="width:160px;">Sản phẩm</th>
                                                <th class="column2" style="width:20px;text-align: right;">Giá</th>
                                                <th class="column3" style="width:80px;text-align: right;">Số lượng</th>
                                                <th class="column4" style="width:80px;text-align: right;padding-right:10px">Tạm tính
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-family: sans-serif;font-size:medium;">
                                                <td class="column1" style="width:160px">iPhone 11 Pro Max 512GB</td>
                                                <td class="column2" style="width:20px;text-align: right;">43.990.000₫
                                                </td>
                                                <td class="column3" style="width:80px;text-align: right;">1
                                                </td>
                                                <td class="column4" style="width:80px;text-align: right;padding-right:10px">43.990.000₫
                                                </td>
                                            </tr>
                                            <tr style="font-family: sans-serif;font-size:medium;">
                                                <td class="column1" style="width:160px">Samsung Galaxy S10+ 512GB</td>
                                                <td class="column2" style="width:20px;text-align: right;">28.990.000₫
                                                </td>
                                                <td class="column3" style="width:80px;text-align: right;">2
                                                </td>
                                                <td class="column4" style="width:80px;text-align: right;padding-right:10px">57.980.000₫
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="column4" colspan="3" style="padding-top: 30px;padding-right:25px;font-family: sans-serif;font-size:medium;">
                                                    Tạm tính
                                                </td>
                                                <td class="column4" colspan="4" style="padding-top: 30px;padding-right:0px;font-family: sans-serif;font-size:medium;">
                                                    101.970.000₫
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="column4" colspan="3" style="padding-top: 10px;padding-right:25px;font-family: sans-serif;font-size:medium;">
                                                    Phí vận chuyển
                                                </td>
                                                <td class="column4" colspan="4" style="padding-top: 10px;padding-right:0px;font-family: sans-serif;font-size:medium;">
                                                    0₫
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="column4" colspan="3" style="padding-top: 10px;padding-right:25px;font-family: sans-serif;font-size:medium;">
                                                    Tổng cộng
                                                </td>
                                                <td class="column4" colspan="4" style="padding-top: 10px;padding-right:0px;font-family: sans-serif;font-size:medium;">
                                                    101.970.000₫
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /manage -->

                    <!-- statistic -->
                    <div id="statistic" style="display: none;">
                        <div style="padding-top:15px; padding-left:20px;font-family: sans-serif;font-size:medium;">Thống kê đến thời điểm 1/1/2017
                        </div>
                        <div class="limiter" style="padding-top:10px;">
                            <table>
                                <thead>
                                    <tr class="table100-head" style="height: 40px;">
                                        <th class="column1" style="padding-left:15px;width: 20%; text-align: center;">
                                            Loại sản phẩm</th>
                                        <th class="column2" style="width: 20%; text-align: center;">Số lượng</th>
                                        <th class="column3" style="width: 20%; text-align: center;">Đã bán</th>
                                        <th class="column4" style="width: 20%; text-align: center;">Tồn kho</th>
                                        <th class="column5" style="padding-right:15px;width: 20%; text-align: center;">
                                            Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">iPhone</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">154</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">94</td>
                                        <td class="column4" style="padding-right:80px;">60</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">308.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Samsung</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">254</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">34</td>
                                        <td class="column4" style="padding-right:80px;">224</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">495.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Xiaomi</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">154</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">54</td>
                                        <td class="column4" style="padding-right:80px;">110</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">237.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Oppo</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">300</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">61</td>
                                        <td class="column4" style="padding-right:80px;">239</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">232.670.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Tất cả</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">862</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">243</td>
                                        <td class="column4" style="padding-right:80px;">633</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">1.275.580.000₫</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div style="padding-top:25px; padding-left:20px;font-family: sans-serif;font-size:medium;">Thống kê đến thời điểm 1/1/2018
                        </div>
                        <div class="limiter" style="padding-top:10px;">
                            <table>
                                <thead>
                                    <tr class="table100-head" style="height: 40px;">
                                        <th class="column1" style="padding-left:15px;width: 20%; text-align: center;">
                                            Loại sản phẩm</th>
                                        <th class="column2" style="width: 20%; text-align: center;">Số lượng</th>
                                        <th class="column3" style="width: 20%; text-align: center;">Đã bán</th>
                                        <th class="column4" style="width: 20%; text-align: center;">Tồn kho</th>
                                        <th class="column5" style="padding-right:15px;width: 20%; text-align: center;">
                                            Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">iPhone</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">154</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">94</td>
                                        <td class="column4" style="padding-right:80px;">60</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">308.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Samsung</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">254</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">34</td>
                                        <td class="column4" style="padding-right:80px;">224</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">495.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Xiaomi</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">154</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">54</td>
                                        <td class="column4" style="padding-right:80px;">110</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">237.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Oppo</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">300</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">61</td>
                                        <td class="column4" style="padding-right:80px;">239</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">232.670.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Tất cả</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">862</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">243</td>
                                        <td class="column4" style="padding-right:80px;">633</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">1.275.580.000₫</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div style="padding-top:25px; padding-left:20px;font-family: sans-serif;font-size:medium;">Thống kê đến thời điểm 1/1/2019
                        </div>
                        <div class="limiter" style="padding-top:10px;">
                            <table>
                                <thead>
                                    <tr class="table100-head" style="height: 40px;">
                                        <th class="column1" style="padding-left:15px;width: 20%; text-align: center;">
                                            Loại sản phẩm</th>
                                        <th class="column2" style="width: 20%; text-align: center;">Số lượng</th>
                                        <th class="column3" style="width: 20%; text-align: center;">Đã bán</th>
                                        <th class="column4" style="width: 20%; text-align: center;">Tồn kho</th>
                                        <th class="column5" style="padding-right:15px;width: 20%; text-align: center;">
                                            Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">iPhone</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">154</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">94</td>
                                        <td class="column4" style="padding-right:80px;">60</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">308.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Samsung</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">254</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">34</td>
                                        <td class="column4" style="padding-right:80px;">224</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">495.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Xiaomi</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">154</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">54</td>
                                        <td class="column4" style="padding-right:80px;">110</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">237.970.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Oppo</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">300</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">61</td>
                                        <td class="column4" style="padding-right:80px;">239</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">232.670.000₫</td>
                                    </tr>
                                    <tr style="font-family: sans-serif;font-size:medium;height: 42px;">
                                        <td class="column1" style="padding-left:40px;width: 20%;">Tất cả</td>
                                        <td class="column2" style="padding-left:60px;width: 20%;">862</td>
                                        <td class="column3" style="padding-left:68px;width: 20%;">243</td>
                                        <td class="column4" style="padding-right:80px;">633</td>
                                        <td class="column5" style="padding-right:32px;width: 20%;">1.275.580.000₫</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /statistic -->
                </div>

                <!-- info2 -->
                <div id="info2" style="display: none;">
                    <div class="limiter" style=>
                        <div class="table100">
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="column1">Ngày mua</th>
                                        <th class="column2">Mã đơn hàng</th>
                                        <th class="column3">Sản phẩm</th>
                                        <th class="column4">Số lượng</th>
                                        <th class="column5">Tổng tiền</th>
                                        <th class="column6">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="window.open('Products/product.html?1&8','_self')">
                                        <td class="column1">2019-09-29</td>
                                        <td class="column2">200398</td>
                                        <td class="column3">iPhone Xr 128Gb Grey</td>
                                        <td class="column4">1</td>
                                        <td class="column5">18.990.000₫</td>
                                        <td class="column6">Giao hàng thành công</td>
                                    </tr>
                                    <tr onclick="window.open('Products/product.html?3&2','_self')">
                                        <td class="column1">2019-09-28</td>
                                        <td class="column2">200397</td>
                                        <td class="column3">Xiaomi Redmi Note 8</td>
                                        <td class="column4">1</td>
                                        <td class="column5">4.990.000₫</td>
                                        <td class="column6">Giao hàng thành công</td>
                                    </tr>
                                    <tr onclick="window.open('Products/product.html?3&6','_self')">
                                        <td class="column1">2019-05-26</td>
                                        <td class="column2">200396</td>
                                        <td class="column3">Xiaomi A3 64GB</td>
                                        <td class="column4">1</td>
                                        <td class="column5">4.490.000₫</td>
                                        <td class="column6">Giao hàng thành công</td>
                                    </tr>
                                    <tr onclick="window.open('Products/product.html?2&0','_self')">
                                        <td class="column1">2019-01-25</td>
                                        <td class="column2">200392</td>
                                        <td class="column3">Samsung Galaxy S10+ 512GB</td>
                                        <td class="column4">1</td>
                                        <td class="column5">28.990.000₫</td>
                                        <td class="column6">Giao hàng thành công</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /info2 -->
            </div>
            <!-- /STORE -->
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
        $conn->close();
    ?>

</body>

</html>