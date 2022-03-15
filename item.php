<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item1</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel="stylesheet" href="item1.css">
</head>

<body>
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
                <h1>Name:<span><?php echo $row["p_name"] ?></span></h1>
                <table>
                    <tr>
                        <td>
                            <h3><?php echo $row["p_price"] ?> <span>Bath </span></h3>
                        </td>
                        <td class="back">
                            <button type="submit"><i class="fi fi-ss-shopping-cart-add"></i></button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
</body>

</html>