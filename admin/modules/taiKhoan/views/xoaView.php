<?php 
    $id = $_GET['id'];
    xoa_taikhoan_by_id($id);
    redirect('?mod=taikhoan&action=index');