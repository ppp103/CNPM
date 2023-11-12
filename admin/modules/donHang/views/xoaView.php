<?php 
    $id = $_GET['id'];
    xoa_DonHang_by_id($id);
    redirect('?mod=donHang&action=index');