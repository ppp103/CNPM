<?php
    get_header();

    $sach = show_Sach_all();
?>

<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div style="width: 700px; border: 1px solid #ccc; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="margin-bottom: 15px;">Thông tin Đơn Hàng</h2>
            <form action="" method="post">
            <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Đơn Hàng:</label>
                    <input type="number" id="donHang" name="donHang" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Sách:</label>
                    <select name="tenSach" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;">
                        <option value="">-- Chọn Tên Sách --</option>
                             <?php
                                foreach($sach as $data){
                                ?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['tenSach'];?></option>
                                <?php
                                }?>
                    </select>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Số Lượng:</label>
                    <input type="number" id="soLuong" name="soLuong" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Giảm Giá:</label>
                    <input type="number" id="giamGia" name="giamGia" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <button name="btn_themDonHang" type="submit" style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px;">Gửi</button>
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
