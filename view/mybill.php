<link rel="stylesheet" href="css/user.css">
<style>
    .body-right {
        background-color: #fff;
        border-radius: 40px;
        margin-bottom: 100px;
        width: 40%;
    }

    .body-left {
        border-radius: 0 20px 20px 0;
    }

    h1 {
        padding: 20px 0 10px 20px;
    }

    .user {
        padding: 0;
        margin: 0 0 30px 0;
    }

    .body-right .user .user-info {
        padding: 0;
    }

    .body-right .user .user-info p,
    .show {
        padding: 0 0 0 24px;
    }

    p {
        margin: 0;
    }

    .show {
        margin-bottom: 10px;
    }

    tr th td {
        border: 1px solid #000;

    }
</style>
<?php
if (isset($_SESSION['name_user']) && (is_array($_SESSION['name_user']))) {
    extract($_SESSION['name_user']);
}
?>
<div class="body">
    <div class="body-left">
        <div class="action">
            <a href="index.php?act=user">Account</a>
        </div>
        <div class="action">
            <a href="index.php?act=edituser">Change Password</a>
        </div>
        <div class="action">
            <a href="index.php?act=mybill">Purchase History</a>
        </div>
        <?php
        if ($role_user == 1) {
            echo ' <a href="admin/"style="text-decoration: none; color: red;"><div class="action"  >Admin</div></a>';
        }
        ?>
        <div class="action">
            <a href="index.php?act=thoat">Log Out</a>
        </div>
    </div>
    <div class="body-right" style="padding: 0px 0px 150px;">
        <h1 style="font-size: 30px;">Purchase History</h1>
        <hr style="width: 65%; margin-left: 20px;">
        <section>
            <div class="table-container" style="margin: 0 auto; width: 80%; overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Code orders</th>
                        <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Order date</th>
                        <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Total amount</th>
                        <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Status</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['status_bill']);
                            $countsp =  loadall_cart_count($bill['id_bill']);
                            echo '
                            <tr>
                                <td style="border: 1px solid #000; padding: 8px;">PC-' . $bill['id_bill'] . '</td>
                                <td style="border: 1px solid #000; padding: 8px;">' . $bill['dayAdd_bill'] . '</td>
                                <td style="border: 1px solid #000; padding: 8px;">' . $bill['total_bill'] . '$</td>
                                <td style="border: 1px solid #000; padding: 8px;">' . $ttdh . '</td>
                            </tr>
                        ';
                        }
                    }
                    ?>
                </table>
            </div>
        </section>
    </div>

</div>
</div>