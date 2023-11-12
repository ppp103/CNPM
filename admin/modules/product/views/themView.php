<?php
    get_header();

    $list_dataAll_theLoai = showAll_theLoai();
    $list_dataAll_NXB = showAll_NXB();
    $list_dataAll_tacGia = showAll_tacGia();
?>

<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div style="width: 700px; border: 1px solid #ccc; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h2 style="margin-bottom: 15px;">Thông tin Sản Phẩm</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Ảnh:</label>
                    <input type="file" id="anh" name="fileupload" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Tên Sách:</label>
                    <input type="text" id="tenSach" name="tenSach" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Giá Bán:</label>
                    <input type="number" id="giaBan" name="giaBan" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Ngày Cập Nhật:</label>
                    <input type="datetime" id="ngayCapNhat" name="ngayCapNhat" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Số Lượng Còn:</label>
                    <input type="number" id="soLuongCon" name="soLuongCon" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Nhà Xuất Bản:</label>
                    <select name="nhaXuatBan" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;">
                        <option value="">-- Chọn Tên Nhà Xuất Bản  --</option>
                             <?php
                                foreach($list_dataAll_NXB as $data){
                                ?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['tenNXB'];?></option>
                                <?php
                                }?>
                    </select>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Thể Loại:</label>
                    <select name="theLoai" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;">
                        <option value="">-- Chọn Tên Thể Loại  --</option>
                             <?php
                                foreach($list_dataAll_theLoai as $data){
                                ?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['tenTheLoai'];?></option>
                                <?php
                                }?>
                    </select>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="category" style="display: block; margin-bottom: 5px; font-weight: bold;">Tác Giả:</label>
                    <select name="tacGia" style="width: 100%; padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 3px;">
                        <option value="">-- Chọn Tên Tác Giả  --</option>
                             <?php
                                foreach($list_dataAll_tacGia as $data){
                                ?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['tenTacGia'];?></option>
                                <?php
                                }?>
                    </select>
                </div>
                <button name="btn_themS" type="submit" style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px;">Gửi</button>
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
