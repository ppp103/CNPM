<?php
get_header();
?>
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>Giỏ hàng</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Trang chủ</a></li>
                        <li class="tg-active">Giỏ hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
		Inner Banner End
*************************************-->

<div class="colorlib-product">
    <?php
    if (sizeof($_SESSION['giohang']) == 0) {
        echo '<p style="text-align:center; font-size:2.4rem">Giỏ hàng trống! <a href="?mod=product">Mua ngay</a></p>
        ';
    } else { ?>
        <div class="container">
            <div class="row row-pb-lg">
                <div id="cart-wrapper" class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-forth text-left px-4" style="padding-left: 20px">
                            <span>Sách</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Giá</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Số lượng</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Thành tiền</span>
                        </div>
                        <div class="one-eight text-center px-4">
                            <span>Xóa</span>
                        </div>
                    </div>

                    <?php
                    showgiohang();
                    ?>
                </div>
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="total-wrap">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <div class="total">
                                        <?php
                                        if (session_status() === PHP_SESSION_NONE) {
                                            session_start();
                                        }

                                        $tongtien = 0;

                                        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                            $tongtien = 0; // Reset $tongtien for each calculation
                                            for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                                                $tongtien = $tongtien + $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                                            }
                                            $sohang = count($_SESSION['giohang']);
                                        } else {
                                            $sohang = 0;
                                        }
                                        echo ' 
                                   <div class="grand-total">
                                   <p>
                                       <span id="cart-total"><strong>Tổng: ' . number_format($tongtien) . ' VNĐ</strong></span>
                                    </p>
                                    </div>
                               ';
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <a href="?mod=checkout" class="button" style="margin-right: 70px">Thanh toán</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php
get_footer();
?>