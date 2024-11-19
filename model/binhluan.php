<?php

function tao_binh_luan($user_id, $product_id, $content)
{
    $sql = "INSERT INTO comments(id_user, id_product, content_comments) VALUES($user_id, $product_id, '$content')";
    pdo_execute($sql);
}
