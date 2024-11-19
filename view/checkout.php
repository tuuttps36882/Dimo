<style>
    .container__cart__first {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .container__cart__first__DSSP,
    .container__cart__first__pay {
        flex: 1;
        margin-right: 20px;
    }

    .container__cart__first__DSSP table {
        width: 100%;
        border-collapse: collapse;
    }

    .container__cart__first__DSSP th,
    .container__cart__first__DSSP td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .container__cart__first__DSSP th {
        background-color: #f4f4f4;
    }

    .container__cart__first__DSSP tr:nth-child(even) {
        background-color: #f4f4f4;
    }

    .form-container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input-group input,
    .input-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .input-group button {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #007BFF;
        color: #fff;
        cursor: pointer;
        border-radius: 4px;
    }

    .input-group button:hover {
        background-color: #0056b3;
    }
</style>
<!-- ================================================= -->

<h3 style="color: gray; font-size: 30px; text-align: center;">Bill Detail</h3>

<div class="container__cart__first">

    <div class="container__cart__first__DSSP">
        <table>
            <h3 style="color: gray; font-size: 30px; text-align: center;">Billing Details</h3>
            <br>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>IMG</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>

            <!-- Ranh Gioi -->
            <tbody id="datarow">
                <?php
                $tong = 0;
                $num = 1;
                if (isset($_SESSION['addcart']) && $_SESSION['addcart']) {
                    foreach ($_SESSION['addcart'] as $key => $value) {
                        $tong += $value['price_product'] * $value['amount_product']; // Update the total price
                ?>
                        <tr>
                            <td class="text-left"><?= $num++ ?></td> <!-- Removed the $ sign from the key -->
                            <td class="text-left"><img src="img/pro/<?= $value['image_product'] ?>" width="100px"></td>
                            <td class="text-left"><?= $value['name_product'] ?></td>
                            <td class="text-left">x<?= $value['amount_product'] ?></td>
                            <td class="text-left">$<?= $value['price_product'] * $value['amount_product'] ?></td>
                        </tr>
                <?php  }
                }
                ?>
            </tbody>
        </table>

        <table> <!-- Added a new table for the total -->
            <tr>
                <td colspan="4" style="text-align:right">TOTAL</td>
                <td> <?= number_format($tong) ?> $</td> <!-- Removed the extra space and the unnecessary echo -->
            </tr>
        </table>

    </div>
    <!-- Ranh Gioi -->
    <div class="container__cart__first__pay">
        <h3 style="color: gray; font-size: 30px; text-align: center;">Payment Information</h3>
        <br>
        <?php
        if (isset($_SESSION['name_user'])) {
            $name_user = $_SESSION['name_user']['name_user'];
            $address_user = $_SESSION['name_user']['address_user'];
            $phoneNumber_user = $_SESSION['name_user']['phoneNumber_user'];
            $email_user = $_SESSION['name_user']['email_user'];
        } else {
            $name_user = '';
            $address_user = '';
            $phoneNumber_user = '';
            $email_user = '';
        }
        ?>
        <div class="form-container">
            <form method="POST">
                <input type="hidden" name="total" value="<?= $tong ?>">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name_user" value="<?= $name_user ?>" required>
                </div>
                <div class="input-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address_user" value="<?= $address_user ?>" required>
                </div>
                <div class="input-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" name="phoneNumber_user" value="<?= $phoneNumber_user ?>" pattern="\d*" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email_user" value="<?= $email_user ?>" required>
                </div>
                <div class="input-group">
                    <label for="payment-method">Payment Method:</label>
                    <select id="payment-method" name="payment-method" required>
                        <option value="">---Select method ----</option>
                        <option value="1">Cash on delivery</option>
                        <option name="pttt_bill" value="2">Bank transfer</option>
                        <option name="pttt_bill" value="3">MOMO</option>
                        <option name="pttt_bill" value="4">VNpay</option>
                        <option name="pttt_bill" value="5">Credit card</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="input-group" style="border: none; margin-top: 10px;">
                    <input type="submit" class="btn btn-primary" name="checkout" value="Confirm Order">
                    <!-- <a href="index.php?act=bill">
                        <button type="submit" name="billcomfirm">Confirm Order</button>
                    </a> -->
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ================================================= -->