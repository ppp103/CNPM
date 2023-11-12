<?php
    // $list = show_theloai();
    // foreach($list as &$data){
    //     $data['btn_update'] = "?mod=theloai&action=update&id={$data['id']}";
    //     $data['btn_delete'] = "?mod=theloai&action=xoa&id={$data['id']}";
    // }
    // unset($data);
    // show_array($list_data_post);
?>

<?php
get_header();
?>

<!-- Page Container START -->
<div class="page-container">

<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Danh Sách Thể Loại</h2> 
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-8">
                    <div class="d-md-flex">
                        <div class="m-b-10 m-r-15">
                            <select class="custom-select" style="min-width: 180px;" id="sort-select">
                                <option value="defaut">Sắp xếp</option>
                                <option value="az">Từ A-Z</option>
                                <option value="za">Từ Z-A</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="?mod=theloai&action=them" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Thêm Thể Loại</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <input id="checkAll" type="checkbox">
                                    <label for="checkAll" class="m-b-0"></label>
                                </div>
                            </th>
                            <th>Id</th>
                            <th>Tên thể loại</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                        $itemsPerPage = 10;
                        $paginationResult = paginate("theloai", $currentPage, $itemsPerPage);
                        
                        // Hiển thị dữ liệu
                        foreach ($paginationResult['data'] as $data) {
                            $data['btn_update'] = "?mod=theloai&action=update&id={$data['id']}";
                            $data['btn_delete'] = "?mod=theloai&action=xoa&id={$data['id']}";
                    ?>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="check-item-<?php echo $data['id']?>" type="checkbox">
                                    <label for="check-item-<?php echo $data['id']?>" class="m-b-0"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6 class="m-b-0 m-l-10"><?php echo $data['id']?></h6>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">                           
                                    <h6 class="m-b-0 m-l-10"><?php echo $data['tenTheLoai']?></h6>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="<?php echo $data['btn_update']?>" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                    <i class="anticon anticon-edit"></i>
                                </a>
                                <a href="<?php echo $data['btn_delete']?>" class="btn btn-icon btn-hover btn-sm btn-rounded">
                                    <i class="anticon anticon-delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php 
                    }?>
                    </tbody>
                </table>
            </div>
            <!-- Thanh phân trang -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php
                    for ($i = 1; $i <= $paginationResult['totalPages']; $i++) {
                        $isActive = ($i == $paginationResult['currentPage']) ? "active" : "";
                        echo "<li class='page-item $isActive'><a class='page-link' href='?mod=theloai&action=index&page=$i'>$i</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('#sort-select').change(function() {
        var selectedOption = $(this).val();
        var rows = $('.e-commerce-table tbody tr').get();
        rows.sort(function(a, b) {
            var keyA = $(a).children('td').eq(2).text(); // Tên đăng nhập của hàng a
            var keyB = $(b).children('td').eq(2).text(); // Tên đăng nhập của hàng b

            if (selectedOption === 'az') {
                return (keyA > keyB) ? 1 : -1;
            } else if (selectedOption === 'za') {
                return (keyA < keyB) ? 1 : -1;
            }
        });

        // Xóa các hàng hiện tại từ bảng
        $('.e-commerce-table tbody').empty();

        // Thêm các hàng đã được sắp xếp vào bảng
        $.each(rows, function(index, row) {
            $('.e-commerce-table tbody').append(row);
        });
    });
});
</script>

<!-- ajax tìm kiếm
<script>
    $(document).ready(function(){
        $('#search-input').keyup(function() {
            var searchKeyword = $(this).val();
            var sortOption = $('#sort-select').val(); // Lấy tùy chọn sắp xếp

            $.ajax({
                type: 'POST',
                url: 'modules/theloai/controllers/indexController.php',
                data: { 
                    searchKeyword: searchKeyword,
                    sortOption: sortOption
                },
                success: function(response) {
                    // Cập nhật dữ liệu trang với dữ liệu trả về từ AJAX
                    $('.e-commerce-table tbody').html(response);
                },
                error: function(response) {
                    console.log("Error: " + response);
                }
            });
        });
    });
</script> -->