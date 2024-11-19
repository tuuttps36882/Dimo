<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/detail.css" type="text/css">

</head>
<style>
    body{
        overflow-x: hidden;
    }
</style>
<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    </header>
    <!-- Header Section End -->

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container" style="margin-left: 60px; margin-right: 60px;">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb d-flex justify-content-left">
                            <a href="./">Home</a>
                            <a href="./collection">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 d-none">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/pro/<?= $product_info['image_product'] ?>">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/upload/<?= $product_info['image_product'] ?>">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/upload/<?= $product_info['image_product'] ?>">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/upload/<?= $product_info['image_product'] ?>">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/pro/<?= $product_info['image_product'] ?>" alt="" width="1000" style="height: 900px;">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/pro/<?= $product_info['image_product'] ?>" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/pro/<?= $product_info['image_product'] ?>" alt="">
                                </div>
                            </div>
                            <!-- <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="img/shop-details/product-big-4.png" alt="">
                                    <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- okok -->
                    <div class="col-lg-7">
                        <div class="product__details__text text-left">
                            <h4>
                                <?= $product_info['name_product'] ?>
                            </h4>
                            <div class="rating">
                                <!-- <span>
                                    <?= $product_info['view_product'] ?>
                                </span> -->
                            </div>
                            <div class="product__details__option__color">
                                <span>Color:
                                    <?= $product_info['color_product'] ?>
                                </span>

                            </div>
                            <h4 style="padding-top: 15px">
                                <?= $product_info['price_product'] ?>$
                            </h4>

                            <div class="product__details__cart__option">
                                <form action="index.php?act=addcart" method="post">
                                    <div class="quantity">
                                        <span>Quantity:</span>
                                        <div class="pro-qty">
                                            <input class="form-control form-control-sm" type="text" name="amount_product" value="1">
                                        </div>
                                        <input type="hidden" name="id_product" value="<?= $product_info['id_product'] ?>">
                                        <input type="hidden" name="image_product" value="<?= $product_info['image_product'] ?>">
                                        <input type="hidden" name="name_product" value="<?= $product_info['name_product'] ?>">
                                        <input type="hidden" name="price_product" value="<?= $product_info['price_product'] ?>">
                                        <input class="btn btn-dark btn-block btn-lg mt-3" type="submit" value="ADD TO CART" name="addcart">
                                    </div>
                                </form>

                                <div class="product__details__last__option">
                                    <h4><span>DELIVERED TO YOUR DOOR.</span></h4>
                                    <img src="img/shop-details/details-payment.png" alt="">
                                    <ul>
                                        <li>Free 30-Day Return Policy!</li>
                                        <li>Free Ship</li>
                                    </ul>
                                    <div class="BOX-DESCRIPTION-detail">
                                        <div class="DESCRIPTION-detail">
                                            <h5>DESCRIPTION</h5>
                                        </div>
                                        <div class="DESCRIPTION-text">
                                            <P style="margin: 0 105px 0 0;">
                                                <?= $product_info['describe_product'] ?>
                                            </P>
                                        </div>
                                    </div>
                                    <div class="BOX-CONTENT-CARE-detail">
                                        <div class="CONTENT-CARE-detail">
                                            <h5>Content + Care</h5>
                                        </div>
                                        <div class="CONTENT-CARE-text">
                                            <?= nl2br($product_info['content_product']) ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- Shop Details Section End -->
    <div class="comment-box-detail">
        <div class="comment-detail">
            <div class="comment-detail-text">
                <h3>Comment</h3>
            </div>
        </div>
        <form class="" method="post">
            <div class="form-group col-lg-5">
                <label for="exampleFormControlTextarea1">Write your comment</label>
                <textarea class="form-control" name="cmt" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input type="text" name="id_product" value="<?= $product_info['id_product'] ?>" hidden>
            <input class="btn btn-primary" name="submit_cmt" type="submit" value="Send" style="width: fit-content;height:fit-content">
        </form>
        <div class="flex-box-comment" id="box_cmt">
            <div class="flex-box-three">
                <?php
                foreach ($all_cmt as $item) {
                    extract($item);
                ?>
                    <div class="text-comment">
                        <a>
                            <?= $content_comments ?>
                        </a>

                    </div>
                <?php
                } ?>

                <!-- <div class="text-comment">
                    <a>TEXT COMMENT</a>

                </div>
                <div class="text-comment">
                    <a>TEXT COMMENT</a>

                </div>
                <div class="text-comment">
                    <a>TEXT COMMENT</a>

                </div> -->
            </div>
        </div>
    </div>

    <!-- Related Section Begin -->

    </section>

    <div class="wrapper-collection-1" style="margin-top: 200px;">
        <section class="product spad" style="margin-top: 24px;">
            <div class="container">
                <div class="row product__filter" id="listnew">

                    <?php
                    $value = selectProducts(4, 1);
                    foreach ($value as $value) {
                        extract($value);
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/pro/<?= isset($image_product) ? $image_product : "Long-Sleeve.jpg" ?>" style="height: 380px" style="border: 1px solid rgba(0,0,0,0.1);">
                                    <!-- <span class="label">New</span> -->
                                </div>
                                <div class="product__item__text">
                                    <h6>
                                        <?= $name_product ?>
                                    </h6>
                                    <a href="?act=detail&id_product=<?= $value['id_product'] ?>" class="add-cart">See details</a>
                                    <div>
                                        <span>Color:<?= $color_product ?></span>
                                    </div>
                                    <h5><?= $price_product ?> $</h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

    </div>
    </section>
    </div>
    </div>
    <!-- Related Section End -->


    <!-- Footer Section End -->

    <!-- Search Begin -->
    <!-- <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div> -->
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>