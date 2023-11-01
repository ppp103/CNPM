<?php 
    $tenDN = $_POST['tenDangNhap'];
    $pass = $_POST['matKhau'];
    $email = $_POST['email'];
    // require ('../../../../mvc/models/dbCon.php');

    require ($_SERVER["DOCUMENT_ROOT"].'/CNPM/finalbtl/mvc/models/dbCon.php');
    // $result = $_SERVER["DOCUMENT_ROOT"];
    // echo $result;

    //Viết lệnh sql để thêm dữ liệu
    $dangkysql = "INSERT INTO taikhoan (tenDangNhap, matKhau, email)
        VALUES ('$tenDN', '$pass', '$email')";

//     //Thực thi câu lệnh thêm
    mysqli_query($conn, $dangkysql);


 ?>