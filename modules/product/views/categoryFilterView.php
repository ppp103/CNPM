<?php
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
                                            <form action="?mod=cart" method="post">
                                                <input id="MaSach" name="id" data-id="<?php echo $book['id'] ?>" type="hidden" value="<?php echo $book['id'] ?>" />
                                                <input type="hidden" name="anh" value="<?php echo $book['anh'] ?>" />
                                                <input type="hidden" name="tenSach" value="<?php echo $book['tenSach'] ?>" />
                                                <input type="hidden" name="giaBan" value="<?php echo $book['giaBan'] ?>" />
                                                <input type="hidden" name="soluong" value="1">

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
                                                                <h3><a href="<?php echo $book['url'] ?>"><?php echo $book['tenSach'] ?></a></h3>
                                                            </div>
                                                            <span class="tg-bookwriter">Bởi: <a href="javascript:void(0);"><?php echo $book['tenTacGia'] ?></a></span>
                                                            <span class="tg-stars"><span></span></span>
                                                            <span class="tg-bookprice">
                                                                <ins><?php echo number_format($book['giaBan'], 0, '.', ',') ?> VNĐ</ins>
                                                            </span>

                                                            <input class="tg-btn tg-btnstyletwo add-to-cart" data-maSach="<?php echo $book['id'] ?>" name="addcart" type="submit" value="Thêm vào giỏ" />

                                                        </div>
                                            </form>
                                    </div>
                                </div>
                            <?php
                                        }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            get_sidebar();
            ?>
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
show_array($trending_books);

?>