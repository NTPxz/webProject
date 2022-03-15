<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenavbar2.css">
    <link rel="stylesheet" href="profile.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <title>PROFILE</title>
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
            <div class="dropdown">
                Buyer
                <div class="dropdown-content">
                    <p><a href="sellerprofile.html">Seller</a></p>
                </div>
            </div>
        </li>
        <li>
            <div class="search_bar">
                <input type="text" name="search_name" placeholder="Search....">
                <div class="search_button">
                    <button type="submit"><i class="fi fi-br-search"></i></button>
                </div>

            </div>
        </li>
        <li>
            <div class="shoppingcart">
                <form action="shopcart.html">
                    <button type="submit"><img src="cart.png"></button>
                </form>
            </div>

        </li>
        <li>
            <div class="profile">
                <form action="profile.html">
                    <button type="submit"><img src="profile.png"></button>
                </form>
            </div>

        </li>
    </ul>
</header>

<body>
    <div class="box_contant_profile">
        <div class="profile_head">
            <h1>My Profile</h1>
        </div>
        <table>
            <td class="table_forn">
                <div class="box_img">
                    <img>
                    <p>Tanachard Sookyang</p>
                </div>
                <div class="box_menu">
                    <div class="box_menu_head">
                        <p>My Profile</p>
                    </div>

                    <ul>
                        <li><a href="profile.html">Profile</a> </li>
                        <li><a href="editinformation.html">Edit Profile</a> </li>
                        <li><a href="changpassword.html">Change Password</a> </li>
                        <li><a href="">My Order</a> </li>
                    </ul>
                </div>
            </td>
            <td class="table_back">
                <div class="box_contant">
                    <div class="box_contant_head">
                        <p>My Profile</p>
                    </div>
                    <div class="box_contant_detail">
                        <table class="table_detail">
                            <tr>
                                <td class="detail_forn">
                                    <p>Name </p>
                                </td>
                                <td class="detail_back">
                                    <p>...................................</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="detail_forn">
                                    <p>Email</p>
                                </td>
                                <td class="detail_back">
                                    <p>....................................</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="detail_forn">
                                    <p>Phone Number</p>
                                </td>
                                <td class="detail_back">
                                    <p>....................................</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="detail_forn">
                                    <p>Gender</p>
                                </td>
                                <td class="detail_back">
                                    <p>.....................................</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="detail_forn">
                                    <p>Brithday</p>
                                </td>
                                <td class="detail_back">
                                    <p>......................................</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="detail_forn">
                                    <p>Address</p>
                                </td>
                                <td class="detail_back">
                                    <p>......................................</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </table>
    </div>
</body>

</html>