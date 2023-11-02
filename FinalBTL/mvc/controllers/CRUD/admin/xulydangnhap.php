<?php 
    $tenDN = $_POST['tendangnhap'];
    $mk = $_POST['matkhau'];

    //connect db
    require ($_SERVER["DOCUMENT_ROOT"].'/CNPM/finalbtl/mvc/models/dbCon.php');

    // $sql = "SELECT * 
    //     FROM taikhoan tk JOIN loaitaikhoan_taikhoan ltk_tk ON tk.id = ltk_tk.taiKhoan_id
    //     JOIN loaitaikhoan ltk ON ltk.id = ltk_tk.loaiTaiKhoan_id 
    //     WHERE tenDangNhap = '$tenDN' & matKhau = '$mk'";

    // Sử dụng Prepared Statement để ngăn chặn tấn công SQL Injection
    $stmt = $conn->prepare("SELECT *
        FROM taikhoan tk 
        LEFT JOIN loaitaikhoan_taikhoan ltk_tk ON tk.id = ltk_tk.taiKhoan_id
        LEFT JOIN loaitaikhoan ltk ON ltk.id = ltk_tk.loaiTaiKhoan_id 
        WHERE tenDangNhap = ?");
    // từng nào biến '?' truyền từng đấy kí tự 's'
    $stmt->bind_param("s", $tenDN);

    // Thực thi truy vấn
    $stmt->execute();

    // Lấy kết quả
    $result = $stmt->get_result();

    // Kiểm tra xem có tồn tại tài khoản và mật khẩu trong database hay không
    if ($result->num_rows >= 1) {
        // Đăng nhập thành công
        // echo "Đăng nhập thành công!";
        $row = $result->fetch_assoc();
        $loaitk = $row['tenLoai'];
        $hashedPaswordFromDB = $row['matKhau'];

        // so sánh mật khẩu đã nhập thẻ input với mk đã mã hoá trong db
        if(password_verify($mk, $hashedPaswordFromDB)) {
            // đăng nhập thành công
            if($loaitk == "Quản lý sản phẩm" || $loaitk == "Quản lý nhân viên" || $loaitk == "Quản lý khách hàng" || $loaitk == "Quản lý hoá đơn") {
                echo 'bạn là admin';
                // exit();
            } else {
                echo 'bạn là user';
                // exit();
            }
        } else {
            // báo lỗi: sai mật khẩu
            echo "Sai mật khẩu";
        }
    } else {
        // Báo lỗi: sai tài khoản hoặc mật khẩu
        echo "Sai tài khoản hoặc mật khẩu!";
    }

    // Đóng kết nối và statement
    $stmt->close();
    $conn->close();
?>