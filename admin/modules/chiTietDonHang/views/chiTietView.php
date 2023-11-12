<?php
    $id = $_GET['id'];
    $data = show_ChiTietDonHang_by_id($id);
    $donHang = show_DonHang_by_id($id);
    global $tongTien, $tongGiamGia;
?>

<?php
get_header();
?>


<!-- Page Container START -->
<div class="page-container">

<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Chi Tiết Đơn Hàng</h2> 
    </div>
    <div class="card">
        <div class="card-body">
            
<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice" class="p-h-30">
                <div class="m-t-15 lh-2">
                    <div class="inline-block">
                        <img class="img-fluid" src="public/images/logo/logo.png" alt="">
                        <address class="p-l-10">
                            <span class="font-weight-semibold text-dark">Enlink, Inc.</span><br>
                            <span>9498 Cầu Giấy</span><br>
                            <span>Hà Nội</span><br>
                            <span class="text-dark" title="Phone">Số điện thoại:</span>
                            <span>0374552192</span>
                        </address>
                    </div>
                    <div class="float-right">
                        <h2>Chi tiết đơn hàng</h2>
                    </div>
                </div>
                
                <div class="row m-t-20 lh-2">
                    <div class="col-sm-9">
                        <h3 class="p-l-10 m-t-10">Tên khách hàng: <?php echo $donHang['tenKH'] ?></h3>
                        <address class="p-l-10 m-t-10">
                            <span>Địa chỉ: <?php echo $donHang['diaDiemGH'] ?></span><br>
                        </address>
                    </div>
                    <div class="col-sm-3">
                        <div class="m-t-80">
                            <div class="text-dark text-uppercase d-inline-block">
                                <span class="font-weight-semibold text-dark">Mã đơn hàng :</span>
                            </div>
                            <div class="float-right"><?php echo $donHang['id'] ?></div>
                        </div>
                       
                    </div>
                    
                </div>
                
                <div class="m-t-20">
                    <div class="table-responsive">
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    <th>Tên Sách</th>
                                    <th>Số Lượng</th>
                                    <th>Giá Sách</th>
                                    <th>Giảm Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($data as $item){
                                    $tongTien += $item['giaBan'] * $item['soLuong'] ;
                                    $tongGiamGia += $item['giamGia'];
                            ?>
                                    <tr>
                                        <th><?php echo $item['tenSach'] ?></th>
                                        <td><?php echo $item['soLuong'] ?></td>
                                        <td><?php echo $item['giaBan'] ?></td>
                                        <td><?php echo $item['giamGia'] ?>%</td>
                                    </tr>
                            <?php
                                }?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row m-t-30 lh-1-8">
                        <div class="col-sm-12">
                            <div class="float-right text-right">
                                <h3><span class="font-weight-semibold text-dark">Tổng tiền : <?php echo number_format($tongTien = $tongTien - ($tongGiamGia/100 *$tongTien))  ?>  VNĐ</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row m-v-20">
                        <div class="col-sm-6">
                            <img class="img-fluid text-opacity m-t-5" width="100" src="public/images/logo/logo.png" alt="">
                        </div>
                        <div class="col-sm-6 text-right">
                            <small><span class="font-weight-semibold text-dark">Số điện thoại: </span>0374552192</small>
                            <br>
                            <small>support@themenate.com</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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