<?php
function get_list_products()
{
    $books = db_fetch_array("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id");
    foreach ($books as &$book) {
        $book['url'] = "?mod=product&action=detail&id={$book['id']}";
    }
    return $books;
}

function get_list_categories()
{
    $result = db_fetch_array("select * from theloai");
    return $result;
}
