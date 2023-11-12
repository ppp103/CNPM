<?php 
    $id = $_GET['id'];
    xoa_theloai_by_id($id);
    redirect('?mod=theloai&action=index');