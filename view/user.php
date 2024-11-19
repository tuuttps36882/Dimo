<link rel="stylesheet" href="css/user.css">
<style>
  .body-right{
    background-color: #fff;
    border: 2px solid #000;
    border-radius: 40px;
    margin-bottom: 100px;
    width: 40%;
  }
  .body-left
  {
    border-radius: 0 20px 20px 0;
  }
  h1{
    padding: 20px 0 10px 20px;
  }
  .user{
    padding: 0;
    margin: 0 0 30px 0 ;
  }
  .body-right .user .user-info{
    padding: 0;
  }
  .body-right .user .user-info p, .show{
    padding: 0 0 0 24px;
  }
  p{
    margin: 0;
  }
  .show{
    margin-bottom: 10px;
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
      <a href="">Account</a>
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
  <div class="body-right">
    <h1 style="font-size: 30px;">Customer Infomation</h1>
    <hr style="width: 65%; margin-left: 20px; ">
    <section>
      <div class="user">
        <div class="user-info">
          <p>Name</p>
          <div class="show"><?= $name_user ?></div>
        </div>
        <div class="user-info">
          <p>Phone</p>
          <div class="show"><?= $phoneNumber_user ?></div>
        </div>
        <div class="user-info">
          <p>Address</p>
          <div class="show"><?= $address_user ?></div>
        </div>
        <div class="user-info">
          <p>Email</p>
          <div class="show"><?= $email_user ?></div>
        </div>
      </div>
    </section>
  </div>
</div>