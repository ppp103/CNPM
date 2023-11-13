<?php
function construct()
{
    load_model('index');
    // load_model('cat');
    load('lib', 'validation');
}

function indexAction(){
    $books = get_list_products();
    $firstbook = get_first_products();
    $selectedBooks = get_three_products();
    $data = [
        'books' => $books,
        'firstbook' => $firstbook,
        'selectedBooks'=> $selectedBooks,
    ];
    load_view('index', $data);
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
function detailAction()
{
    $id = $_GET['id'];
    $book = get_product_by_id($id);
    $categories = get_list_categories();
    $data = [
        'categories' => $categories,
        'book' => $book,
    ];
    load_view('detail', $data);
}

function categoryFilterAction()
{
    $id = $_GET['id'];
    $books = get_product_by_category($id);
    $categories = get_list_categories();

    $data = [
        'categories' => $categories,
        'books' => $books,
    ];
    load_view('categoryFilter', $data);
}

?>
