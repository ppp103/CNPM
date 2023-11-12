<?php

function construct()
{
    load_model('index');
    load('lib', 'validation');
}

function indexAction()
{
    $info_user = get_user_by_username(user_login());
    $_SESSION['tenDangNhap'] = $info_user['tenDangNhap'];
    load_view('index');
}

function themAction() {
    if(isset($_POST['btn_themS'])) {
        $hinhanh = basename($_FILES['fileupload']['name']);
        // thư mục lưu file
        $target_dir = "public/images/books/";
        // vị trí file lưu tạm trong server
        $target_file = $target_dir . $hinhanh;

        move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file);

        //
        // $tenAnh = $_POST['anh'];
        $tenS = $_POST['tenSach'];
        $tenGB = $_POST['giaBan'];
        $tenNCN = $_POST['ngayCapNhat'];
        $tenSLC = $_POST['soLuongCon'];
        $tenNXB = $_POST['nhaXuatBan'];
        $tenTL = $_POST['theLoai'];
        $tenTG = $_POST['tacGia'];
        $data = [      
        'tenSach' => $tenS,
        'giaBan' => $tenGB,
        'ngayCapNhat' => $tenNCN,
        'soLuongCon' => $tenSLC,
        'nhaXuatBan_id' => $tenNXB,
        'theLoai_id' => $tenTL,
        'tacGia_id' => $tenTG,
        'anh' => $hinhanh,
        ];
        ThemSach($data);
        redirect('?mod=product&action=index');
    }
    load_view('them');
}

function updateAction() {
    $id = $_GET['id'];
    
    if(isset($_POST['btn_suaS'])) {
        $hinhanh = $_POST['fileupload'];
        $tenS = $_POST['tenSach'];
        $tenGB = $_POST['giaBan'];
        $tenNCN = $_POST['ngayCapNhat'];
        $tenSLC = $_POST['soLuongCon'];
        $tenNXB = $_POST['nhaXuatBan'];
        $tenTL = $_POST['theLoai'];
        $tenTG = $_POST['tacGia'];
        $data = [      
            'tenSach' => $tenS,
            'giaBan' => $tenGB,
            'ngayCapNhat' => $tenNCN,
            'soLuongCon' => $tenSLC,
            'nhaXuatBan_id' => $tenNXB,
            'theLoai_id' => $tenTL,
            'tacGia_id' => $tenTG,
            'anh' => $hinhanh,
        ];
        SuaSach($data, $id);
        redirect('?mod=product&action=index');
    }
    load_view('update');
}

function xoaAction() {
    load_view('xoa');
}