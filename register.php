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
    <title>MAIN</title>
    <link rel="stylesheet" href="styleregister.css">
    <link rel="stylesheet" href="stylenavbar2.css">
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
                    <p><a href="#">Hello World!</a></p>
                    <p><a href="#">Hello World!</a></p>
                </div>
            </div>
        </li>
        <li><a href="#">Pruduct</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="login.php">Log in</a></li>
    </ul>
</header>

<body>
    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
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

        <div class="signup_box">
            <div class="signup_head">
                Sign Up
            </div>
            <table class="table_name">
                <td>
                    <input type="text" class="signup_firstname" name="firstname" placeholder="Frist Name">
                </td>
                <td>
                    <input type="text" class="signup_lastname" name="lastname" placeholder="Last Name">
                </td>
            </table>
            <div class="signup_form_email">
                <input type="email" class="signup_email" name="email" placeholder="Email"><br>
            </div>
            <div class="signup_form_address">
                <textarea name="address" cols="40" rows="4" placeholder="Address"></textarea><br>
            </div>
            <div class="signup_form">
                <input type="text" class="signup_phone" name="phone" placeholder="Phone"><br>
            </div>
            <div class="signup_form">
                <input type="text" class="signup_username" name="username" placeholder="UserName"><br>
            </div>
            <div class="signup_form_password">
                <input type="password" class="signup_password" name="password_1" placeholder="Password"><br>
            </div>
            <div class="signup_form_password">
                <input type="password" class="signup_comfirm_password" name="password_2" placeholder="Comfirm Password">
            </div>
            <div class="signup_check_submit">
                <table>
                    <tr>
                        <td>
                            <label class="container">I Agree with <a href="#">Privacy</a> And <a href="#">Policy</a>
                                <input type="checkbox"><span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <input type="submit" name="reg_user" value="Sign Up">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>

</body>

</html>