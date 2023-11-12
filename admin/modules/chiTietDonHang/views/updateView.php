<?php
    $id=$_GET['id'];
    $data = show_ChiTietDonHang_by_id($id);
    $list_dataAll_TaiKhoan = showALL_TaiKhoan();
?>
<?php
    get_header();
?>


<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div style="width: 700px; border: 1px solid #ccc; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="margin-bottom: 15px;">Thông tin Đơn Hàng</h2>
            <form action="" method="post">
            <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Ngày Đặt:</label>
                    <input value="<?php echo $data['ngayDat']?>" type="text" id="ngayDat" name="ngayDat" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Tên Khách Hàng:</label>
                    <input value="<?php echo $data['tenKH']?>" type="text" id="tenKH" name="tenKH" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Ngày Giao:</label>
                    <input value="<?php echo $data['ngayGiao']?>" type="text" id="ngayGiao" name="ngayGiao" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Địa Điểm Giao Hàng:</label>
                    <input value="<?php echo $data['diaDiemGH']?>" type="text" id="diaDiemGH" name="diaDiemGH" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Ghi Chú:</label>
                    <input value="<?php echo $data['ghiChu']?>" type="text" id="ghiChu" name="ghiChu" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Trạng Thái Đơn Hàng:</label>
                    <input value="<?php echo $data['trangThaiDH']?>" type="text" id="trangThaiDH" name="trangThaiDH" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Tổng Tiền:</label>
                    <input value="<?php echo $data['tongTien']?>" type="number" id="tongTien" name="tongTien" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Tài Khoản:</label>
                    <select name="taiKhoan" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;">
                        <option value="">-- Chọn Tên Tài Khoản --</option>
                             <?php
                                foreach($list_dataAll_TaiKhoan as $data){
                                ?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['hoTen'];?></option>
                                <?php
                                }?>
                    </select>
                </div>
                <button name="btn_suaCTDH" type="submit" style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px;">Gửi</button>
            </form>
        </div>
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    <footer class="footer">
        <div class="footer-content">
            <p class="m-b-0">Copyright &copy; 2021-<?php echo date('Y') ?> . All rights reserved.</p>
            <span>
                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                <a href="#" class="text-gray">Privacy &amp; Policy</a>
            </span>
        </div>
    </footer>
    <!-- Footer END -->

</div>

<!-- Core Vendors JS -->
<script src="public/js/vendors.min.js"></script>

<!-- page js -->
<script src="public/vendors/chartjs/Chart.min.js"></script>
<script src="public/js/pages/dashboard-default.js"></script>

<!-- Core JS -->
<script src="public/js/app.min.js"></script>