<?php
include_once "model/product.php";
extract($_REQUEST);
if (isset($mod) && $mod) {
    switch ($mod) {
        case "paginate":
            $countPages = ceil(totalPages()["sum_pages"] / 8);
            if (isset($_GET["p"]) && $_GET["p"]) {
                $value = selectProducts(8, $_GET["p"]);
            }
            include_once "view/header.php";
            include_once "view/home.php";
            include_once "view/footer.php";
            break;
    }
}
