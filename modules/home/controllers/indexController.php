<?php
function construct()
{
    load_model('index');
    // load_model('cat');
    load('lib', 'validation');
}

function indexAction(){
    $books = get_list_products();
    
    $data = [
        'books' => $books,
        
    ];
    load_view('index', $data);
}
?>