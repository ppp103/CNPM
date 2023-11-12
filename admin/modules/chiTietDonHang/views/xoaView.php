<?php 
    $id = $_GET['id'];
    xoa_ChiTietDonHang_by_id($id);
    redirect('?mod=chiTietDonHang&action=index');