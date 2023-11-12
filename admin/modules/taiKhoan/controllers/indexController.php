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
    if(isset($_POST['btn_themTap'])) {
        $soTap = $_POST['soTap'];
        $noiDung = $_POST['noiDung'];
        $tenSach = $_POST['tenSach'];
        $anh = $_POST['anh'];
        $data = [  
        'soTap' => $soTap,
        'noiDung' => $noiDung,
        'sach_id' => $tenSach,
        'anh' => $anh,
        ];
        ThemTaiKhoan($data);
        redirect('?mod=tap&action=index');
    }
    load_view('them');
}

function phanquyenAction() {
    $id = $_GET['id'];
    if(isset($_POST['save'])) {
        $loaiTaiKhoan = $_POST['loaiTaiKhoan'];
        $taikhoan = show_taikhoan_by_id($id);
        $tenTaiKhoan = show_loaitaikhoan_by_username($taikhoan['tenDangNhap']);
        // nếu là tài khoản mới sẽ chưa được phân quyền vì vậy ta cần bước này để phân được quyền cho tài khoản đó.
        if($tenTaiKhoan['tenLoai'] === null) {
            $data2 = [
                'loaiTaiKhoan_id' => $loaiTaiKhoan,
                'taiKhoan_id' => $id,
            ];
            them_ltk_tk($data2);
        }
        
        $data = [
            'loaiTaiKhoan_id' => $loaiTaiKhoan,
        ];

        update_loaitaikhoan_taikhoan($data, $id);
    }
    load_view('phanquyen');
}

function xoaAction() {
    load_view('xoa');
}
