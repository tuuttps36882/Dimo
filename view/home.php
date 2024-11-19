<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Banner -->

<div class="banner">
    <div class="img">
        <img id="img" onclick="changeImage()" src="img/banner/1.png" alt="" width="100%">
    </div>
</div>
<div class="section-template">
    <div class="one-section">
        <div class="grid grid--1-col grid--2-col-tablet">
            <div class="image-with-text">
                <h2 class="image-with-text-heading">introduce</h2>
            </div>
            <div class="image-with-text__text rte">
                <p>Welcome to DIMO, your go-to fashion destination. <br>
                    Discover a curated selection of trendy and timeless pieces.<br>
                    From urban chic to sophisticated elegance, find your perfect style here.<br>
                    Our commitment to quality ensures durability and comfort in every garment. Let our
                    knowledgeable<br>
                    staff assist you in creating your signature look. Experience the DIMO difference today and
                    elevate
                    your wardrobe effortlessly.</p>
            </div>
            <div class="image-with-text-icon">
                <div class="image-with-text-icon-all">
                    <div class="image-with-text-icon-all-one list-img">
                        <div class="image-with-text-icon-all-one-text1">
                            <img src="img/text1.png" alt="">
                            <p>comfortable</p>
                        </div>
                        <div class="image-with-text-icon-all-one-text2">
                            <img src="img/text2.png" alt="">
                            <p>eco-friendly</p>
                        </div>
                        <div class="image-with-text-icon-all-one-text3">
                            <img src="img/text3.png" alt="">
                            <p>trending</p>
                        </div>
                        <div class="image-with-text-icon-all-one-text4">
                            <img src="img/text4.png" alt="">
                            <p>unique</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="anh anhboxbody">
            <div class="anh1 anhbox">
                <img src="img/2.png" alt="" width="250">
            </div>
            <div class="anh2 anhbox">
                <img src="img/1.png" alt="" width="250">
            </div>
        </div>
    </div>
</div>

<div class="body-product">
    <div class="product">
        <div class="wrapper-heading-home animation-tran active">
            <div class="container-fluid">
                <div class="site-animation">
                    <h2 class="product_title">
                        <strong>Product</strong>
                    </h2>
                </div>
                <div class="container-fluid-new">
                    <h4 class="new-text">NEW</h4>
                </div>
            </div>
        </div>

        <section class="product spad" style="margin-top: 24px;">
            <div class="container">
                <div class="row product__filter" id="listnew">
                    <?php foreach ($data1['product'] as $item) {
                        extract($item);
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mix new-arrivals">
                            <form action="index.php?act=addcart" method="post">
                                <input type="hidden" name="id_product" value="<?= $item['id_product'] ?>">
                                <input type="hidden" name="image_product" value="<?= $item['image_product'] ?>">
                                <input type="hidden" name="name_product" value="<?= $item['name_product'] ?>">
                                <input type="hidden" name="price_product" value="<?= $item['price_product'] ?>">
                                <div class="product__item">
                                    <a href="?act=detail&id_product=<?= $id_product ?>">
                                        <div class="product__item__pic set-bg" data-setbg="img/pro/<?= isset($image_product) ? $image_product : "Long-Sleeve.jpg" ?>" style="height: 380px">
                                            <!-- <span class="label">New</span> -->
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <h6><?= $item['name_product'] ?></h6>
                                        <input type="submit" value="+ Add to cart" class="add-cart btn btn-primary" name="addcart">
                                        <div>
                                            <span>Color: <?= $item['color_product'] ?></span>
                                        </div>
                                        <h5><?= $item['price_product'] ?>$</h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>

                </div>
            </div>

    </div>
    </section>
</div>
</div>

<div class="home-slider-two">
    <div class="slider-two">
        <img src="img/banner2.png" alt="" width="100%">
    </div>
</div>

<div class="section-template-body-product"></div>
<div class="body-product">
    <div class="product">
        <div class="wrapper-heading-home animation-tran active">
            <div class="container-fluid">
                <div class="site-animation">
                    <h2 class="product_title">
                        <strong>Product </strong>
                    </h2>
                </div>
                <div class="container-fluid-new">
                    <h4 class="new-text">VIEW</h4>
                </div>
            </div>
        </div>

        <section class="product spad" style="margin-top: 24px;">
            <div class="container">
                <div class="row product__filter" id="listnew">
                    <?php foreach ($data['product'] as $item) {
                        extract($item);
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mix new-arrivals">
                            <form action="index.php?act=addcart" method="post">
                                <input type="hidden" name="id_product" value="<?= $item['id_product'] ?>">
                                <input type="hidden" name="image_product" value="<?= $item['image_product'] ?>">
                                <input type="hidden" name="name_product" value="<?= $item['name_product'] ?>">
                                <input type="hidden" name="price_product" value="<?= $item['price_product'] ?>">
                                <div class="product__item">
                                    <a href="?act=detail&id_product=<?= $id_product ?>">
                                        <div class="product__item__pic set-bg" data-setbg="img/pro/<?= isset($image_product) ? $image_product : "Long-Sleeve.jpg" ?>" style="height: 380px">
                                            <!-- <span class="label">New</span> -->
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <h6><?= $item['name_product'] ?></h6>
                                        <input type="submit" value="+ Add to cart" class="add-cart btn btn-primary" name="addcart">
                                        <div>
                                            <span>Color: <?= $item['color_product'] ?></span>
                                        </div>
                                        <h5><?= $item['price_product'] ?>$</h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>

                </div>
            </div>

    </div>
    </section>
    <script src="main.js"></script>
</div>
</div>