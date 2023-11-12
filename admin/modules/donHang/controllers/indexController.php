<?php

function construct()
{
    load_model('index');
    // load_model('cat');
    load('lib', 'validation');
}

function indexAction()
{
    load_view('index');
}

function themAction() {
    if(isset($_POST['btn_themDonHang'])) {
        $donHang = $_POST['donHang'];
        $sach = $_POST['tenSach'];
        $soLuong = $_POST['soLuong'];
        $giamGia = $_POST['giamGia'];
        $data = [  
        'donHang_id' => $donHang,
        'sach_id' => $sach,
        'soLuong' => $soLuong,
        'giamGia' => $giamGia,
        ];
        ThemDonHang($data);
        redirect('?mod=donHang&action=index');
    }
    load_view('them');
}


function updateAction() {
    $id = $_GET['id'];
    if(isset($_POST['btn_suaDH'])) {
        $donHang = $_POST['donHang'];
        $sach = $_POST['tenSach'];
        $soLuong = $_POST['soLuong'];
        $giamGia = $_POST['giamGia'];
        $data = [  
        'donHang_id' => $donHang,
        'sach_id' => $sach,
        'soLuong' => $soLuong,
        'giamGia' => $giamGia,
       ];
       SuaDonHang($data, $id);
        redirect('?mod=donHang&action=index');
    }
    load_view('update');
}


function xoaAction() {
    load_view('xoa');
}