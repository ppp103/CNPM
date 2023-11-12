<?php

function ThemTacGia($data) {
    return db_insert('tacgia', $data);
}


function show_tacGia(){
    $sql = "SELECT * FROM tacgia";
    $list_data_tacGia = db_fetch_array($sql);
    return $list_data_tacGia;
}



function SuaTacGia($data, $id) {
    $where = "id = '$id'";
    return db_update('tacgia', $data, $where);
}

function xoa_tacGia_by_id($id) {
    $where = "id = '$id'";
    return db_delete('tacgia', $where);
}


function show_tacGia_by_id($id) {
    $sql = "SELECT * FROM `tacgia` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}







