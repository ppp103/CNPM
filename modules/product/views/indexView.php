<?php
// $books = get_list_products();
// $categories = get_list_categories();
// show_array($books);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_string = $_POST['search'];
    // Chuyển hướng đến một URL cụ thể sau khi xử lý dữ liệu
    header("Location: http://localhost/CNPM_FINAL/CNPM/?mod=product&search=$search_string");
    exit(); // Đảm bảo không có mã PHP tiếp theo được thực hiện sau khi chuyển hướng
}
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
                                    <nav class="pagination__nav" style="text-align: center;" aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <?php
                                            if ($total_page <= 1) echo "";
                                            else {
                                                for ($i = 1; $i <= $total_page; $i++) {
                                                    $isActive = ($i == $page) ? "active" : "";
                                                    echo "<li class='page-item $isActive'><a class='page-link' href='?mod=product&page=$i&search=$search'>$i</a></li>";
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                                <?php
                                if ($total_books == 0) {
                                    echo "<div class=\"not-found-text\">Không tìm thấy kết quả!</div>";
                                } else {

                                ?>
                                    <div class="tg-productgrid">
                                        <div id="displayBooks">
                                            <?php
                                            foreach ($books as $book) {
                                            ?>
                                                <form class="book__form" action="?mod=cart" method="post">
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
                    <?php
                                }
                    ?>
                    </div>

                </div>
            </div>
            <?php
            // get_sidebar();
            ?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                <aside id="tg-sidebar" class="tg-sidebar">
                    <div class="tg-widget tg-widgetsearch">
                        <form method="post" class="tg-formtheme tg-formsearch">
                            <div class="form-group">
                                <button type="submit"><i class="icon-magnifier"></i></button>
                                <input id="search" type="search" name="search" class="form-group" placeholder="Tìm kiếm theo tên sách">
                            </div>
                        </form>
                    </div>
                    <div class="tg-widget tg-catagories">
                        <div class="tg-widgettitle">
                            <h3>Danh mục sách</h3>
                        </div>
                        <div class="tg-widgetcontent">
                            <ul>
                                <li><a href="?mod=product&cate_id=0" style="cursor:pointer">Tất cả</a></li>

                                <?php
                                foreach ($categories as $category) {
                                ?>
                                    <li><a href="?mod=product&cate_id=<?php echo $category['id'] ?>&page=<?php echo $page ?>&search=<?php echo $search ?>" style="cursor:pointer"><?php echo $category['tenTheLoai'] ?></a></li>
                                <?php
                                }
                                ?>
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
// show_array($books);
// echo $page;

?>