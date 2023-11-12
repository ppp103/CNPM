<?php
get_header();
?>
<!--************************************
				Home Slider Start
		*************************************-->
<div id="tg-homeslider" class="tg-homeslider tg-haslayout owl-carousel">
    <div class="item" data-vide-bg="poster: public/images/slider/img-01.jpg" data-vide-options="position: 0% 50%">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                    <div class="tg-slidercontent">
                        <figure class="tg-authorimg">
                            <a href="javascript:void(0);"><img src="public/images/author/imag-01.jpg" alt="image description" /></a>
                        </figure>
                        <h1>Jude Morphew</h1>
                        <h2>Latest 2017 Release</h2>
                        <div class="tg-description">
                            <p>
                                Consectetur adipisicing elit sed do eiusmod tempor
                                incididunt ut labore tolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamcoiars nisi ut
                                aliquip commodo.
                            </p>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn" href="javascript:void(0);">Mua ngay</a>
                            <a class="tg-btn" href="javascript:void(0);">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item" data-vide-bg="poster: public/images/slider/img-01.jpg" data-vide-options="position: 0% 50%">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                    <div class="tg-slidercontent">
                        <figure class="tg-authorimg">
                            <a href="javascript:void(0);"><img src="public/images/author/imag-01.jpg" alt="image description" /></a>
                        </figure>
                        <h1>Jude Morphew</h1>
                        <h2>Latest 2017 Release</h2>
                        <div class="tg-description">
                            <p>
                                Consectetur adipisicing elit sed do eiusmod tempor
                                incididunt ut labore tolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamcoiars nisi ut
                                aliquip commodo.
                            </p>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn" href="javascript:void(0);">Mua ngay</a>
                            <a class="tg-btn" href="javascript:void(0);">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
				Home Slider End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
					All Status Start
			*************************************-->
    <section class="tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-allstatus">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-parallax tg-bgbookwehave" data-z-index="2" data-appear-top-offset="600" data-parallax="scroll" data-image-src="public/images/parallax/bgparallax-01.jpg">
                            <div class="tg-status">
                                <div class="tg-statuscontent">
                                    <span class="tg-statusicon"><i class="icon-book"></i></span>
                                    <h2>Books we have<span>24,179,213</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-parallax tg-bgtotalmembers" data-z-index="2" data-appear-bottom-offset="600" data-parallax="scroll" data-image-src="public/images/parallax/bgparallax-02.jpg">
                            <div class="tg-status">
                                <div class="tg-statuscontent">
                                    <span class="tg-statusicon"><i class="icon-user"></i></span>
                                    <h2>Total members<span>15,179,213</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-parallax tg-bghappyusers" data-z-index="2" data-appear-top-offset="600" data-parallax="scroll" data-image-src="public/images/parallax/bgparallax-03.jpg">
                            <div class="tg-status">
                                <div class="tg-statuscontent">
                                    <span class="tg-statusicon"><i class="icon-heart"></i></span>
                                    <h2>Happy users<span>1,267,539</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					All Status End
			*************************************-->
    <!--************************************
					Best Selling Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>People’s Choice</span>Bestselling Books</h2>
                        <a class="tg-btn" href="javascript:void(0);">View All</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
                    <?php
                    foreach ($books as $book) {
                    ?>
                    <form method="post" action="?mod=cart">
                      <input id="MaSach" name="id" data-id="<?php echo $book['id'] ?>" type="hidden" value="<?php echo $book['id'] ?>"/>
                                                            <input type="hidden" name="anh" value="<?php echo $book['anh'] ?>"/>
                                                            <input type="hidden" name="tenSach" value="<?php echo $book['tenSach'] ?>"/>
                                                            <input type="hidden" name="giaBan" value="<?php echo $book['giaBan']?>" />
                                                            <input type="hidden" name="soluong" value="1">

                    <div class="item">
                            <div class="tg-postbook tg-notag">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img src="public/images/books/<?php echo $book['anh'] ?>" alt="image description">
                                        </div>
                                        <div class="tg-backcover">
                                            <img src="public/images/books/<?php echo $book['anh'] ?>" alt="image description">
                                        </div>
                                    </div>
                                    <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                        <i class="icon-heart"></i>
                                        <span>Ưa thích</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li><a href="javascript:void(0);">Adventure</a></li>
                                        <li><a href="javascript:void(0);">Fun</a></li>
                                    </ul>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"><?php echo $book['tenSach'] ?></a>
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter">By:
                                        <a href="javascript:void(0);"><?php echo $book['tenTacGia'] ?></a></span>
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins><?php echo $book['giaBan'] ?></ins>
                                        <del><?php echo $book['giaBan'] ?></del>
                                    </span>
                                    <input class="tg-btn tg-btnstyletwo add-to-cart" data-maSach="@sp.MaSach" name="addcart"  type="submit" value="Đặt Hàng"/>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php 
                    }
                    ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Best Selling End
			*************************************-->
    <!--************************************
					Featured Item Start
			*************************************-->
            <form method="post" action="?mod=cart">
                      <input id="MaSach" name="id" data-id="<?php echo $book['id'] ?>" type="hidden" value="<?php echo $firstbook['id'] ?>"/>
                                                            <input type="hidden" name="anh" value="<?php echo $firstbook['anh'] ?>"/>
                                                            <input type="hidden" name="tenSach" value="<?php echo $firstbook['tenSach'] ?>"/>
                                                            <input type="hidden" name="giaBan" value="<?php echo $firstbook['giaBan']?>" />
                                                            <input type="hidden" name="soluong" value="1">

   <section class="tg-bglight tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-featureditm">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">
                        <figure>
                            <img style="width:400px; height:500px;" src="public/images/books/<?php echo $firstbook['anh'] ?>" alt="image description" />
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="tg-featureditmcontent">
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-booktitle">
                                <h3>
                                    <a href="javascript:void(0);"><?php echo $firstbook['tenSach'] ?></a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);"><?php echo $firstbook['tenTacGia'] ?></a></span>
                            <span class="tg-stars"><span></span></span>
                            <div class="tg-priceandbtn">
                                <span class="tg-bookprice">
                                    <ins><?php echo $firstbook['giaBan'] ?></ins>
                                    <del><?php echo $firstbook['giaBan'] ?></del>
                                </span>
                                <input class="tg-btn tg-btnstyletwo add-to-cart" data-maSach="@sp.MaSach" name="addcart"  type="submit" value="Đặt Hàng"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
  


    <!--************************************
					Featured Item End
			*************************************-->
    <!--************************************
					New Release Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-newrelease">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="tg-sectionhead">
                            <h2><span>Taste The New Spice</span>New Release Books</h2>
                        </div>
                        <div class="tg-description">
                            <p>
                                Consectetur adipisicing elit sed do eiusmod tempor
                                incididunt labore toloregna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamcoiars nisiuip
                                commodo consequat aute irure dolor in aprehenderit aveli
                                esseati cillum dolor fugiat nulla pariatur cepteur sint
                                occaecat cupidatat.
                            </p>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn tg-active" href="javascript:void(0);">View All</a>
                            <a class="tg-btn" href="javascript:void(0);">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="tg-newreleasebooks">
                                <?php 
                                      foreach ($selectedBooks as $selectedBooks) {
                                ?>
                                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 hidden-md">
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover">
                                                    <img src="public/images/books/<?php echo $selectedBooks['anh'] ?>" alt="image description" />
                                                </div>
                                                <div class="tg-backcover">
                                                    <img src="public/images/books/<?php echo $selectedBooks['anh'] ?><" alt="image description" />
                                                </div>
                                            </div>
                                            <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                <i class="icon-heart"></i>
                                                <span>Ưa thích</span>
                                            </a>
                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <ul class="tg-bookscategories">
                                                <li>
                                                    <a href="javascript:void(0);"><?php echo $selectedBooks['tenTheLoai'] ?></a>
                                                </li>
                                                <li><a href="javascript:void(0);"><?php echo $selectedBooks['tenTheLoai'] ?></a></li>
                                            </ul>
                                            <div class="tg-booktitle">
                                                <h3>
                                                    <a href="javascript:void(0);"><?php echo $selectedBooks['tenSach'] ?></a>
                                                </h3>
                                            </div>
                                            <span class="tg-bookwriter">By:
                                                <a href="javascript:void(0);"><?php echo $selectedBooks['tenTacGia'] ?></a></span>
                                            <span class="tg-stars"><span></span></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					New Release End
			*************************************-->
    <!--************************************
					Collection Count Start
			*************************************-->
    <section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="public/images/parallax/bgparallax-04.jpg">
        <div class="tg-sectionspace tg-collectioncount tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-collectioncounters" class="tg-collectioncounters">
                        <div class="tg-collectioncounter tg-drama">
                            <div class="tg-collectioncountericon">
                                <i class="icon-bubble"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Drama</h2>
                                <h3 data-from="0" data-to="6179213" data-speed="8000" data-refresh-interval="50">
                                    6,179,213
                                </h3>
                            </div>
                        </div>
                        <div class="tg-collectioncounter tg-horror">
                            <div class="tg-collectioncountericon">
                                <i class="icon-heart-pulse"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Horror</h2>
                                <h3 data-from="0" data-to="3121242" data-speed="8000" data-refresh-interval="50">
                                    3,121,242
                                </h3>
                            </div>
                        </div>
                        <div class="tg-collectioncounter tg-romance">
                            <div class="tg-collectioncountericon">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Romance</h2>
                                <h3 data-from="0" data-to="2101012" data-speed="8000" data-refresh-interval="50">
                                    2,101,012
                                </h3>
                            </div>
                        </div>
                        <div class="tg-collectioncounter tg-fashion">
                            <div class="tg-collectioncountericon">
                                <i class="icon-star"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Fashion</h2>
                                <h3 data-from="0" data-to="1158245" data-speed="8000" data-refresh-interval="50">
                                    1,158,245
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Collection Count End
			*************************************-->
    <!--************************************
					Picked By Author Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>Some Great Books</span>Picked By Authors</h2>
                        <a class="tg-btn" href="javascript:void(0);">View All</a>
                    </div>
                </div>
                <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
                    <?php 
                        foreach ($books as $book) {
                    ?>
                    
                    <div class="item">
                        <div class="tg-postbook">
                            <figure class="tg-featureimg">
                                <div class="tg-bookimg">
                                    <div class="tg-frontcover">
                                        <img src="public/images/books/<?php echo $book['anh'] ?>" alt="image description" />
                                    </div>
                                </div>
                                <div class="tg-hovercontent">
                                    <div class="tg-description">
                                        <p>
                                          
                                        </p>
                                    </div>
                                    <strong class="tg-bookpage">Book Pages: 206</strong>
                                    <strong class="tg-bookcategory"><?php echo $book['tenTheLoai'] ?></strong>
                                    <strong class="tg-bookprice">Price:<?php echo $book['tenTheLoai'] ?> </strong>
                                    <div class="tg-ratingbox">
                                        <span class="tg-stars"><span></span></span>
                                    </div>
                                </div>
                            </figure>
                            <div class="tg-postbookcontent">
                                <div class="tg-booktitle">
                                    <h3>
                                        <a href="javascript:void(0);"><?php echo $book['tenSach'] ?></a>
                                    </h3>
                                </div>
                                <span class="tg-bookwriter">By:
                                    <a href="javascript:void(0);"><?php echo $book['tenTacGia'] ?></a></span>
                                
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Picked By Author End
			*************************************-->
    <!--************************************
					Testimonials Start
			*************************************-->
    <section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="public/images/parallax/bgparallax-05.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                        <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
                            <div class="item tg-testimonial">
                                <figure>
                                    <img src="public/images/author/imag-02.jpg" alt="image description" />
                                </figure>
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt ut labore tolore magna aliqua enim ad minim
                                        veniam, quis nostrud exercitation ullamcoiars nisi ut
                                        aliquip commodo.</q>
                                </blockquote>
                                <div class="tg-testimonialauthor">
                                    <h3>Holli Fenstermacher</h3>
                                    <span>Manager @ CIFP</span>
                                </div>
                            </div>
                            <div class="item tg-testimonial">
                                <figure>
                                    <img src="public/images/author/imag-02.jpg" alt="image description" />
                                </figure>
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt ut labore tolore magna aliqua enim ad minim
                                        veniam, quis nostrud exercitation ullamcoiars nisi ut
                                        aliquip commodo.</q>
                                </blockquote>
                                <div class="tg-testimonialauthor">
                                    <h3>Holli Fenstermacher</h3>
                                    <span>Manager @ CIFP</span>
                                </div>
                            </div>
                            <div class="item tg-testimonial">
                                <figure>
                                    <img src="public/images/author/imag-02.jpg" alt="image description" />
                                </figure>
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt ut labore tolore magna aliqua enim ad minim
                                        veniam, quis nostrud exercitation ullamcoiars nisi ut
                                        aliquip commodo.</q>
                                </blockquote>
                                <div class="tg-testimonialauthor">
                                    <h3>Holli Fenstermacher</h3>
                                    <span>Manager @ CIFP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Testimonials End
			*************************************-->
    <!--************************************
					Authors Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2>
                            <span>Strong Minds Behind Us</span>Most Popular Authors
                        </h2>
                        <a class="tg-btn" href="javascript:void(0);">View All</a>
                    </div>
                </div>
                <div id="tg-authorsslider" class="tg-authors tg-authorsslider owl-carousel">
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-03.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2><a href="javascript:void(0);">Jude Morphew</a></h2>
                            <span>21,658 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-04.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2><a href="javascript:void(0);">Book Burger</a></h2>
                            <span>20,257 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-05.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2>
                                <a href="javascript:void(0);">Book Ship &amp; Co.</a>
                            </h2>
                            <span>15,686 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-06.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2><a href="javascript:void(0);">Enoch Gallion</a></h2>
                            <span>12,435 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-07.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2><a href="javascript:void(0);">Book House</a></h2>
                            <span>15,953 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-08.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2><a href="javascript:void(0);">Linnie Klimek</a></h2>
                            <span>65,720 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-05.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2>
                                <a href="javascript:void(0);">Book Ship &amp; Co.</a>
                            </h2>
                            <span>15,686 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item tg-author">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/author/imag-06.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-authorcontent">
                            <h2><a href="javascript:void(0);">Enoch Gallion</a></h2>
                            <span>12,435 Published Books</span>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tg-twitter">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="tg-linkedin">
                                    <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Authors End
			*************************************-->
    <!--************************************
					Call to Action Start
			*************************************-->
    <section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="public/images/parallax/bgparallax-06.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-calltoaction">
                            <h2>Open Discount For All</h2>
                            <h3>
                                Consectetur adipisicing elit sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </h3>
                            <a class="tg-btn tg-active" href="javascript:void(0);">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Call to Action End
			*************************************-->
    <!--************************************
					Latest News Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2>
                            <span>Latest News &amp; Articles</span>What's Hot in The
                            News
                        </h2>
                        <a class="tg-btn" href="javascript:void(0);">View All</a>
                    </div>
                </div>
                <div id="tg-postslider" class="tg-postslider tg-blogpost owl-carousel">
                    <article class="item tg-post">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/blog/img-01.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-postcontent">
                            <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                            </ul>
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-posttitle">
                                <h3>
                                    <a href="javascript:void(0);">Where The Wild Things Are</a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                            <ul class="tg-postmetadata">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="item tg-post">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/blog/img-02.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-postcontent">
                            <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                            </ul>
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-posttitle">
                                <h3>
                                    <a href="javascript:void(0);">All She Wants To Do Is Dance</a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                            <ul class="tg-postmetadata">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="item tg-post">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/blog/img-03.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-postcontent">
                            <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                            </ul>
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-posttitle">
                                <h3>
                                    <a href="javascript:void(0);">Why Walk When You Can Climb?</a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                            <ul class="tg-postmetadata">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="item tg-post">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/blog/img-04.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-postcontent">
                            <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                            </ul>
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-posttitle">
                                <h3>
                                    <a href="javascript:void(0);">Dance Like Nobody’s Watching</a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                            <ul class="tg-postmetadata">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="item tg-post">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/blog/img-02.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-postcontent">
                            <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                            </ul>
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-posttitle">
                                <h3>
                                    <a href="javascript:void(0);">All She Wants To Do Is Dance</a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                            <ul class="tg-postmetadata">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="item tg-post">
                        <figure>
                            <a href="javascript:void(0);"><img src="public/images/blog/img-03.jpg" alt="image description" /></a>
                        </figure>
                        <div class="tg-postcontent">
                            <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                            </ul>
                            <div class="tg-themetagbox">
                                <span class="tg-themetag">featured</span>
                            </div>
                            <div class="tg-posttitle">
                                <h3>
                                    <a href="javascript:void(0);">Why Walk When You Can Climb?</a>
                                </h3>
                            </div>
                            <span class="tg-bookwriter">By:
                                <a href="javascript:void(0);">Kathrine Culbertson</a></span>
                            <ul class="tg-postmetadata">
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Comments</i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Views</i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Latest News End
			*************************************-->
</main>
<?php
get_footer();
?>