<?php 

//Lấy thông tin user qua username
function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * from `taikhoan` WHERE `tenDangNhap`='$username'");
    if (!empty($item)) {
        return $item;
    }
}

//Lấy dữ liệu từ database
function show_theloai()
{
    $sql = "SELECT * FROM `theloai`";
    $list = db_fetch_array($sql);
    return $list;
}

function ThemTheLoai($data) {
    return db_insert('theloai', $data);
}

function SuaTheLoai($data, $id) {
    $where = "id = '$id'";
    return db_update('theloai', $data, $where);
}

function show_theloai_by_id($id) {
    $sql = "SELECT * FROM `theloai` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function xoa_theloai_by_id($id) {
    $where = "id = '$id'";
    return db_delete('theloai', $where);
}