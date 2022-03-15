<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylenavbar2.css">
    <link rel="stylesheet" href="item1.css">
    <link rel="stylesheet" href="fruitpage.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
</head>
<header>
    <ul class="navbar2">
        <li><a href="mainpage.html">Home</a></li>
        <li>
            <div class="dropdown">
                Shop
                <div class="dropdown-content">
                    <p><a href="fruit.html">Fruit</a></p>
                    <p><a href="fruitorganic.html">Organic</a></p>
                </div>
            </div>
        </li>
        <li><a href="#">About Us</a></li>

        <li>
            <div class="search_bar">
                <input type="text" name="search_name" placeholder="Search....">
                <div class="search_button">
                    <button type="submit"><i class="fi fi-br-search"></i></button>
                </div>

            </div>
        </li>
        <li>
        <li>
            <div class="order">
                <a href="shopcart.html"><img src="cart.png"></a>
            </div>
        </li>
        </li>
        <li>
            <div class="dropdown_profile">
                <img src="profile.png">
                <div class="dropdown-content-profile">
                    <table class="td_dropdown">
                        <div class="profile">
                            <div class="profile">
                                <img src="profile2.png">
                            </div>
                            <p>username</p>
                        </div>
                        <tr>
                            <td style="width: 20%;">
                                <a href="sellerprofile.html"><img src="seller.png"></a>
                            </td>
                            <td style="width: 80%;">
                                <a href="sellerprofile.html">Seller Mode</a>
                            </td>
                        </tr>
                    </table>
                    <div class="logout">
                        <a href="#">Log out</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</header>


<body>
    <div class="head_img">
        <img src="fruits.jpg" alt="head">
    </div>
    <div class="head_recommed_product">
        <p>Fruit</p>
    </div>
    <div class="contant_mainpage">
        <div class="table_item_product">
            <?php
            //connect db
            include("server.php");
            $sql = "SELECT * FROM tbl_product where fruittype = '1' ";  //เรียกข้อมูลมาแสดงทั้งหมด
            $result = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_array($result)) {

            ?>
                <div class="box_contant">
                    <div class="item_product">
                        <div class="item_product_picture">
                            <?php echo "<img src='img/" . $row["p_img"] . " '>" ?>
                        </div>
                        <div style="width: 100%;" class="head">
                            <h1>Name:<span><?php echo $row["p_name"] ?></span></h1>
                        </div>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 70%;" class="forn">
                                    <h3><?php echo $row["p_price"] ?> <span>Bath </span></h3>
                                </td>
                                <td class="back" style="width: 30%;">
                                    <button type="submit"><i class="fi fi-ss-shopping-cart-add"></i></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>