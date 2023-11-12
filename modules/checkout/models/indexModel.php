<?php 

function show_sach_by_tensach($tenSach) {
    $sql = "SELECT * FROM sach WHERE tenSach = '$tenSach'";
    $sach = db_fetch_row($sql);
    return $sach;
}

function them_donhang($data) {
    return db_insert('donhang', $data);
}

function them_donhang_sach($data) {
    return db_insert('donhang_sach', $data);
}

function donhang_by_tenKH($tenKH) {
    $sql = "SELECT * FROM donhang WHERE tenKH = '$tenKH'";
    $data = db_fetch_row($sql);
    return $data;
}

function taikhoan_by_tenTK($tenDangNhap) {
    $sql = "SELECT * FROM taikhoan WHERE tenDangNhap = '$tenDangNhap'";
    $data = db_fetch_row($sql);
    return $data;
}

function donHangMoiNhat() {
    $sql = "SELECT * from donhang order by id desc LIMIT 1";
    $data = db_fetch_row($sql);
    return $data;
}