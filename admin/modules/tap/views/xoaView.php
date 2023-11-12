<?php 
    $id = $_GET['id'];
    xoa_tap_by_id($id);
    redirect('?mod=tap&action=index');