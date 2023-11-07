<?php
$books = get_list_products();
$categories = get_list_categories();
get_header();
?>

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
                            <div class="tg-products">
                                <div class="tg-sectionhead">
                                    <h2>Danh sách sản phẩm</h2>
                                </div>
                                <div class="tg-productgrid">
                                    <div id="displayBooks">
                                        <?php
                                        foreach ($books as $book) {
                                        ?>
                                            <input id="MaSach" data-id="<?php echo $book['id'] ?>" type="hidden" />
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="public/images/books/<?php echo $book['anh'] ?>" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="public/images/books/img-01.jpg" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Yêu thích</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a><?php echo $book['tenTheLoai'] ?></a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a><?php echo $book['tenSach'] ?></a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);"><?php echo $book['tenTacGia'] ?></a></span>
                                                        <span class="tg-stars"><span></span></span>
                                                        <span class="tg-bookprice">
                                                            <!-- number_format($amount, 2, '.', ',') -->
                                                            <ins><?php echo number_format($book['giaBan'], 0, '.', ',') ?> VNĐ</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo add-to-cart" data-maSach="@sp.MaSach" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Thêm vào giỏ</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        ?>
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
                                        <input type="search" name="search" class="form-group" placeholder="Tìm kiếm theo tên sách, ...">
                                    </div>
                                </form>
                            </div>
                            <div class="tg-widget tg-catagories">
                                <div class="tg-widgettitle">
                                    <h3>Danh mục sách</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <?php
                                        foreach ($categories as $category) {
                                        ?>
                                            <li><a data-id="<?php echo $category['id'] ?>" style="cursor:pointer"><?php echo $category['tenTheLoai'] ?></a></li>

                                        <?php
                                        }
                                        ?>
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
                                                <figure><a href="javascript:void(0);"><img src="public/images/products/img-04.jpg" alt="image description"></a></figure>
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
                                                <figure><a href="javascript:void(0);"><img src="public/images/products/img-05.jpg" alt="image description"></a></figure>
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
                                                <figure><a href="javascript:void(0);"><img src="public/images/products/img-06.jpg" alt="image description"></a></figure>
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
                                                <figure><a href="javascript:void(0);"><img src="public/images/products/img-07.jpg" alt="image description"></a></figure>
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
                                                <img src="public/images/instagram/img-01.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-02.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-03.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-04.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-05.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-06.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-07.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-08.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="public/images/instagram/img-09.jpg" alt="image description">
                                                <figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em>50,134</em></a></figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-widget tg-widgetblogers">
                                <div class="tg-widgettitle">
                                    <h3>Bloggers</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/images/author/imag-03.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/images/author/imag-04.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/images/author/imag-05.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                                                    <span>21,658 Sách xuất bản</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="public/images/author/imag-06.jpg" alt="image description"></a></figure>
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
show_array($books);

?>