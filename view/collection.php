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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/collection.css" type="text/css">
  
</head>
<style>
    body{
        overflow-x:hidden ;
    }
</style>
<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper" id="colection_page">
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
    <div class="row my-4">
        <div class="container wrapper-heading-home animation-tran active padding-bottom:20px">
            <div class="site-animation">
                <h2 class="product_title">
                    <strong>Products</strong>
                </h2>
            </div>
            <div class="container-fluid-new" style="padding: 0 0 14px 140px;">
                <h4 class="new">view all</h4>
            </div>
            <!-- <div class="container-fluid">
            </div> -->
        </div>
    </div>

    <!-- Breadcrumb Section Begin -->
    <!-- <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop ">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <!-- <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div> -->
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <?php
                                                    foreach ($all_cate as $key => $value) { ?>
                                                        <li><a
                                                                href="<?= '?act=collection&id_category=' . $value['id_category'] ?>">
                                                                <?= $value['name_category'] ?>
                                                            </a></li>
                                                    <?php }
                                                    ;

                                                    ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <?php
                        if (isset($data['product']) && count($data['product']) > 0) {
                            foreach ($data['product'] as $key => $value) { ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div href="?act=detail&id_product=<?= $value['id_product'] ?>"
                                            class="product__item__pic set-bg"
                                            data-setbg="img/pro/<?= $value['image_product'] ?>" style="height: 380px">
                                           
                                        </div>
                                        <div class="product__item__text">
                                            <h6>
                                                <?= $value['name_product'] ?>t
                                            </h6>
                                            <a href="?act=detail&id_product=<?= $value['id_product'] ?>" class="add-cart">See details</a>
                                            <h6>
                                                <?= $value['color_product'] ?>
                                            </h6>
                                            <h5>
                                                <?= $value['price_product'] ?><span>$</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } else {
                            echo '<div class="shop__product__">Không tìm thấy sản phẩm nào</div>';
                        }

                        ?>


                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <!-- pagination -->
                                <?php
                                $cate = isset($_GET['id_category']) ? '&id_category=' . $_GET['id_category'] : "";
    
                                $totalPage = ceil($data['total'] / $limit);
                                $page = $_GET['page'] ?? 1;
                                // previous
                                echo '<a href="' . ($page > 1 ? "?act=collection" . $cate . "&page=" . ($page - 1) . "#listnew" : "#") . '" class="g-nav-btn ' . ($page == 1 ? "disabled" : "") . '">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>';
                                // for number
                                for ($i = 0; $i < $totalPage; $i++) {
                                    $active = $page == ($i + 1) ? "active" : "";

                                    $link = "?act=collection" . $cate . "&page=" . ($i + 1);
                                    echo '<a href="' . $link . '#listnew" class="g-nav-btn ' . $active . '">
                                       ' . ($i + 1) . '
                                    </a>';
                                }
                                // next
                                echo '<a href="' . ($page < $totalPage ? "?act=collection" . $cate . "&page=" . ($page + 1) . "#listnew" : "#") . '" class="g-nav-btn ' . ($page == $totalPage ? "disabled" : "") . '">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>';
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->



    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <br>
    <br>
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