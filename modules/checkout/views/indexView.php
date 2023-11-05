<?php
get_header();
?>
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>Thanh toán</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">Trang chủ</a></li>
                            <li class="tg-active">Thanh toán</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main section starts -->
    <div class="container">
        <div class="m-b-100" style="height: 300px"></div>
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Thông tin khách hàng</h3>
                    <form id="client-form" class="row contact_form" action="#" method="post" novalidate="novalidate" value="">
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tên" value="" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="number" name="number" placeholder="Số điện thoại" value="" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="email" name="compemailany" placeholder="Email" value="" />
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="address" name="add1" placeholder="Địa chỉ" value="" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Chi tiết đơn hàng</h2>
                        <ul class="list">
                            <li>
                                <a href="#">Sản phẩm <span>Thành tiền</span></a>
                            </li>
                        </ul>
                        <div class="grand-total">
                            <p>
                                <span><strong>Tổng:</strong></span>
                                <span class="tong-gio-hang">Tổng tiền VNĐ</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 text-center">
            <button id="checkout" href="checkout.html" class="button" style="margin-left: 20px">
                Thanh toán
            </button>
        </div>
    </div>
    <!-- Main section ends -->
</div>
<?php
get_footer();
?>