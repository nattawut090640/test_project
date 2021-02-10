<?php
            require('connect.php');
            $p_id = $_REQUEST['p_id'];
            $sql = '
            SELECT * FROM product WHERE p_id = ' . $p_id . ';
            ';
            $loop = mysqli_query($conn, $sql);
            ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ThongSeub</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="top-header">
        <a class="menu-item brand" href="index.php">Home</a>
        <a class="menu-item" href="insert.php">เพิ่มสินค้า</a>
        <a class="menu-item" href="manage.php">จัดการสินค้า</a>
    </header>
    <div class="main-content">
    <div class="box">
            <form action="updatedata.php" method="post" name="prodct" enctype="multipart/form-data">
                <table border="1">
                <?php
        while ($obj = mysqli_fetch_array($loop)) {
        ?>
                    <tr class="bg-success">
                        <td>รหัสสินค้า : </td>
                        <td><input type="text" name="p_id" value="<?php echo $obj['p_id'];?>"></td>
                    </tr>
                    <tr class="bg-success">
                        <td>ชื่อสินค้า : </td>
                        <td><input type="text" name="p_name" value="<?php echo $obj['p_name'];?>"></td>
                    </tr>
                    <tr class="bg-success">
                        <td>รายละเอียดสินค้า : </td>
                        <td><input type="text" name="p_detail" value="<?php echo $obj['p_detail'];?>"></td>
                    </tr>
                    <tr class="bg-success">
                        <td>ราคา : </td>
                        <td><input type="text" name="p_price" value="<?php echo $obj['p_price'];?>"></td>
                    </tr>
                    <tr class="bg-success">
                        <td> รูป : </td>
                        <td><img src="<?php echo $obj["p_img"];?>" width="100" height="100"><br>
                        <input  type="file" name="p_img"  >
                        <input type="hidden" name="h_img" value="<?php echo $obj['p_img'];?>" />
                        </td>
                    </tr>
                    <?php
        }
                    ?>
                </table>
                <br>
                <input type="submit" value="ยืนยัน" name="upload">
            </form>
            </div>
            </div>
</body>

</html>