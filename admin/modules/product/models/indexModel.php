<?php

//Lấy thông tin user qua username
function get_user_by_username($username)
{
    $item = db_fetch_row("SELECT * from `taikhoan` WHERE `tenDangNhap`='$username'");
    if (!empty($item)) {
        return $item;
    }
}

function ThemSach($data) {
    return db_insert('sach', $data);
}


function show_product(){
    $sql = "SELECT * FROM sach";
    $list_data_products = db_fetch_array($sql);
    return $list_data_products;
}

function show_tacGia($id){
    $sql = "SELECT * FROM tacgia WHERE id = $id" ;
    $list_data_tacGia = db_fetch_array($sql);
    return $list_data_tacGia;
}

function show_theLoai($id){
    $sql = "SELECT * FROM theloai WHERE id = $id" ;
    $list_data_theLoai = db_fetch_array($sql);
    return $list_data_theLoai;
}

function show_NXB($id){
    $sql = "SELECT * FROM nhaxuatban WHERE id = $id" ;
    $list_data_NXB = db_fetch_array($sql);
    return $list_data_NXB;
}

function show_sach_by_id($id) {
    $sql = "SELECT * FROM `sach` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_product_by_id($id) {
    $sql = "SELECT * FROM `sach` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_NXB_by_id($id){
    $sql = "SELECT * FROM nhaxuatban WHERE id = '$id'" ;
    $data = db_fetch_row($sql);
    return $data;
}

function show_theloai_by_id($id) {
    $sql = "SELECT * FROM `theloai` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_tacGia_by_id($id) {
    $sql = "SELECT * FROM `tacgia` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function SuaSach($data, $id) {
    $where = "id = '$id'";
    return db_update('sach', $data, $where);
}

function xoa_product_by_id($id) {
    $where = "id = '$id'";
    return db_delete('sach', $where);
}

// show all table
function showAll_tacGia(){
    $sql = "SELECT * FROM tacgia" ;
    $list_dataAll_tacGia = db_fetch_array($sql);
    return $list_dataAll_tacGia;
}

function showAll_theLoai(){
    $sql = "SELECT * FROM theloai" ;
    $list_dataAll_theLoai = db_fetch_array($sql);
    return $list_dataAll_theLoai;
}

function showAll_NXB(){
    $sql = "SELECT * FROM nhaxuatban" ;
    $list_dataAll_NXB = db_fetch_array($sql);
    return $list_dataAll_NXB;
}