<?php
function construct(){
    load_model('index');
    // load_model('cat');
    load('lib', 'validation');
}
function indexAction(){
    if(isset($_POST['btn_thanhtoan'])) {
        $ngayDat = date('Y-m-d H:i:s');
        $tenKH = $_POST['hoTen'];
        $ngayGiao = date('Y-m-d H:i:s');
        $diaDiemGH = $_POST['diaChi'];
        $ghiChu = "";
        $trangThaiDH = "1";
        $tongTien = "100000";
        $taiKhoan_id = '';
        if (isset($_SESSION['tenDangNhap']) && $_SESSION['tenDangNhap'] !== null) {
            $taiKhoan = taikhoan_by_tenTK($_SESSION['tenDangNhap']);
            $taiKhoan_id = $taiKhoan['id'];
        } else {
            header("Location: http://localhost/CNPM/admin/?mod=users&action=login");
        }
        $data = [  
            'ngayDat' => $ngayDat,
            'tenKH' => $tenKH,
            'ngayGiao' => $ngayGiao,
            'diaDiemGH' => $diaDiemGH,
            'ghiChu' => $ghiChu,
            'trangThaiDH' => $trangThaiDH,
            'tongTien' => $tongTien,
            'taiKhoan_id' => $taiKhoan_id,
        ];
        them_donhang($data);
        $data_donhang = donHangMoiNhat();
        // $data_donhang = donhang_by_tenKH($tenKH);
        foreach ($_SESSION['product_detail'] as $product) {
            $ten_san_pham = $product['ten_san_pham'];
            $so_luong = $product['so_luong'];
            $gia = $product['gia'];
            $giamGia = 0;
            $sach_id = show_sach_by_tensach($ten_san_pham);
            $dataDH_Sach = [
                'donHang_id' => $data_donhang['id'],
                'sach_id' => $sach_id['id'],
                'soLuong' => $so_luong,
                'giamGia' => $giamGia,
            ];
            them_donhang_sach($dataDH_Sach);
        }
    }
    load_view('index');
}

function successAction() {
    load_view('success');
}