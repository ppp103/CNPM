<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from exprostudio.com/html/book_library/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:28:42 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Website bán sách</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/normalize.css" />
    <link rel="stylesheet" href="public/css/font-awesome.min.css" />
    <link rel="stylesheet" href="public/css/icomoon.css" />
    <link rel="stylesheet" href="public/css/jquery-ui.css" />
    <link rel="stylesheet" href="public/css/owl.carousel.css" />
    <link rel="stylesheet" href="public/css/transitions.css" />
    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/css/color.css" />
    <link rel="stylesheet" href="public/css/icon.css" />
    <link rel="stylesheet" href="public/css/responsive.css" />
    <script src="public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body class="tg-home tg-homeone">
    <!-- <div class="wrapper">
        <div class="container toast__container">
            <div class="toast__content">
                <div class="icon icon__vertify"></div>
                <div class="toast__message">Thành công</div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container toast__container active">
            <div class="toast__content">
                <div class="icon icon__error"></div>
                <div class="toast__message">Thất bại</div>
            </div>
        </div>
    </div> -->
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
    <!--************************************
			Wrapper Start
	*************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
				Header Start
		*************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="tg-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="tg-addnav">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-envelope"></i>
                                        <em>Liên hệ</em>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon-question-circle"></i>
                                        <em>Trợ giúp</em>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown tg-themedropdown tg-currencydropdown">
                                <a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-earth"></i>
                                    <span>Tiền tệ</span>
                                </a>
                                <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">

                                    <li>
                                        <a href="javascript:void(0);">
                                            <i>VNG</i>
                                            <span>VNG</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tg-userlogin">
                                <figure>
                                    <a href="javascript:void(0);"><img src="public/images/users/img-01.jpg" alt="image description" /></a>
                                </figure>
                                <span>Xin chào,
                                    <?php if (isset($_SESSION['tenDangNhap']) && $_SESSION['tenDangNhap'] !== null) {
                                        echo $_SESSION['tenDangNhap'];
                                    } else {
                                        echo '<a href="admin?mod=users&action=login"> hãy đăng nhập</a>';
                                    } ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-middlecontainer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <strong class="tg-logo"><a href="?mod=home"><img src="public/images/logo.png" alt="company name here" /></a></strong>
                            <div class="tg-wishlistandcart">
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }

                                $tongtien = 0; // Initialize $tongtien to avoid undefined variable warning


                                if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                    $tongtien = 0; // Reset $tongtien for each calculation
                                    for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                        $tongtien = $tongtien + $_SESSION['giohang'][$i][3];
                                    }
                                    $sohang = count($_SESSION['giohang']);
                                } else {
                                    $sohang = 0;
                                }
                                echo ' <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                   <a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <span class="tg-themebadge">' . $sohang . '</span>
                                       <i class="icon-cart"></i>
                                       <span>' . number_format($tongtien) . '</span>
                                   </a>';

                                ?>

                                <div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
                                    <div class="tg-minicartbody">
                                        <?php
                                        if (session_status() === PHP_SESSION_NONE) {
                                            session_start();
                                        }
                                        if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
                                            if (sizeof($_SESSION['giohang']) == 0) {
                                                echo '<div style="text-align: center; font-size: 1.6rem;">Giỏ hàng trống</div>';
                                            } else {
                                                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                                                    echo '
                                                            <div class="tg-minicarproduct">
                                                            <figure>
                                                                <img src="public/images/books/' . $_SESSION['giohang'][$i][1] . '" alt="image description" />
                                                            </figure>
                                                            <div class="tg-minicarproductdata">
                                                                <h5>
                                                                    <a href="javascript:void(0);">' . $_SESSION['giohang'][$i][2] . '</a>
                                                                </h5>
                                                                <h6><a href="javascript:void(0);">' . number_format($_SESSION['giohang'][$i][3]) . '</a></h6>
                                                            </div>
                                                             </div>
                                                        ';
                                                }
                                            }
                                        }

                                        ?>

                                    </div>
                                    <div class="tg-minicartfoot">

                                        <?php
                                        $tongtien = 0; // Initialize $tongtien to avoid undefined variable warning

                                        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                            $tongtien = 0; // Reset $tongtien for each calculation
                                            for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                                $tongtien = $tongtien + $_SESSION['giohang'][$i][3];
                                            }
                                            $sohang = count($_SESSION['giohang']);
                                        } else {
                                            $sohang = 0;
                                        }

                                        if ($sohang == 0) {
                                            echo "";
                                        } else {
                                            echo '<span class="tg-subtotal">Tổng tiền: <strong>' . number_format($tongtien) . '</strong></span>
                                                    <div class="tg-btns">
                                                        <a class="tg-btn tg-active" href="?mod=cart">Xem giỏ hàng</a>
                                                        <a class="tg-btn" href="?mod=checkout">Thanh toán</a>
                                                    </div>
                                            ';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-searchbox">
                            <form class="tg-formtheme tg-formsearch">
                                <fieldset>
                                    <input type="text" name="search" class="typeahead form-control" placeholder="Tìm kiếm theo tên..." />
                                    <button type="submit">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="tg-navigationarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul style="display: flex; justify-content:center;">
                                <li class="menu-item current-menu-item">
                                    <a href="?mod=home">
                                        Trang chủ
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="?mod=author">
                                        Tác giả
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="?mod=product&cate_id=0">
                                        Sách

                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="?mod=contact">
                                        Liên hệ

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </header>