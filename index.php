<?php
require('connect.php');

$sql = '
SELECT * 
FROM product
; ';

$loop = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>ThongSeub</title>
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header class="top-header">
    <a class="menu-item brand" href="index.php">Home</a>
    <a class="menu-item" href="insert.php">เพิ่มสินค้า</a>
    <a class="menu-item" href="manage.php">จัดการสินค้า</a>
  </header>


  <div class="header">
   
  </div>

  <div class="row">
    <?php
    while ($obj = mysqli_fetch_array($loop)) {
    ?>
      <div class="column">
        <center><img class="img" src="<?php echo $obj["p_img"]; ?>" width="100" height="100">
        <p>สินค้า : <?php echo $obj["p_name"]; ?></p>
        <p>ราคา : <?php echo $obj["p_price"]; ?>.- บาท</p>
        <details>
          <summary>รายละเอียดสินค้า</summary>
          <p><?php echo $obj["p_detail"]; ?></p>
        </details>
        </center>
      </div>
    <?php
    }
    ?>
  </div>

</body>

</html>