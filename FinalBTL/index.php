<?php 
    session_start();
    ob_start();
    // require_once './public/Brigde.php';
    require ($_SERVER["DOCUMENT_ROOT"].'/CNPM/finalbtl/mvc/Brigde.php');
    $app = new App();
?>