<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:23:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="public/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-15 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <img src="public/images/logo/logo.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="m-t-20">Đăng nhập</h2>
                                    <p class="m-b-30">Nhập thông tin xác thực của bạn để có quyền truy cập</p>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <p class="error" style="color: red"> <?php echo form_error('account'); ?></p>
                                            <label class="font-weight-semibold" for="userName">Tên đăng nhập:</label>
                                            <p class="error" style="color: red"> <?php echo form_error('tendangnhap'); ?></p>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="userName" placeholder="Tên đăng nhập" name="tendangnhap">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Mật khẩu:</label>
                                            <p class="error" style="color: red"> <?php echo form_error('matkhau'); ?></p>
                                            <a class="float-right font-size-13 text-muted" href="?mod=users&action=laymk">Quên mật khẩu?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="matkhau">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Bạn chưa có tài khoản?? 
                                                    <a class="small" href="<?php echo base_url("?mod=users&action=dangky"); ?>"> Đăng ký</a>
                                                </span>
                                                <button class="btn btn-primary" name="btn_login">Đăng nhập</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="public/images/others/login-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">© 2019 ThemeNate</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Hợp pháp</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Riêng tư</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="public/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="public/js/app.min.js"></script>

</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:23:32 GMT -->
</html>