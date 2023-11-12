<?php
    $id=$_GET['id'];
    $data = show_DonHang_by_id($id);
    $sach = show_sach_by_id($data['sach_id']);
    $sach_all = show_Sach_all();
?>
<?php
    get_header();
?>
value="<?php echo $data['ngayDat']?>"

<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div style="width: 700px; border: 1px solid #ccc; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="margin-bottom: 15px;">Thông tin Đơn Hàng</h2>
            <form action="" method="post">
            <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Đơn Hàng:</label>
                    <input value="<?php echo $data['donHang_id']?>" type="number" id="donHang" name="donHang" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Sách:</label>
                    <select name="tenSach" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;">
                        <option value="<?php echo $sach['id']; ?>"><?php echo $sach['tenSach'];?></option>
                        <?php
                            foreach($sach_all as $datas){
                        ?>
                            <option value="<?php echo $datas['id']; ?>"><?php echo $datas['tenSach'];?></option>
                        <?php
                        }?>
                    </select>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Số Lượng:</label>
                    <input value="<?php echo $data['soLuong']?>" type="number" id="soLuong" name="soLuong" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Giảm Giá:</label>
                    <input value="<?php echo $data['giamGia']?>" type="number" id="giamGia" name="giamGia" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <button name="btn_suaDH" type="submit" style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px;">Gửi</button>
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