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
?>