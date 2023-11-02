<?php 
    require_once './mvc/core/libs.php'; 
    require_once './mvc/core/route.php'; 
    // require ($_SERVER["DOCUMENT_ROOT"].'/finalbtl/mvc/core/libs.php');
    // require ($_SERVER["DOCUMENT_ROOT"].'/finalbtl/mvc/core/route.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/sign-up-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:23:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php public_path('assets/images/logo/favicon.png') ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?php public_path('assets/css/app.min.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-20 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <a href="<?php echo 'dang-nhap'; ?>">
                        <img src="<?php public_path('assets/images/logo/logo.png') ?>" alt="">
                    </a>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="<?php public_path('assets/images/others/sign-up-2.png') ?>" alt="">
                        </div>
                        <div class="m-l-auto col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="m-t-20">Đăng ký</h2>
                                    <p class="m-b-30">Nhập thông tin xác thực của bạn để có quyền truy cập</p>
                                    <form action= "/CNPM/finalbtl/mvc/controllers/CRUD/admin/xulydangky.php" method="POST">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="tenDangNhap">Tên đăng nhập:</label>
                                            <input type="text" class="form-control" id="tenDangNhap" placeholder="Tên đăng nhập" name="tenDangNhap">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="matKhau">Mật khẩu:</label>
                                            <input type="password" class="form-control" id="matKhau" placeholder="Mật khẩu" name="matKhau">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                        </div> -->
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                <div class="checkbox">
                                                    <input id="checkbox" type="checkbox">
                                                    <label for="checkbox"><span>Tôi đã đọc <a href="#">thoả thuận</a></span></label>
                                                </div>
                                                <button class="btn btn-primary">Đăng ký</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">© 2019 ThemeNate</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="<?php public_path('assets/js/vendors.min.js') ?>"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?php public_path('assets/js/app.min.js') ?>"></script>

</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/sign-up-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:23:45 GMT -->
</html>