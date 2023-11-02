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
        if (empty($_POST['username'])) {
            $error['username'] = "Tên đăng nhập không được để trống!!";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập gồm chữ cái, số, từ 6-32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }

        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Mật khẩu không được để trống!!";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu gồm chữ cái, số, ký tự đặc biệt từ 6-32 ký tự";
            } else {
                $password = md5($_POST['password']);
            }
        }

        #Kết luận
        if (empty($error)) {
            if (check_login($username, $password)) {
                //Lưu trữ phiên đăng nhập
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;
                //Chuyển hướng người dùng
                redirect();

                #Ghi nhớ đăng nhập
                // if (isset($_POST['remember_me'])) {
                //     setcookie('is_login', true, time() + 3600);
                //     setcookie('username', $username, time() + 3600);
                // } else {
                //     setcookie('is_login', true, time() - 3600);
                //     setcookie('username', $username, time() - 3600);
                // }

            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không đúng";
            }
        }
    }

    load_view("login");
}


function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    redirect("?mod=users&action=login");
}

function updateAction()
{
    #Validation
    global $error, $fullname, $phone_number, $email, $address;
    if (isset($_POST['btn-submit'])) {
        $error = [];
        //Kiểm tra họ và tên
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Họ và tên không được bỏ trống";
        } else {
            $fullname = $_POST['fullname'];
        }
        //Kiểm tra định dạng email
        if (empty($_POST['email'])) {
            $error['email'] = "Email không được để trống";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        //Kiểm tra số điện thoại
        if (empty($_POST['phone_number'])) {
            $error['phone_number'] = "Số điện thoại không được để trống";
        } else {
            if (!is_numberPhone($_POST['phone_number'])) {
                $error['phone_number'] = 'Số điện thoại không đúng định dạng';
            } else {
                $phone_number = $_POST['phone_number'];
            }
        }
        //Kiểm tra địa chỉ
        if (empty($_POST['address'])) {
            $error['address'] = "Địa chỉ không được để trống";
        } else {
            $address = $_POST['address'];
        }

        if (empty($error)) {
            $data = [
                'fullname' => $fullname,
                'email' => $email,
                'phone_number' => $phone_number,
                'address' => $address
            ];
            update_user($data, $_SESSION['username']);
        }
    }

    #Lấy thông tin của user qua username
    $info_user = get_user_by_username(user_login());

    #Tạo dữ liệu user gửi qua bên view
    $data['info_user'] = $info_user;
    // show_array($info_user);
    load_view('update', $data);
}
