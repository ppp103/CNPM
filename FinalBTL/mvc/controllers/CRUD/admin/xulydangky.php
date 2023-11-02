<?php 
    $tenDN = $_POST['tenDangNhap'];
    $pass = $_POST['matKhau'];
    $email = $_POST['email'];
    // require ('../../../../mvc/models/dbCon.php');

    require ($_SERVER["DOCUMENT_ROOT"].'/CNPM/finalbtl/mvc/models/dbCon.php');

    // mã hoá mật khẩu
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    //Viết lệnh sql để thêm dữ liệu
    $dangkysql = "INSERT INTO taikhoan (tenDangNhap, matKhau, email)
        VALUES ('$tenDN', '$hashedPassword', '$email')";

    //Thực thi câu lệnh thêm
    if(mysqli_query($conn, $dangkysql)) {
        header("Location: ../../../../admin/dangnhap");
        exit();
    } else {
        echo "Lỗi: " . $dangkysql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
 ?>