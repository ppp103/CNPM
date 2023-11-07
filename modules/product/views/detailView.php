<?php
get_header();

?>
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="public/Images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>Sách</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Trang chủ</a></li>
                        <li><a href="javascript:void(0);">Sách</a></li>
                        <li class="tg-active"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
			News Grid Start
	*************************************-->
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-productdetail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <form method="post" action="?mod=cart">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg"><img src="public/images/books/<?php echo $book['anh'] ?>" alt="image description"></figure>
                                            <div class="tg-postbookcontent">
                                                <span class="tg-bookprice">
                                                    <ins> <?php echo $book['giaBan'] ?> VNĐ</ins>
                                                </span>
                                                <ul class="tg-delevrystock">
                                                    <li><i class="icon-rocket"></i><span>Freeship toàn cầu</span></li>
                                                    <li><i class="icon-checkmark-circle"></i><span>Xuất kho từ Mỹ sau 2 ngày</span></li>
                                                    <li><i class="icon-store"></i><span>Trạng thái: <em>Còn hàng</em></span></li>
                                                </ul>
                                                <div class="tg-quantityholder">
                                                    <em class="minus">-</em>
                                                    <input type="text" class="result" value="0" id="quantity1" name="quantity">
                                                    <em class="plus">+</em>
                                                </div>
                                                <input class="tg-btn tg-btnstyletwo add-to-cart" data-maSach="@sp.MaSach" name="addcart"  type="submit" value="Đặt Hàng"/>
                                                <input id="MaSach" name="id" data-id="<?php echo $book['id'] ?>" type="hidden" value="<?php echo $book['id'] ?>"/>
                                                <input type="hidden" name="anh" value="<?php echo $book['anh'] ?>"/>
                                                <input type="hidden" name="tenSach" value="<?php echo $book['tenSach'] ?>"/>
                                                <input type="hidden" name="giaBan" value="<?php echo $book['giaBan']?>" />
                                                <input type="hidden" name="soluong" value="1">

                                                <input asp-for="MaSach" type="hidden" />
                                               
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <div class="tg-productcontent">
                                            <ul class="tg-bookscategories">
                                                <li><a><?php echo $book['tenTheLoai'] ?></a></li>
                                            </ul>
                                            <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                            <div class="tg-booktitle">
                                                <h3><?php echo $book['tenSach'] ?></h3>
                                            </div>
                                            <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);"><?php echo $book['tenTacGia'] ?></a></span>
                                            <span class="tg-stars"><span></span></span>
                                            <span class="tg-addreviews"><a href="javascript:void(0);">Nhận xét</a></span>
                                            <div class="tg-share">
                                                <span>Chia sẻ:</span>
                                                <ul class="tg-socialicons">
                                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-sectionhead">
                                                <h2>Chi tiết sản phẩm</h2>
                                            </div>
                                            <ul class="tg-productinfo">
                                                <li><span>Format:</span><span>Bìa cứng</span></li>
                                                <li><span>Trang:</span><span>528 pages</span></li>
                                                <li><span>Kích thước:</span><span>153 x 234 x 43mm | 758g</span></li>
                                                <li><span>Ngày xuất bản:</span><span>@Model.NgayCapNhat</span></li>
                                                <li><span>Tác giả:</span><span>@Model.MaTgNavigation.TenTg</span></li>
                                                <li><span>Ngôn ngữ:</span><span>Tiếng việt</span></li>
                                            </ul>
                                            <div class="tg-alsoavailable">
                                                <figure>
                                                    <img src="public/Images/img-02.jpg" alt="image description">
                                                    <figcaption>
                                                        <h3>Các bản khác:</h3>
                                                        <ul>
                                                            <li><span>CD: 180,300 VNĐ</span></li>
                                                            <li><span>Khổ to: 190,300 VNĐ</span></li>
                                                            <li><span>E-Book 110,300 VNĐ</span></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tg-productdescription">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-sectionhead">
                                                <h2>Mô tả sách</h2>
                                            </div>
                                            <ul class="tg-themetabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#description" data-toggle="tab">Mô tả</a></li>
                                                <li role="presentation"><a href="#review" data-toggle="tab">Đánh giá</a></li>
                                            </ul>
                                            <div class="tg-tab-content tab-content">
                                                <div role="tabpanel" class="tg-tab-pane tab-pane active" id="description">
                                                    <div class="tg-description">
                                                        <p>
                                                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenden
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                        <figure class="tg-alignleft">
                                                            <img src="public/Images/placeholdervtwo.jpg" alt="image description">
                                                            <iframe src="https://www.youtube.com/embed/aLwpuDpZm1k?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                        </figure>
                                                        <ul class="tg-liststyle">
                                                            <li><span>Sed do eiusmod tempor incididunt ut labore et dolore</span></li>
                                                            <li><span>Magna aliqua enim ad minim veniam</span></li>
                                                            <li><span>Quis nostrud exercitation ullamco laboris nisi ut</span></li>
                                                            <li><span>Aliquip ex ea commodo consequat aute dolor reprehenderit</span></li>
                                                            <li><span>Voluptate velit esse cillum dolore eu fugiat nulla pariatur</span></li>
                                                            <li><span>Magna aliqua enim ad minim veniam</span></li>
                                                            <li><span>Quis nostrud exercitation ullamco laboris nisi ut</span></li>
                                                        </ul>
                                                        <p>
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam remmata aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enimsam
                                                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quistatoa.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tg-tab-pane tab-pane" id="review">
                                                    <div class="tg-description">
                                                        <p>
                                                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenden
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                        <figure class="tg-alignleft">
                                                            <img src="public/Images/placeholdervtwo.jpg" alt="image description">
                                                            <iframe src="https://www.youtube.com/embed/aLwpuDpZm1k?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
                                                        </figure>
                                                        <ul class="tg-liststyle">
                                                            <li><span>Sed do eiusmod tempor incididunt ut labore et dolore</span></li>
                                                            <li><span>Magna aliqua enim ad minim veniam</span></li>
                                                            <li><span>Quis nostrud exercitation ullamco laboris nisi ut</span></li>
                                                            <li><span>Aliquip ex ea commodo consequat aute dolor reprehenderit</span></li>
                                                            <li><span>Voluptate velit esse cillum dolore eu fugiat nulla pariatur</span></li>
                                                            <li><span>Magna aliqua enim ad minim veniam</span></li>
                                                            <li><span>Quis nostrud exercitation ullamco laboris nisi ut</span></li>
                                                        </ul>
                                                        <p>
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam remmata aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enimsam
                                                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quistatoa.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tg-aboutauthor">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-sectionhead">
                                                <h2>Giới thiệu tác giả</h2>
                                            </div>
                                            <div class="tg-authorbox">
                                                <figure class="tg-authorimg">
                                                    <img src="public/Images/author/" alt="image description">
                                                </figure>
                                                <div class="tg-authorinfo">
                                                    <div class="tg-authorhead">
                                                        <div class="tg-leftarea">
                                                            <div class="tg-authorname">
                                                                <h2>@Model.MaTgNavigation.TenTg</h2>
                                                                <span>Tác giả từ: 27 - 6 - 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="tg-rightarea">
                                                            <ul class="tg-socialicons">
                                                                <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                                                <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                                                <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p>Laborum sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis etation.</p>
                                                    </div>
                                                    <a class="tg-btn tg-active" href="javascript:void(0);">Xem thêm sách</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tg-relatedproducts">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                            <div class="tg-sectionhead">
                                                <h2><span>Sách liên quan</span>Có thể bạn sẽ thích</h2>
                                                <a class="tg-btn" href="javascript:void(0);">Xem thêm</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div id="tg-relatedproductslider" class="tg-relatedproductslider tg-relatedbooks owl-carousel">
                                                @foreach (var a in ViewBag.masach) {
                                                <div class="item">
                                                    <div class="tg-postbook">
                                                        <figure class="tg-featureimg">
                                                            <div class="tg-bookimg">
                                                                <div class="tg-frontcover"><img src="../images/books/" alt="image description"></div>
                                                                <div class="tg-backcover"><img src="../images/books/" alt="image description"></div>
                                                            </div>
                                                            <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                                <i class="icon-heart"></i>
                                                                <span>Yêu thích</span>
                                                            </a>
                                                        </figure>
                                                        <div class="tg-postbookcontent">
                                                            <ul class="tg-bookscategories">
                                                                <li><a href="javascript:void(0);">@a.MaDmNavigation.TenDm</a></li>
                                                            </ul>
                                                            <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                            <div class="tg-booktitle">
                                                                <h3><a asp-controller="Home" asp-action="ChiTietSanPham" asp-route-sac="@a.MaSach">@a.TenSach</a></h3>
                                                            </div>
                                                            <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">@a.MaTgNavigation.TenTg</a></span>
                                                            <span class="tg-stars"><span></span></span>
                                                            <span class="tg-bookprice">
                                                                <ins>@a.GiaBan VNĐ</ins>
                                                            </span>
                                                            <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                                <i class="fa fa-shopping-basket"></i>
                                                                <em>Thêm vào giỏ</em>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                }
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <div class="tg-widget tg-widgetsearch">
                                <form class="tg-formtheme tg-formsearch">
                                    <div class="form-group">
                                        <button type="submit"><i class="icon-magnifier"></i></button>
                                        <input type="search" name="search" class="form-group" placeholder="Search Bởi title, author, key...">
                                    </div>
                                </form>
                            </div>
                            <div class="tg-widget tg-catagories">
                                <div class="tg-widgettitle">
                                    <h3>Danh Mục Sách</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        @foreach (var dm in ViewBag.madm)
                                        {
                                        <li><a asp-controller="Home" asp-action="HienThiTheoDanhMuc" asp-route-madm="@dm.MaDm"><span>@dm.TenDm</span>@*<em>28245</em>*@</a></li>
                                        }
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-widget tg-widgettrending">
                                <div class="tg-widgettitle">
                                    <h3>Sách thịnh hành</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <article class="tg-post">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/products/img-04.jpg" alt="image description"></a></figure>
                                                <div class="tg-postcontent">
                                                    <div class="tg-posttitle">
                                                        <h3><a href="javascript:void(0);">Where The Wild Things Are</a></h3>
                                                    </div>
                                                    <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                                                </div>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="tg-post">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/products/img-05.jpg" alt="image description"></a></figure>
                                                <div class="tg-postcontent">
                                                    <div class="tg-posttitle">
                                                        <h3><a href="javascript:void(0);">Where The Wild Things Are</a></h3>
                                                    </div>
                                                    <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                                                </div>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="tg-post">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/products/img-06.jpg" alt="image description"></a></figure>
                                                <div class="tg-postcontent">
                                                    <div class="tg-posttitle">
                                                        <h3><a href="javascript:void(0);">Where The Wild Things Are</a></h3>
                                                    </div>
                                                    <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                                                </div>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="tg-post">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/products/img-07.jpg" alt="image description"></a></figure>
                                                <div class="tg-postcontent">
                                                    <div class="tg-posttitle">
                                                        <h3><a href="javascript:void(0);">Where The Wild Things Are</a></h3>
                                                    </div>
                                                    <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-widget tg-widgetinstagram">
                                <div class="tg-widgettitle">
                                    <h3>Instagram</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-01.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-02.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-03.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-04.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-05.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-06.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-07.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-08.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/Images/instagram/img-09.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-widget tg-widgetblogers">
                                <div class="tg-widgettitle">
                                    <h3>Top Bloogers</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/author/imag-03.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/author/imag-04.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/author/imag-05.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/Images/author/imag-06.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--************************************
			News Grid End
	*************************************-->
</main>

<?php
get_footer();
show_array($book);
?>