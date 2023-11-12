<?php 
    $id = $_GET['id'];
    xoa_product_by_id($id);
    redirect('?mod=product&action=index');