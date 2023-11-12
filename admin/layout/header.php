<?php
    // chưa đăng nhập thì bắt buộc phải về trang đăng nhập
    if(!$_SESSION['is_login']) {
        redirect('?mod=users&action=login');
    }
    // nếu là user thì loaitk = null và trả về trang của người dùng.
    if(!$_SESSION['is_admin']) {
        // cần giao diện người dùng để sửa
        redirect('?mod=users&action=login');
    } 
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:18:30 GMT -->
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
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="public/images/logo/logo.png" alt="Logo">
                        <img class="logo-fold" src="public/images/logo/logo-fold.png" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="public/images/logo/logo-white.png" alt="Logo">
                        <img class="logo-fold" src="public/images/logo/logo-fold-white.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-bell notification-badge"></i>
                            </a>
                            <div class="dropdown-menu pop-notification">
                                <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                    <p class="text-dark font-weight-semibold m-b-0">
                                        <i class="anticon anticon-bell"></i>
                                        <span class="m-l-10">Notification</span>
                                    </p>
                                    <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                        <small>View All</small>
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-mail"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You received a new message</p>
                                                    <p class="m-b-0"><small>8 min ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-cyan avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">New user registered</p>
                                                    <p class="m-b-0"><small>7 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-red avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">System Alert</p>
                                                    <p class="m-b-0"><small>8 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 ">
                                            <div class="d-flex">
                                                <div class="avatar avatar-gold avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You have a new update</p>
                                                    <p class="m-b-0"><small>2 days ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="public/images/avatars/thumb-3.jpg"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="public/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold"><?php echo $_SESSION['tenDangNhap']?></p>
                                            <p class="m-b-0 opacity-07">Admin</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Chỉnh sửa hồ sơ</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Cài đặt tài khoản</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                            <span class="m-l-10">Dự án</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10" id="logoutBtn">Đăng xuất</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="">Quản Lý Admin</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="?mod=theloai">Thể Loại Sách</a>
                                </li>
                                <li>
                                    <a href="?mod=product">Danh Sách Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="?mod=taiKhoan">Quản lý tài khoản</a>
                                </li>
                                <li>
                                    <a href="?mod=tacGia">Danh Sách Tác Giả</a>
                                </li>
                                <li>
                                    <a href="?mod=tap">Danh Sách Tập</a>
                                </li>
                                <li>
                                    <a href="?mod=donHang">Danh Sách Đơn Hàng</a>
                                </li>
                                <li>
                                    <a href="?mod=chiTietDonHang">Chi Tiết Đơn Hàng</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

    
    <!-- Core Vendors JS -->
    <script src="public/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="'public/vendors/chartjs/Chart.min.js"></script>
    <script src="public/js/pages/dashboard-default.js"></script>

    <!-- Core JS -->
    <script src="public/js/app.min.js"></script>

    
    <script>
        // Lấy ra tất cả các phần tử có class là "dropdown-animated"
        var dropdowns = document.querySelectorAll('.dropdown-animated');

        // Lặp qua từng phần tử và thêm sự kiện click
        dropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('click', function(event) {
                // Ngăn chặn sự kiện click lan ra các phần tử cha
                event.stopPropagation();

                // Kiểm tra xem phần tử có class "show" hay không
                if (dropdown.querySelector('.dropdown-menu').classList.contains('show')) {
                    // Nếu có, thì xóa class "show" đi
                    dropdown.querySelector('.dropdown-menu').classList.remove('show');
                } else {
                    // Nếu không có, thêm class "show"
                    dropdown.querySelector('.dropdown-menu').classList.add('show');
                }
            });

            // Thêm sự kiện click vào cả trang để ẩn dropdown khi click bên ngoài
            document.addEventListener('click', function(event) {
                // Kiểm tra xem phần tử click có phải là dropdown hay không
                if (!event.target.closest('.dropdown-animated')) {
                    // Nếu không phải, thì xóa class "show" đi
                    dropdown.querySelector('.dropdown-menu').classList.remove('show');
                }
            });
        });
    </script>

    <script>
        // Lấy ra phần tử nút logout
        var logoutBtn = document.getElementById('logoutBtn');

        // Thêm sự kiện click cho nút logout
        logoutBtn.addEventListener('click', function() {
            // Chuyển hướng người dùng đến tệp tin logout.php khi nút "Logout" được click
            window.location.href = '?mod=users&action=logout';
        });
    </script>

</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:20:10 GMT -->
</html>