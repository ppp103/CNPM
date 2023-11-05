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

                <div id="cart-products">
                    <div class="product-cart d-flex">
                        <div class="one-forth">
                            <div class="product-img" style="background-image: url('public/images/books/img-01.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            </div>
                            <div class="display-tc">
                                <h3>Tên sách</h3>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <span class="price">123 VNĐ</span>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <input type="number" name="quantity" data-price="123" class="form-control input-number text-center quantity" value="1" min="1" max="100">
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <span class="product-total tong-tien">123 VNĐ</span>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <a data-maSach="S01" class="closed remove-cart"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="total-wrap">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <div class="total">
                                    <div class="grand-total">
                                        <p>
                                            <span><strong>Tổng: 123 VNĐ</strong></span>
                                            <span id="cart-total">123 VNĐ</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <a href="checkout.html" class="button" style="margin-right: 70px">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>