<?php
    unset($_SESSION['is_login']);
    unset($_SESSION['tenDangNhap']);
    redirect("?mod=users&action=login");
?>