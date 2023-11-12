<?php

function ThemTap($data) {
    return db_insert('tap', $data);
}

// show all
function show_Tap(){
    $sql = "SELECT * FROM tap";
    $list_data_Tap = db_fetch_array($sql);
    return $list_data_Tap;
}

function show_Sach_all(){
    $sql = "SELECT * FROM sach";
    $list_data_Sach = db_fetch_array($sql);
    return $list_data_Sach;
}

// show by id
function show_tap_by_id($id) {
    $sql = "SELECT * FROM `tap` WHERE id = '$id'";
    $data = db_fetch_row($sql);
    return $data;
}

function show_Sach($id){
    $sql = "SELECT * FROM sach WHERE id = '$id'" ;
    $list_data_Sach = db_fetch_row($sql);
    return $list_data_Sach;
}

function SuaTap($data, $id) {
    $where = "id = '$id'";
    return db_update('tap', $data, $where);
}

function xoa_tap_by_id($id) {
    $where = "id = '$id'";
    return db_delete('tap', $where);
}