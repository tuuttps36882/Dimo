<?php
// require_once('./phpmailer/phpmailer/src/PHPMailer.php');
// require_once('./phpmailer/phpmailer/src/Exception.php');
// require_once('./phpmailer/phpmailer/src/SMTP.php');
// require_once("./model/pdo.php");

// use PHPMailer\PHPMailer\PHPMailer;

function viewcart($del)
{
    $tong = 0;
    $xoasp_th = $xoasp_th2 = "";
    if ($del == 1) {
        $xoasp_th = $xoasp_th2 = "<th></th>";
    }

    echo '
        <h3 style="color: gray; font-size: 30px; text-align: center;">Your Cart</h3>
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>IMAGE</th>
                <th>PRODUCT</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>TOTAL</th>
                <TH>REMOVE</TH>
                ' . $xoasp_th . '
            </tr>
        <tbody>
    ';

    if (isset($_SESSION['addcart'])) {
        $num = 1;
        foreach ($_SESSION['addcart'] as $addcart) {
            if (isset($addcart['amount_product'], $addcart['price_product'], $addcart['image_product'], $addcart['name_product'], $addcart['id_product'])) {
                $intoMoney_cart = $addcart['amount_product'] * $addcart['price_product'];
                $tong += $intoMoney_cart;
                echo '
                    <tr>
                        <td>' . $num++ . '</td>
                        <td><img src="img/pro/' . $addcart['image_product'] . '" width="100px"></td>
                        <td>' . $addcart['name_product'] . '</td>
                        <td>
                        <a href="?act=minuscart&id=' . $addcart['id_product'] . '" class="btn btn-primary">-</a>
                        <input type="number" value="' . $addcart['amount_product'] . '" min="1" max="100" onchange="update_cart(' . $addcart['id_product'] . ', this.value)">
                           <a class="btn btn-primary" href="?act=pluscart&id=' . $addcart['id_product'] . '">+</a>
                        </td>
                        <td>' . number_format($addcart['price_product']) . ' $</td>
                        <td>' . number_format($intoMoney_cart) . ' $</td>
                        <td><a href="index.php?act=delcart&id=' . $addcart['id_product'] . '">Xóa</a></td>
                        ' . $xoasp_th2 . '
                    </tr>
                ';
            }
        }
    }

    echo '
        <tr>
            <td colspan="5" style="text-align:right">TOTAL</td>
            <td>' . number_format($tong) . ' $</td>
            ' . $xoasp_th2 . '
        </tr>
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        <a href="index.php?act=delcart" class="btn btn-danger">Delete Cart</a> 
        <a href="index.php" class="btn btn-primary">Continue Shopping</a>
        <a href="index.php?act=checkout" class="btn btn-success">Checkout</a>
    </div>
    <br>
    ';
}

function tolal()
{
    $tong = 0;
    foreach ($_SESSION['addcart'] as $addcart) {
        $intoMoney_cart = $addcart['amount_product'] * $addcart['price_product'];
        $tong += $intoMoney_cart;
    }
    return $tong;
}


function insert_bill($id_bill, $id_user, $name_user, $email_user, $phoneNumber_user, $address_user, $pttt_bill, $dayAdd_bill, $tolal_bill)
{
    $sql = "INSERT INTO bill (id_bill, id_user, name_user, email_user, phoneNumber_user, address_user, pttt_bill, dayAdd_bill, tolal_bill)
    VALUES ('$id_bill', '$id_user', '$name_user', '$email_user', '$phoneNumber_user', '$address_user', '$pttt_bill', '$dayAdd_bill' , '$tolal_bill')";
    return pdo_execute($sql);
}

function insert_cart($id_cart, $id_user, $id_product, $img_product, $name_product, $price_product, $amount_product, $id_bill)
{
    $sql = "INSERT INTO cart (id_cart, id_user, id_product, img_product, name_product, price_product, amount_product, id_bill) 
    VALUES ('$id_cart', '$id_user', '$id_product', '$img_product', '$name_product', '$price_product', '$amount_product', '$id_bill')";
    return pdo_execute($sql);
}

