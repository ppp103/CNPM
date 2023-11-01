<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "qlbansach";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        echo "Ket noi khong thanh cong";
        die("Connection failed: ".$conn->connect_error);
    } else {
        // echo "good";
    }
?>