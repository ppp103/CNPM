<?php 

function get_list_products()
{
    $books = db_fetch_array("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id");
    foreach ($books as &$book) {
        $book['url'] = "?mod=product&action=detail&id={$book['id']}";
    }
    return $books;
}

function get_first_products()
{
    $books = db_fetch_array("SELECT sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia FROM sach JOIN theloai ON sach.theloai_id = theloai.id JOIN tacgia ON sach.tacgia_id = tacgia.id");
    
    // Lấy giá trị của phần tử đầu tiên
    $firstBook = reset($books);

    // Thêm URL cho phần tử đầu tiên
    $firstBook['url'] = "?mod=product&action=detail&id={$firstBook['id']}";

    return $firstBook;
}
function get_three_products()
{
    $books = db_fetch_array("SELECT sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia FROM sach JOIN theloai ON sach.theloai_id = theloai.id JOIN tacgia ON sach.tacgia_id = tacgia.id");
    
    // Số lượng phần tử bạn muốn lấy
    $numberOfItemsToRetrieve = 3;

    // Mảng để lưu trữ các giá trị cần lấy
    $selectedBooks = [];

    // Duyệt qua mảng và lấy các giá trị cần thiết
    foreach ($books as $index => $book) {
        // Thêm URL cho mỗi phần tử
        $book['url'] = "?mod=product&action=detail&id={$book['id']}";

        // Thêm vào mảng kết quả
        $selectedBooks[] = $book;

        // Nếu đã lấy đủ số lượng phần tử mong muốn, thoát khỏi vòng lặp
        if (count($selectedBooks) >= $numberOfItemsToRetrieve) {
            break;
        }
    }

    return $selectedBooks;
}
function get_product_by_id($id)
{
    $book = db_fetch_row("select sach.id, tenSach, sach.anh, giaBan, moTa, ngayCapNhat, soLuongCon, tenTheLoai, tenTacGia from sach join theloai on sach.theloai_id = theloai.id join tacgia on sach.tacgia_id = tacgia.id where sach.id = {$id}");
    return $book;
}

function get_list_categories()
{
    $result = db_fetch_array("select * from theloai");
    return $result;
}
?>