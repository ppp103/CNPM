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
    if(isset($_POST['btn_themTG'])) {
        $hinhanh = basename($_FILES['fileupload']['name']);
        // thư mục lưu file
        $target_dir = "public/images/author/";
        // vị trí file lưu tạm trong server
        $target_file = $target_dir . $hinhanh;

        move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file);

        $tenTG = $_POST['tenTacGia'];
        $data = [  
        'tenTacGia' => $tenTG,
        'anh' => $hinhanh,
        ];
        ThemTacGia($data);
        redirect('?mod=tacGia&action=index');
    }
    load_view('them');
}


function updateAction() {
    $id = $_GET['id'];
    if(isset($_POST['btn_suaTG'])) {
        $anh = $_POST['anh'];
        $tenTG = $_POST['tenTacGia'];
        $data = [  
        'tenTacGia' => $tenTG,
        'anh' => $anh,
       ];
        SuaTacGia($data, $id);
        redirect('?mod=tacGia&action=index');
    }
    load_view('update');
}


function xoaAction() {
    load_view('xoa');
}