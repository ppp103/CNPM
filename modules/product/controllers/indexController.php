<?php
function construct()
{
    load_model('index');
}

function indexAction()
{
    $books = get_list_products();
    $categories = get_list_categories();
    $data = [
        'books' => $books,
        'categories' => $categories,
    ];
    load_view('index', $data);
}

function detailAction()
{
    $id = $_GET['id'];
    $book = get_product_by_id($id);
    $data = ['book' => $book];
    load_view('detail', $data);
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