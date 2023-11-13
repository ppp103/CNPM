<?php
function construct()
{
    load_model('index');
}

function indexAction()
{
    // if (isset($_GET['cate_id'])) {
    //     $id = $_GET['cate_id'];
    // }
    $id = isset($_GET['cate_id']) ? $_GET['cate_id'] : 0;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $search = isset($_GET['search']) ? $_GET['search'] : 0;
    if ($id == 0) {
        $id = '';
    }

    if ($search == 0) {
        $search = '';
    }

    $result = get_list_products($id, $page, 8, $search);
    $books = $result['books'];
    $total_books = $result['total_record'];

    $categories = get_list_categories();

    $total_page = ceil($total_books / 8);

    $data = [
        'books' => $books,
        'categories' => $categories,
        'total_page' => $total_page,
        'page' => $page,
        'search' => $search,
        'total_books' => $total_books,
    ];
    load_view('index', $data);
}

function detailAction()
{
    $id = $_GET['id'];
    $result = get_product_by_id($id);
    $book = $result['book'];
    $chaps = $result['chaps'];
    $categories = get_list_categories();
    $data = [
        'categories' => $categories,
        'book' => $book,
        'chaps' => $chaps,
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

// function categoryProductAction(){
//     load_view('categoryProduct');
// }

// function categoryNewsAction(){
//     load_view('categoryNews');
// }

// function detailAction(){
//     load_view('detail');
// }