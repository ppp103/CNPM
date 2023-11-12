<?php

function ThemDonHang($data) {
    return db_insert('donhang_sach', $data);
}

// show all
function show_DonHang(){
    $sql = "SELECT * FROM donhang_sach";
    $list_data_DonHang = db_fetch_array($sql);
    return $list_data_DonHang;
}

function show_Sach_all() {
    $sql = "SELECT * FROM sach";
    $list_sach = db_fetch_array($sql);
    return $list_sach;
}

// show by id
function show_TaiKhoan($id){
    $sql = "SELECT * FROM taikhoan WHERE id = $id" ;
    $list_data_TaiKhoan = db_fetch_array($sql);
    return $list_data_TaiKhoan;
}

function show_TenDonHang($id){
    $sql = "SELECT * FROM donhang WHERE id = $id" ;
    $list_data_TenDonHang = db_fetch_array($sql);
    return $list_data_TenDonHang;
}

function show_TenSach($id){
    $sql = "SELECT * FROM sach WHERE id = $id" ;
    $list_data_Sach = db_fetch_array($sql);
    return $list_data_Sach;
}

function SuaDonHang($data, $id) {
    $where = "id = '$id'";
    return db_update('donhang_sach', $data, $where);
}

function xoa_DonHang_by_id($id) {
    $where = "id = '$id'";
    return db_delete('donhang_sach', $where);
}

function show_DonHang_by_id($id) {
    $sql = "SELECT * FROM `donhang_sach` WHERE id= '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_ChiTietDonHang_by_id($id){
    $sql = "SELECT * FROM donhang WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_sach_by_id($id){
    $sql = "SELECT * FROM sach WHERE id = $id" ;
    $list_data_Sach = db_fetch_row($sql);
    return $list_data_Sach;
}