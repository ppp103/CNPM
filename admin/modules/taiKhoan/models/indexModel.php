<?php

function ThemTaiKhoan($data) {
    return db_insert('taikhoan', $data);
}

function show_TaiKhoan(){
    $sql = "SELECT * FROM taikhoan";
    $list_data_TaiKhoan = db_fetch_array($sql);
    return $list_data_TaiKhoan;
}

function show_loaiTK() {
    $sql = "SELECT * FROM loaitaikhoan";
    $list = db_fetch_array($sql);
    return $list;
}

// thêm dữ liệu vào bảng loaitaikhoan_taikhoan
function them_ltk_tk($data) {
    return db_insert('loaitaikhoan_taikhoan', $data);
}

function show_taikhoan_by_id($id) {
    $sql = "SELECT * FROM `taikhoan` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_loaitaikhoan_by_username($username) {
    $item = db_fetch_row("SELECT *
        FROM taikhoan tk 
        LEFT JOIN loaitaikhoan_taikhoan ltk_tk ON tk.id = ltk_tk.taiKhoan_id
        LEFT JOIN loaitaikhoan ltk ON ltk.id = ltk_tk.loaiTaiKhoan_id 
        WHERE tenDangNhap = '$username'");
    return $item;
}

function xoa_taikhoan_by_id($id) {
    $where = "id = '$id'";
    return db_delete('taikhoan', $where);
}


//Cập nhật thông tin bảng loaitaikhoan_taikhoan
function update_loaitaikhoan_taikhoan($data, $id)
{
    return db_update("loaitaikhoan_taikhoan", $data, "`taiKhoan_id`='$id'");
}