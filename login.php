<?php
session_start();
include('server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
</head>
<header>
    <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li>
            <div class="dropdown">
                Shop
                <div class="dropdown-content">
                    <p><a href="#">NOMAL FRUIT</a></p>
                    <p><a href="#">ORGANIC FRUIT</a></p>
                </div>
            </div>
        </li>
        <li><a href="#">Pruduct</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="register.php">Sign Up</a></li>
    </ul>
</header>

<body>

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="login_contant">
            <table class="contant_table">
                <td class="td1">
                    <div class="logo_box">
                        <img src="main.png" alt="main_logo">
                    </div>
                </td>
                <td class="td2">
                    <div class="login_box">
                        <div class="login_box_head">
                            <p>LOGIN</p>
                        </div>
                        <div class="login_box_form">
                            <div class="login_box_form_Email-Username">
                                <p>Username / Email</p>
                                <input type="text" name="username">
                            </div>
                            <div class="login_box_form_password">
                                <p>Password</p>
                                <input type="password" name="password">
                            </div>
                        </div>
                        <table>
                            <td>
                                <div class="login_box_form_signup-forget-login">
                                    <div class="login_box_form_signup">
                                        <a href="register.php">SIGN UP</a>
                                    </div>
                                    <div class="login_box_form_forget">
                                        <a href="#">Forget Your Password</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="login_submit">
                                    <input type="submit" name="login_user" value="LOG IN">
                                </div>
                            </td>
                        </table>
                    </div>
                </td>
            </table>
        </div>
    </form>
</body>

</html>