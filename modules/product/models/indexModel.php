<?php
// function get_list_products()
// {
//     $books = db_fetch_array("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia 
//                             from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id");
//     foreach ($books as &$book) {
//         $book['url'] = "?mod=product&action=detail&id={$book['id']}";
//     }
//     return $books;
// }
function get_list_products($cateId, $pageNumber, $pageSize, $search)
{
    if ($cateId == '') {
        $cateId = '%%';
    }
    $start = ($pageNumber - 1) * $pageSize;
    $books = db_fetch_array("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia 
                            from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id
                            where sach.tenSach LIKE '%$search%' and sach.theLoai_id LIKE '$cateId'
                            LIMIT $pageSize
                            OFFSET $start");
    foreach ($books as &$book) {
        $book['url'] = "?mod=product&action=detail&id={$book['id']}";
    }

    $total_record = sizeof(db_fetch_array("SELECT * from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id
    where sach.tenSach LIKE '%$search%' and sach.theLoai_id LIKE '$cateId'"));

    $data = [
        'books' => $books,
        'total_record' => $total_record,
    ];

    return $data;
}

function get_product_by_id($id)
{
    $book = db_fetch_row("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id where sach.id = {$id}");
    return $book;
}

function get_list_categories()
{
    $result = db_fetch_array("select * from theloai");
    foreach ($result as &$item) {
        $item['url'] = "?mod=product&action=categoryFilter&id={$item['id']}";
    }
    return $result;
}


function get_product_by_category($id)
{
    $books = db_fetch_array("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id where sach.theLoai_id = $id");
    foreach ($books as &$book) {
        $book['url'] = "?mod=product&action=detail&id={$book['id']}";
    }
    return $books;
}
