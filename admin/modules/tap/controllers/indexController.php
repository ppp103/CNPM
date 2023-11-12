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
        $hinhanh = basename($_FILES['fileupload']['name']);
        // thư mục lưu file
        $target_dir = "public/images/tap/";
        // vị trí file lưu tạm trong server
        $target_file = $target_dir . $hinhanh;

        move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file);

        $soTap = $_POST['soTap'];
        $noiDung = $_POST['noiDung'];
        $tenSach = $_POST['tenSach'];
         $data = [  
        'soTap' => $soTap,
        'noiDung' => $noiDung,
        'sach_id' => $tenSach,
        'anh' => $hinhanh,
        ];
        ThemTap($data);
        redirect('?mod=tap&action=index');
    }
    load_view('them');
}

function updateAction() {
    $id = $_GET['id'];
    
    if(isset($_POST['btn_sua'])) {
        $hinhanh = $_POST['fileupload'];
        $soTap = $_POST['soTap'];
        $noiDung = $_POST['noiDung'];
        $tenSach = $_POST['tenSach'];
        $data = [  
            'soTap' => $soTap,
            'noiDung' => $noiDung,
            'sach_id' => $tenSach,
            'anh' => $hinhanh,
        ];
        SuaTap($data, $id);
        redirect('?mod=tap&action=index');
    }
    load_view('update');
}

function xoaAction() {
    load_view('xoa');
}