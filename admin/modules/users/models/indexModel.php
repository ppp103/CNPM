<?php

//Lấy thông tin user qua username
function get_user_by_username($username)
{
    $item = db_fetch_row("select * from `taikhoan` where `tenDangNhap`='$username'");
    if (!empty($item)) {
        return $item;
    }
}

function check_login($username, $password)
{
    $check_user = db_num_rows("select * from `taikhoan` where `tenDangNhap`='{$username}' and `password`='{$password}'");
    if ($check_user > 0) {
        return true;
    }
    return false;
}

function info_user($label = 'id')
{
    $username = $_SESSION['username'];
    $user = db_fetch_array("select *from `taikhoan` where `tenDangNhap`='$username'");
    return $user[$label];
}

function add_user($data)
{
    return db_insert('taikhoan', $data);
}

function user_exists($username, $email)
{
    $sql = db_num_rows("SELECT * FROM taikhoan WHERE username='$username' OR email='$email'");
    if ($sql > 0) {
        return true;
    }
    return false;
}

function get_list_users()
{
    $result = db_fetch_array("select * from taikhoan");
    return $result;
}

//Lấy thông tin user qua id
function get_user_by_id($id)
{
    $item = db_fetch_row("select * from taikhoan where user_id=$id");
    return $item;
}

//Cập nhật thông tin user
function update_user($data, $username)
{
    return db_update("taikhoan", $data, "`tenDangNhap`='$username'");
}

//Cập nhật mật khẩu mới cho user
function update_password($username, $new_password)
{
    global $conn;
    $sql = db_query("UPDATE `taikhoan` SET `password` = MD5('$new_password') WHERE `taikhoan`.`tenDangNhap` = '$username'");
    return $sql;
}
