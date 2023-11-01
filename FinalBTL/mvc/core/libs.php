<?php 
    // require './mvc/core/route.php';
    require ($_SERVER["DOCUMENT_ROOT"].'/CNPM/finalbtl/mvc/core/route.php');
    // require '../core/route.php';
    // tạo SALT, nó giống như 'key app', gắn với password để người khác khó dò ra mật khẩu thật
    define('SALT', '123123$');

    function public_path($patch) {
        echo APP_URL.'public/'.$patch;
    }
?>