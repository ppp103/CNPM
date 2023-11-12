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
    if(isset($_POST['btn_themTL'])) {
        $tenTL = $_POST['tenTheLoai'];
        $data = [
            'tenTheLoai' => $tenTL,
        ];
        ThemTheLoai($data);
        redirect('?mod=theloai&action=index');
    }
    load_view('them');
}

function updateAction() {
    $id = $_GET['id'];
    $tenTL = $_POST['tenTheLoai'];
    $data = [
        'tenTheLoai' => $tenTL,
    ];
    if(isset($_POST['btn_suaTL'])) {
        SuaTheLoai($data, $id);
        redirect('?mod=theloai&action=index');
    }
    load_view('update');
}

function xoaAction() {
    load_view('xoa');
}