function load_one_bill($id_bill)
{
    $sql = "SELECT * FROM bill WHERE id_bill = '$id_bill'";
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadadd_cart($id_bill)
{
    $sql = "SELECT * FROM cart WHERE id_bill = '$id_bill'";
    return pdo_query($sql);
}

function loadadd_cart_count($id_bill)
{
    $sql = "SELECT * FROM cart WHERE id_bill = '$id_bill'";
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadadd_bill($kyw = "", $id_user = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($id_user > 0) $sql .= " AND id_user=" . $id_user;
    if ($kyw != "") $sql .= " AND id_bill LIKE '%" . $kyw . "%'";
    $sql .= " ORDER BY id_bill DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}

function get_bill($id_bill)
{
    $sql = "SELECT * FROM bill WHERE id_bill = '$id_bill'";
    return pdo_query_one($sql);
}

function bill_detail($id_bill)
{
    $tong = 0;
    $i = 0;
    echo '
    <h3 style="color: gray; font-size: 30px; text-align: center;">Bill Detail</h3>
    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>IMAGE</th>
            <th>PRODUCT</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>TOTAL</th>
        </tr>
        <tbody>
    ';
    $num = 1;
    foreach ($_SESSION['addcart'] as $addcart) {
        if (isset($addcart['amount_product'], $addcart['price_product'], $addcart['image_product'], $addcart['name_product'], $addcart['id_product'])) {
            $intoMoney_cart = $addcart['amount_product'] * $addcart['price_product'];
            $tong += $intoMoney_cart;
            echo '
                <tr>
                    <td>' . $num++ . '</td>
                    <td><img src="img/pro/' . $addcart['image_product'] . '" width="100px"></td>
                    <td>' . $addcart['name_product'] . '</td>
                    <td>' . $addcart['amount_product'] . '</td>
                    <td>' . number_format($addcart['price_product']) . ' $</td>
                    <td>' . number_format($intoMoney_cart) . ' $</td>
                </tr>
            ';
        }
    }
    echo '
        <tr>
            <td colspan="4" style="text-align:right">TOTAL</td>
            <td>' . number_format($tong) . ' $</td>
        </tr>
        ';
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "NEW BILL";
            break;
        case '1':
            $tt = "Processing";
            break;
        case '2':
            $tt = "Delivering";
            break;
        case '3':
            $tt = "Completed";
            break;

        default:
            $tt = "NEW BILL";
            break;
    }
    return $tt;
}

function loadadd_thongke()
{
    $sql = "SELECT petrichor_type.id_type as madm,petrichor_type.name_type as tendm,count(petrichor_goods.id_goods) as countsp,min(petrichor_goods.price_goods) as minprice,
    max(petrichor_goods.price_goods) as maxprice, avg(petrichor_goods.price_goods) as avgprice";
    $sql .= " FROM petrichor_goods left join petrichor_type on petrichor_type.id_type = petrichor_goods.id_type";
    $sql .= " GROUP BY petrichor_type.id_type ORDER BY petrichor_type.id_type DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}

function updata_bill($id_bill, $status_bill)
{
    $sql = "UPDATE petrichor_bill SET status_bill='" . $status_bill . "' WHERE id_bill=" . $id_bill;
    return pdo_execute($sql);
}
// ==================checkout==============
function checkout($mail, $id_user, $name_bill, $address_bill, $phoneNumber_user, $email_bill, $pttt_bill, $tolal_bill)
{
    // save bill
    pdo_execute("INSERT INTO bill (id_user, name_bill,address_bill, phoneNumber_bill, email_bill, pttt_bill, dayAdd_bill, total_bill, status_bill) 
    VALUES ('$id_user', '$name_bill','$address_bill', '$phoneNumber_user','$email_bill','$pttt_bill',now(),'$tolal_bill','New')");
    // save cart user
    $id_bill = pdo_query_one("SELECT max(id_bill) as id_bill FROM bill")['id_bill'];
    foreach ($_SESSION['addcart'] as $addcart) {
        if (isset($addcart['amount_product'], $addcart['price_product'], $addcart['image_product'], $addcart['name_product'], $addcart['id_product'])) {
            pdo_execute("INSERT INTO cart (id_user, id_product, image_product, name_product, price_product, amount_product, id_bill) 
            VALUES ('$id_user', '" . $addcart['id_product'] . "', '" . $addcart['image_product'] . "', '" . $addcart['name_product'] . "', '" . $addcart['price_product'] . "', '" . $addcart['amount_product'] . "', '$id_bill')");
        }
    }
    // send mail
    $default_mail = "dattbps36849@fpt.edu.vn";
    $default_mail_password = "bkzz nfan jlyl fzul";
    $default_mail_name = "DIMO";

    // $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = TRUE;
    $mail->Mailer = "smtp";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->SMTPDebug = false;
    $mail->Host = "smtp.gmail.com";
    $mail->CharSet = 'UTF-8';
    $mail->Username = $default_mail;
    $mail->Password = $default_mail_password;
    $mail->Subject = 'Đặt hàng thành công Tại Dimo Shop!';
    // Set the required parameters for email header and body

    $mail->isHTML(true);
    $mail->setFrom($mail->Username, $default_mail_name);
    $mail->addAddress($email_bill, $name_bill);


    $listbill = '';
    $i = 1;
    foreach ($_SESSION['addcart'] as $addcart) {
        $intoMoney_cart = $addcart['amount_product'] * $addcart['price_product'];
        $listbill .= '
            <tr>
                <td>' . $i++ . '</td>
                <td>' . $addcart['name_product'] . '</td>
                <td>' . number_format($addcart['price_product']) . ' $</td>
                <td>' . $addcart['amount_product'] . '</td>
                <td>' . number_format($intoMoney_cart) . ' $</td>
            </tr>
        ';
    }

    $mail->msgHTML('<div>
    Xin chào ' . $name_bill . ',<br>
    Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.<br>
    Đơn hàng của bạn đã được đặt thành công.<br>
    <h3>Thông tin đơn hàng</h3>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <tbody>
            ' . $listbill . '
            <tr>
                <td colspan="5" style="text-align:right">Tổng cộng</td>
                <td>' . number_format($tolal_bill) . ' $</td>
            </tr>
        </tbody>
    </table>
    </div>');


    $mail->send();
    // send mail




    unset($_SESSION['addcart']);
    return $id_bill;
}
function payment_vnpay($mail, $id_user, $name_bill, $address_bill, $phoneNumber_user, $email_bill, $pttt_bill, $tolal_bill)
{
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = BASE_URL . "?act=checkout&id_user=$id_user&name_bill=$name_bill&address_bill=$address_bill&phoneNumber_user=$phoneNumber_user&email_bill=$email_bill&pttt_bill=$pttt_bill&tolal_bill=$tolal_bill";
    $vnp_TmnCode = "QB9PHLVH";
    $vnp_HashSecret = "SSNYXUZIIZQVSNCAPAOGRDQSRINMEGBR";
    $startTime = date("YmdHis");
    $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

    $vnp_TxnRef = rand(1, 10000);
    $vnp_Amount = $tolal_bill * 24000;
    $vnp_Locale = 'vn';
    $vnp_BankCode = "NCB";
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount * 100,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
        "vnp_OrderType" => "other",
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
        "vnp_ExpireDate" => $expire
    );

    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        $inputData['vnp_BankCode'] = $vnp_BankCode;
    }
    // return $inputData;
    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashdata .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    return  $vnp_Url;
}
function result_checkout_vnpay(
    $vnp_ResponseCode,
    $vnp_TxnRef,
    $vnp_Amount,
    $vnp_OrderInfo,
    $vnp_TransactionNo,
    $vnp_BankCode,
    $vnp_PayDate,
    $vnp_SecureHash,
    $mail,
    $id_user,
    $name_bill,
    $address_bill,
    $phoneNumber_user,
    $email_bill,
    $pttt_bill,
    $tolal_bill
) {
    // check hash
    $vnp_Returnurl = BASE_URL . "?act=checkout&id_user=$id_user&name_bill=$name_bill&address_bill=$address_bill&phoneNumber_user=$phoneNumber_user&email_bill=$email_bill&pttt_bill=$pttt_bill&tolal_bill=$tolal_bill";

    $vnp_TmnCode = "QB9PHLVH";
    $vnp_HashSecret = "SSNYXUZIIZQVSNCAPAOGRDQSRINMEGBR";
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    $vnp_Locale = 'vn';
    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount * 100,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
        "vnp_OrderType" => "other",
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
        // "vnp_ExpireDate" => $expire
    );
    if ($vnp_ResponseCode == "00") {
        $id_bill = checkout($mail, $id_user, $name_bill, $address_bill, $phoneNumber_user, $email_bill, $pttt_bill, $tolal_bill);
        return $id_bill;
    } else {
        header("Location: index.php?act=checkout&error=1");
    }
}
// ==================checkout==============