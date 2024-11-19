<link rel="stylesheet" href="css/edit_user.css">
<style>
    .khung
    {
        border: 1px solid #000;
        padding: 20px;
        border-radius: 10px;
    }
</style>
<?php
if (isset($_SESSION['name_user']) && (is_array($_SESSION['name_user']))) {
    extract($_SESSION['name_user']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container_change">
        <form action="index.php?act=edituser" method="POST">
            <h2>Update Information</h2>
            <div class="khung">
                <div class="inputs">
                    <input type="text" name="name_user" value="<?= $name_user ?>" required>
                    <label class="label">User Name</label>
                </div>
                <div class="inputs">
                    <input type="text" name="email_user" value="<?= $email_user ?>" required>
                    <label class="label">User Email</label>
                </div>
                <div class="inputs">
                    <input type="text" name="password_user" value="<?= $password_user ?>" required>
                    <label class="label">Password</label>
                </div>

                <div class="inputs">
                    <input type="text" name="address_user" value="<?= $address_user ?>" required>
                    <label class="label">Address</label>
                </div>
                <div class="inputs">
                    <input type="text" name="phoneNumber_user" placeholder="Số điện thoại" value="<?= $phoneNumber_user ?>" required>
                    <label class="label">PhoneNumber</label>
                </div>
                <div class="submit_user">
                    <input type="hidden" name="id_user" value="<?= $id_user ?>">
                    <div class="button_change">
                        <input type="submit" class="submit" name="capnhat" value="Confirm">
                        <div class="button-back"><a href="index.php?act=user">Information</a></div>
                    </div>
                </div>

            </div>

        </form>
    </div>
</body>

</html>

<?php
if (isset($thongbao) && ($thongbao != "")) {
    echo "<script type='text/javascript'>alert('$thongbao');</script>";
}
?>