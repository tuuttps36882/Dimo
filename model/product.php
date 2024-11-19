<?php

include_once "model/pdo.php";

function selectProducts($limit, $offset)
{
    $offsetCalc = ($offset - 1) * $limit;
    $query = "SELECT * FROM product limit $limit offset $offsetCalc;";
    return pdo_query($query);
}

function totalPages()
{
    $query = "SELECT count(*) as sum_pages FROM product;";
    return pdo_query_one($query);
}
function get_product_new_home($page=1,$limit = 4)
{
    $currentPage = ($page - 1) * $limit;
    $result['product'] = pdo_query("SELECT * FROM product ORDER BY dayAdd_product, rand() DESC LIMIT $currentPage,$limit");
    $result['total'] = pdo_query_one("SELECT count(*) as totalitem FROM product")['totalitem'];
    return $result;
}
function get_product_new_home_new()
{
    $result['product'] = pdo_query("SELECT * FROM product WHERE especially_product =1 ORDER BY view_product ASC LIMIT 4");
    $result['total'] = pdo_query_one("SELECT count(*) as totalitem FROM product")['totalitem'];
    return $result;
}
function get_all_cate()
{
    return pdo_query("SELECT * FROM category ");
}
function get_product_collection($id_category = "", $page = 1, $limit = 4)
{
    if (empty($id_category)) {
        return get_product_new_home($page, $limit);
    }
    $curentPage = ($page - 1) * $limit;
    $result['product'] = pdo_query("SELECT * FROM product WHERE id_category = '$id_category' ORDER BY dayAdd_product DESC LIMIT $curentPage,$limit");
    $result['total'] = pdo_query_one("SELECT count(*) as totalitem FROM product WHERE id_category = '$id_category' ")['totalitem'];
    return $result;
}
function get_detail_product($id_product, $limit = 4)
{
    $result = pdo_query_one("SELECT product.*, category.name_category FROM product
        INNER JOIN category 
        ON category.id_category = product.id_category
     WHERE id_product = '$id_product' ");
    return $result;
}
function get_all_cmt($id_product)
{
    $query = "SELECT * FROM comments inner join user on user.id_user = comments.id_user WHERE comments.id_product = '$id_product'";
    $result = pdo_query($query);
    return $result;
}
