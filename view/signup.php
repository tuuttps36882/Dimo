<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/signup.css">
	<title>SIGN UP</title>
	<style>
		.alert {
			padding: 10px;
			background-color: #fff;
			color: #000;
			border: 2px solid #FEAC5E;
			text-align: center;
		}
	</style>
</head>

<body>
	<table width="100%" style="margin-bottom: 100px;">
		<tr>
			<td valign="top" width="50%" class="imgsign">
				<img src="IMG/Imgpage/imgsign.png" alt="Image" style="width:100%;height:750px;">
			</td>
			<td valign="top" width="50%">
				<form action="index.php?act=signup" method="post" class="containersign" style="margin-top: 60px;">
					<div id="login">
						<center>
							<img src="IMG/Logo/DIMO tach nen - Copy.png" alt="" class="imglogo">
						</center>
						<h3>MY ACCOUNT</h3>
						<ul class="choose">
							<li>
								<a href="index.php?act=login">LOG IN</a>
							</li>
							<li>
								<a href="index.php?act=signup">SIGN UP</a>
							</li>
						</ul>
						<div class="inputs">
							<input type="text" name="name_user" required>
							<label class="label">User Name</label>
						</div>
						<div class="inputs">
							<input type="password" name="password_user" required>
							<label class="label">Pass Word</label>
						</div>
						<div class="inputs">
							<input type="number" name="phoneNumber_user" required>
							<label class="label">Phone</label>
						</div>
						<div class="inputs">
							<input type="text" name="address_user" required>
							<label class="label">Address</label>
						</div>
						<div class="inputs">
							<input type="email" name="email_user" required>
							<label class="label">Email</label>
						</div>
						<div class="submit_user" style="justify-content:center ; margin-bottom:1rem;">
							<input type="submit" class="btnlogin" name="signup" value="SIGN UP">
						</div>

						<?php
						if (isset($thongbao) && ($thongbao != "")) {
							echo "<div class='alert'>
								$thongbao</div>";

							// echo "<script type='text/javascript'>alert('$thongbao');</script>";
						}
						?>
					</div>
				</form>
			</td>
		</tr>
	</table>
	</div>
</body>

</html>