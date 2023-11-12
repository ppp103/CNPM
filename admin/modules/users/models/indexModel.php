<?php

//Lấy thông tin user qua username
function get_user_by_taikhoan_loaitk($username)
{
    $item = db_fetch_array("SELECT *
        FROM taikhoan tk 
        LEFT JOIN loaitaikhoan_taikhoan ltk_tk ON tk.id = ltk_tk.taiKhoan_id
        LEFT JOIN loaitaikhoan ltk ON ltk.id = ltk_tk.loaiTaiKhoan_id 
        WHERE tenDangNhap = '$username'");
    if (!empty($item)) {
        return $item;
    }
}

function check_login($username, $password)
{
    $sql =  db_fetch_row("SELECT *
        FROM `taikhoan` tk 
        LEFT JOIN `loaitaikhoan_taikhoan` ltk_tk ON tk.id = ltk_tk.taiKhoan_id
        LEFT JOIN `loaitaikhoan` ltk ON ltk.id = ltk_tk.loaiTaiKhoan_id 
        WHERE tenDangNhap = '$username'");
    try {
        $hashedPaswordFromDB = $sql['matKhau'];
        // if(password_verify($password, $hashedPaswordFromDB)) {
        //     if($sql > 0) {
        //         return true;    
        //     }
        // }
        if(md5($password) == $hashedPaswordFromDB) {
            if($sql > 0) {
                return true;    
            }
        }
        return false;
    } catch (Exception $e) {
        $e->getMessage();
    } 
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
    $result = db_fetch_array("SELECT * FROM taikhoan");
    return $result;
}

//Lấy thông tin user qua id
function get_user_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM taikhoan WHERE id=$id");
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
    $sql = db_query("UPDATE `taikhoan` SET `matKhau` = MD5('$new_password') WHERE `taikhoan`.`tenDangNhap` = '$username'");
    return $sql;
}

// lay mk
function list_email(){
    $result = db_fetch_array("SELECT email FROM taikhoan");
    return $result;
}

function list_accout(){
    $result = db_fetch_array("SELECT tenDangNhap FROM taikhoan");
    return $result;
}