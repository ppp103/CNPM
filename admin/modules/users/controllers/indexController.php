<?php

function construct()
{
    load_model('index');
    load('lib', 'validation');
}

function indexAction()
{
}

function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn_login'])) {
        $error = [];
        #Kiểm tra username
        if (empty($_POST['tendangnhap'])) {
            $error['tendangnhap'] = "Tên đăng nhập không được để trống!!";
        } else {
            $username = $_POST['tendangnhap'];
        }

        #Kiểm tra password
        if (empty($_POST['matkhau'])) {
            $error['matkhau'] = "Mật khẩu không được để trống!!";
        } 
        else {
            $password = $_POST['matkhau'];
        }

        #Kết luận
        if (empty($error)) {
            if (check_login($username, $password)) {
                //Lưu trữ phiên đăng nhập
                $_SESSION['is_login'] = true;
                $_SESSION['tenDangNhap'] = $username;
                $_SESSION['is_admin'] = true;

                $infos = get_user_by_taikhoan_loaitk(user_login());
                if($infos) {
                    $loaitk = [];

                    foreach($infos as $data) {
                        $loaitk[] = $data['tenLoai'];
                        // $_SESSION['loaitk'] = $data['tenLoai'];
                    }
                    
                    // Để kiểm tra xem giá trị có tồn tại trong mảng hay không, sử dụng hàm in_array().
                    if (in_array("admin", $loaitk)) {
                        // Thực hiện các hành động cho quyền admin ở đây
                        $_SESSION['is_admin'] = true;
                        redirect('?mod=theloai&action=index');
                    } else {
                        $_SESSION['is_admin'] = false;
                        header("Location: http://localhost/CNPM/?mod=home");
                        // Thực hiện các hành động cho quyền user ở đây
                    }
                }
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không đúng";
            }
        }
    }

    load_view("login");
}

function dangkyAction() {
    global $tenDN, $pass, $email, $hashedPassword;
    if(isset($_POST['btn-dangky'])) {
        $tenDN = $_POST['tenDangNhap'];
        $pass = $_POST['matKhau'];
        $email = $_POST['email'];
        // $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $hashedPassword = md5($pass);
        $data_taikhoan = [
            'tenDangNhap' => $tenDN,
            'matKhau' => $hashedPassword,
            'email' => $email
        ];
        add_user($data_taikhoan);

        redirect('?mod=users&action=login');
    }
    load_view('dangky');
}


function logoutAction()
{
    load_view('logout');
}


// lay mk
function laymkAction(){

    load_view('laymk');
}