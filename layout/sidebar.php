<?php
$categories = get_list_categories();

?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
    <aside id="tg-sidebar" class="tg-sidebar">
        <div class="tg-widget tg-widgetsearch">
            <form class="tg-formtheme tg-formsearch">
                <div class="form-group">
                    <button type="submit"><i class="icon-magnifier"></i></button>
                    <input type="search" name="search" class="form-group" placeholder="Tìm kiếm theo tên sách">
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
                        <li><a href="?mod=product&cate_id=<?php echo $category['id'] ?>" style="cursor:pointer"><?php echo $category['tenTheLoai'] ?></a></li>
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