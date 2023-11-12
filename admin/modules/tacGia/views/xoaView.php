<?php 
    $id = $_GET['id'];
    xoa_tacGia_by_id($id);
    redirect('?mod=tacGia&action=index');