<?php
function loadall_user()
{
    $sql = "SELECT * FROM user ORDER BY id_user DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_user($email_user, $password_user, $name_user,$phoneNumber_user,$address_user)
{
    $sql = "INSERT INTO user(email_user,password_user,name_user,phoneNumber_user,address_user) VALUES('$email_user','$password_user','$name_user','$phoneNumber_user','$address_user')";
    pdo_execute($sql);
}

function checkuser($name_user, $password_user)
{
    $sql = "SELECT * FROM user WHERE name_user='" . $name_user . "' AND password_user='" . $password_user . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id_user, $name_user, $email_user, $password_user, $address_user, $phoneNumber_user)
{
    $sql = "UPDATE user SET name_user='" . $name_user . "', email_user='" . $email_user . "', password_user='" . $password_user . "',phoneNumber_user='" . $phoneNumber_user . "',address_user='" . $address_user . "' WHERE id_user=" . $id_user;
    pdo_execute($sql);
}

function loadone_taikhoan($id_user)
{
    $sql = "SELECT * FROM user WHERE id_user=" . $id_user;
    $tk = pdo_query_one($sql);
    return $tk;
}
function change_pass($pass, $token)
{
    $hash_token=  hex2bin($token);
    pdo_execute("UPDATE user SET password_user = '$pass' WHERE reset_token_hash = '$hash_token'");
}
function loadall_bill($kyw = "", $id_user = 0)
{

    $sql = "SELECT * FROM bill WHERE 1";
    if ($id_user > 0) $sql .= " AND id_user=" . $id_user;
    if ($kyw != "") $sql .= " AND id_bill LIKE '%" . $kyw . "%'";
    $sql .= " ORDER BY id_bill ";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_cart_count($id_bill)
{
    $sql = "SELECT * FROM cart WHERE id_bill=" . $id_bill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
