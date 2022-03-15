<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel="stylesheet" href="styleaddproduct.css">
    <link rel="stylesheet" href="navbar3.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <title>Add product</title>
</head>
<header>
    <div class="navbar_seller">
        <ul class="navbar3">
            <li>
                <div class="icom">
                    <i class="fi fi-ss-shopping-cart"></i>
                </div>
            </li>
            <li>
                <div class="icom">
                    <i class="fi fi-br-portrait"></i>
                </div>
            </li>
        </ul>
    </div>
</header>

<body>
    <form action="add_product_db.php" method="POST" enctype="multipart/form-data" name="addprd" class="form-horizontal" id="addprd">
        <div class="box_addproduct_head">
            <p>ADD PRODUCT</p>
        </div>
        <div class="main_addproduct_contant">
            <table style="width: 100%;">
                <td style="width: 30%;">
                    <div class="addpicture">
                        <div class="image-upload">
                            <label for="file-input">
                                <img src="https://img.icons8.com/ios-glyphs/344/add-image.png" />
                            </label>
                            <input id="file-input" type="file" name="p_img" />
                        </div>
                        <p>Upload Products Picture</p>
                    </div>
                </td>
                <td style="width: 70%;">
                    <div class="main_contant_addproduct_adddetail">
                        <div class="input_product_name">
                            <input type="text" name="p_name" placeholder="Product Name">
                        </div>
                        <div class="input_product_price">
                            <input type="number" name="p_price" placeholder="Product Price" min="0">
                        </div>
                        <div class="Qproduct">
                            <input type="number" name="Qproduct" placeholder="Quantity">
                        </div>
                        <div class="input_product_type">
                            <select name="fruittype">
                                <option value="0">Product Type:</option>
                                <optgroup label="Fruit">
                                    <option value="1">Normal</option>
                                    <option value="2">Organic</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input_product_detail">
                            <textarea name="p_detail" placeholder="Product Detail"></textarea>
                        </div>
                    </div>
                </td>
            </table>
            <div class="addproduct_button">
                <input type="submit" value="ADD PRODUCT" name="btnadd">
            </div>
        </div>
    </form>


</html>