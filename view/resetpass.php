<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <title>FORGOT PASSWORD</title>
</head>
<style>
    .alert {
        padding: 10px;
        background-color: #fff;
        color: #000;
        border: 2px solid #FEAC5E;
        text-align: center;
    }

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        font-family: 'Poppins';
        scroll-behavior: smooth;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    @keyframes reveal {
        0% {
            transform: scalex(0);
        }

        100% {
            transform: scalex(1);
        }
    }

    body {
        height: auto;
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #FFF377;
    }


    table {
        border-spacing: 0px;
    }

    .imglogin {
        transform: scaleX(0);
        transform-origin: left;
        animation: reveal 1s 1 forwards;
    }


    .imglogo {
        width: 80px;
        margin: 0 0 30px 0;
    }

    h3 {
        text-align: center;
        margin: 0 0 20px 0;
    }

    .choose {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .choose li:nth-of-type(1) {
        margin-right: 80px;
    }

    .choose li {
        cursor: unset;
    }

    /* .choose li::before {
    content: '';
    position: absolute;
    border-radius: 50px;
    border-bottom: 2px solid #000;
    font-weight: 900;
    width: 100px;
    margin-right: 50px;
    align-items: center;
    bottom: 0;
    right: 0;
} */

    .choose li::after {
        content: '';
        position: absolute;
        border-bottom: 2px solid #000;
        font-weight: 900;
        width: 100px;
        margin-left: 65px;
        align-items: center;
        bottom: 0;
        left: 0;
    }

    #login {
        margin: auto;
        width: 400px;
        height: auto;
        border: 1px solid #000;
        background: white;
        padding: 30px;
        border-radius: 10px;
    }

    #login .inputs {
        height: 30px;
        width: 100%;
        position: relative;
        margin-bottom: 50px;
        margin-top: 50px;
    }

    #login .inputs input {
        width: 100%;
        height: 40px;
        border-radius: 4px;
        border-bottom: 2px solid gray;
        font-size: 16px;
        transition: 0.3s;
        padding-left: 10px;
    }

    #login .inputs label {
        position: absolute;
        bottom: 0.1px;
        left: 15px;
        pointer-events: none;
        font-size: 16px;
        transition: 0.3s;
    }

    .containerlogin .inputs input:focus~label,
    .containerlogin .inputs input:valid~label {
        transform: translateY(-20px);
        background-color: white;
    }


    .btnlogin {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 15px 25px;
        border: 1px solid #747070;
        color: #000;
        border-radius: 10px;
        font-size: 16px;
        transition-delay: 0.1s;
        transition-duration: 0.5s;
        transition-property: all linear;
    }

    .btnlogin:hover {
        font-weight: 900;
        color: #fff;
        background-color: #FEAC5E;
        border: none;
    }

    .forgot {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 12px;
        position: relative;
    }

    .forgot::after {
        content: '';
        width: 0%;
        height: 7px;
        background: #FEAC5E;
        position: absolute;
        bottom: 0%;
        top: 20px;
        left: 50%;
        right: 50%;
        margin-top: 4px;
        border-radius: 10px;
        transition: all 0.5s ease;
    }

    .forgot:hover::after {
        width: 50%;
        left: 25%;
        margin-top: 4px;
    }
    
    .size {
        position: absolute;
        top: 100px;
        left: 470px;
    }

    .size2 {
        position: absolute;
        top: 442px;
        left: 865px;
    }

    #pinwheel {
        position: relative;
        width: 100px;
        height: 50px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        transform-origin: bottom right;
        background-color: white;
        animation: quay 5s infinite linear;
        z-index: -1;

    }

    #pinwheel:before {
        content: "";
        position: absolute;
        left: 50px;
        top: 150px;
        width: 100px;
        height: 50px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        background-color: black;
        transform-origin: top left;
        transform: rotate(-90deg);
    }

    #pinwheel:after {
        content: "";
        position: absolute;
        left: 50px;
        top: 50px;
        width: 100px;
        height: 50px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        background-color: black;
        transform-origin: top right;
        transform: rotate(90deg);
    }

    #pinwheel1 {
        position: absolute;
        margin-left: 100px;
        width: 100px;
        height: 50px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        background-color: white;
        transform-origin: top left;
        animation: quay 5s infinite linear;
        z-index: -1;
    }

    @keyframes quay {
        to {
            transform: rotate(360deg);
        }
    }
</style>

<body>
    <table width="100%">
        <tr>
            <!-- <td valign="top" width="50%" class="imglogin">
				<img src="IMG/Imgpage/imgforgot.png" alt="Image" style="width:100%;height:750px;">
			</td> -->
            <td valign="top" width="50%">
                <form action="?act=resetpass" class="containerlogin" method="post" style="margin: 150px;">
                    <div id="login">
                        <center>
                            <img src="IMG/Logo/DIMO tach nen - Copy.png" alt="" class="imglogo">
                        </center>
                        <h3>MY ACCOUNT</h3>
                        <div class="inputs">
                            <input type="text" name="password" required>
                            <label class="label">New Password</label>
                        </div>
                        <input type="text" name="token" <?= isset($_GET['token']) ? 'value="'.$_GET['token'].'"' : '' ?> hidden>

                        <div class="submit_user" style="justify-content:center ; margin-bottom:2rem;">
                            <input type="submit" class="btnlogin" name="resetpass" value="CONFIRM">
                        </div>
                      
                        <?php

                        ?>
                        <?php
                        if (isset($_POST['resetpass']) && (!empty($_POST['resetpass']))) {
                    $thongbao = "Change successful";
                            echo "<div class='alert'>$thongbao</div>";

                            // echo "<script type='text/javascript'>alert('$thongbao');</script>";
                        }
                        ?>
                        <a href="http://localhost/wd18401/1duan/index.php?act=login" class="forgot">LOG IN</a>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>