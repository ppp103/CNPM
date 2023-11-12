<?php

function ThemChiTietDonHang($data) {
    return db_insert('donhang', $data);
}


function show_ChiTietDonHang(){
    $sql = "SELECT * FROM donhang";
    $list_data_ChiTietDonHang = db_fetch_array($sql);
    return $list_data_ChiTietDonHang;
}


function show_TaiKhoan($id){
    $sql = "SELECT * FROM taikhoan WHERE id = $id" ;
    $list_data_TaiKhoan = db_fetch_array($sql);
    return $list_data_TaiKhoan;
}


function SuaCTDH($data, $id) {
    $where = "id = '$id'";
    return db_update('donhang', $data, $where);
}

function xoa_ChiTietDonHang_by_id($id) {
    $where = "id = '$id'";
    return db_delete('donhang', $where);
}


function show_ChiTietDonHang_by_id($id) {
    $sql = "SELECT * 
    from donhang 
    join donhang_sach on donhang.id = donhang_sach.donHang_id
    join sach on sach.id = donhang_sach.sach_id
    where donhang_sach.donHang_id = '$id'";
    $data = db_fetch_array($sql);
    return $data;
}

function show_DonHang_by_id($id){
    $sql = "SELECT * FROM donhang WHERE id = $id" ;
    $data = db_fetch_row($sql);
    return $data;
}

function showALL_TaiKhoan(){
    $sql = "SELECT * FROM taikhoan" ;
    $list_dataAll_TaiKhoan = db_fetch_array($sql);
    return $list_dataAll_TaiKhoan;
}



