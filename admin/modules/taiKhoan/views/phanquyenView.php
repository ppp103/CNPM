<?php 
    $id = $_GET['id'];
    $listLoaiTK = show_loaiTK();
    $listTaiKhoan = show_taikhoan_by_id($id);
    $username = $listTaiKhoan['tenDangNhap'];
    $loaitaikhoan = show_loaitaikhoan_by_username($username);
?>

<?php
    get_header();
?>

    <div class="form-container" style="text-align: center; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 style="margin-bottom: 20px;">Phân Quyền Người Dùng</h2>
        <h2 style="margin-bottom: 20px; color: green;">Tên người dùng: <?php echo $loaitaikhoan['tenDangNhap']?></h2>
        <h2 style="margin-bottom: 20px; color: green;">Loại tài khoản: <?php echo $loaitaikhoan['tenLoai']?></h2>
        <form id="permission-form" method="post">
            <?php 
                foreach($listLoaiTK as $list) {
                    $checked = '';
                    if ($list['tenLoai'] === $loaitaikhoan['tenLoai']) {
                        $checked = 'checked';
                    } 
                    if($loaitaikhoan['tenLoai'] == null) {
                        
                    }
            ?>
                <label style="display: block; margin-bottom: 10px;">
                    <input <?php echo $checked?> name="loaiTaiKhoan" type="radio" style="margin-right: 5px;" value="<?php echo $list['id']; ?>"><?php echo $list['tenLoai']?>
                </label>
            <?php } ?>
            <button name="save" type="submit" style="margin-top: 20px; padding: 10px 20px; background-color: #4caf50; color: white; border: none; border-radius: 5px; cursor: pointer;">Lưu Quyền</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('input[type=radio][name=loaiTaiKhoan]').change(function() {
                var selectValue = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'modules/taiKhoan/controllers/indexController.php',  // duong dan toi file xu ly ajax
                    data: { loaiTaiKhoan: selectValue },
                    success: function(response) {
                        // alert("Thanh cong!");
                    },
                    error: function(response) {
                        alert("That bai");
                    }
                });
            });
        });
    </script>