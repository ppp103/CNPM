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
    if(isset($_POST['btn_themChiTietDonHang'])) {
        $ngayDat = $_POST['ngayDat'];
        $tenKH = $_POST['tenKH'];
        $ngayGiao = $_POST['ngayGiao'];
        $diaDiemGH = $_POST['diaDiemGH'];
        $ghiChu = $_POST['ghiChu'];
        $trangThaiDH = $_POST['trangThaiDH'];
        $tongTien = $_POST['tongTien'];
        $taiKhoan = $_POST['taiKhoan'];
         $data = [  
        'ngayDat' => $ngayDat,
        'tenKH' => $tenKH,
        'ngayGiao' => $ngayGiao,
        'diaDiemGH' => $diaDiemGH,
        'ghiChu' => $ghiChu,
        'trangThaiDH' => $trangThaiDH,
        'tongTien' => $tongTien,
        'taiKhoan_id' => $taiKhoan,
        ];
        ThemChiTietDonHang($data);
        redirect('?mod=chiTietDonHang&action=index');
    }
    load_view('them');
}


function updateAction() {
    $id = $_GET['id'];
    if(isset($_POST['btn_suaCTDH'])) {
        $ngayDat = $_POST['ngayDat'];
        $tenKH = $_POST['tenKH'];
        $ngayGiao = $_POST['ngayGiao'];
        $diaDiemGH = $_POST['diaDiemGH'];
        $ghiChu = $_POST['ghiChu'];
        $trangThaiDH = $_POST['trangThaiDH'];
        $tongTien = $_POST['tongTien'];
        $taiKhoan = $_POST['taiKhoan'];
         $data = [  
        'ngayDat' => $ngayDat,
        'tenKH' => $tenKH,
        'ngayGiao' => $ngayGiao,
        'diaDiemGH' => $diaDiemGH,
        'ghiChu' => $ghiChu,
        'trangThaiDH' => $trangThaiDH,
        'tongTien' => $tongTien,
        'taiKhoan_id' => $taiKhoan,
       ];
       SuaCTDH($data, $id);
        redirect('?mod=chiTietDonHang&action=index');
    }
    load_view('update');
}


function xoaAction() {
    load_view('xoa');
}

function chiTietAction()
{
    load_view('chiTiet');
}