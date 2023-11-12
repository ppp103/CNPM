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

                                    <h1 class="m-t-20">Lấy Lại Mật Khẩu</h1>
                                    <h3 class="m-b-30">Nhập Email Để Lấy Mật Khẩu</h3>
                                    <h3>
                                    <?php 
                                 
                                    
                                    // Adjust the path based on your project structure

                                      
                                       ini_set("SMTP", "localhost");
                                       ini_set("smtp_port", "587");
                                    function guiMail($email, $newPass){
                                        $to = $email;
                                        $subject = "Mật Khẩu Mới:";
                                        $message = "Mật Khẩu Mới Của Bạn Là:".$newPass;
                                        
                                        // Additional headers
                                        $headers = "From: sender@example.com\r\n";
                                        $headers .= "Reply-To: sender@example.com\r\n";
                                        $headers .= "X-Mailer: PHP/" . phpversion();
                                        
                                        // Gửi email
                                        if (mail($to, $subject, $message, $headers)) {
                                            echo "Email đã được gửi thành công.";
                                        } else {
                                            echo "Gửi email thất bại.";
                                        }

                                    }
                    
                                    

                                    
                                    ?>
                                    <?php

                                    $list_email = list_email();
                                    $list_accout1 = list_accout();
                                  if(isset($_POST['btn_yeucau'])) {
                                    if(isset($_POST['taikhoan']) && isset($_POST['email'])) {
                                        $taikhoan = $_POST['taikhoan'];
                                        $email1 = $_POST['email'];
                                        $cout1 = 0;
                                       
                                        if ( !empty($list_email)) {
                                            foreach ($list_email as $email) {                                    
                                                    if (isset($_POST['email']) && $email['email'] == $email1) {   
                                                       $cout1++;
                                                    }    
                                            }
                                        }
                                        $cout2 = 0;
                                        if (!empty($list_accout1)) {
                                            foreach ($list_accout1 as $accout) {
                                                if (isset($accout['accout']) && $accout['accout'] == $taikhoan) {
                                                    $cout2++;
                                                }
                                            }
                                        }
                                        
                                    }
                                    if($cout2 == 0 && $cout1 == 0) {
                                        echo 'Tài Khoản Của Bạn Không Phải Thành Viên Của Chúng Tôi';
                                        echo    '<a href="?mod=users&action=dangky">Đăng Ký </a>';
                                    }else{
                                        $matkhaumoi = substr(md5(rand(0,999999)),0,8);
                                        update_password($taikhoan, $matkhaumoi);

                                        // guiMail($email1,$matkhaumoi);
                                        echo'Mật Khẩu Cua Bạn là:' .$matkhaumoi;
                                    }
                                    
                                }

                                    ?>
                                    </h3>
                                    <form  method="post">
                                    <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Tên Đăng Nhâp:</label>                                                       
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="text" class="form-control" placeholder="Têm Đăng Nhập" name="taikhoan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Email:</label>                                       
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="text" class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mx-4"> Yêu Cầu Nhập Đúng Email Để Nhận Mã</h6>
                                            
                                            </div>
                                            <button class="btn btn-primary mx-5" name="btn_yeucau"> Gửi Yêu Cầu </button>
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
