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
  <?php
  require('connect.php');

  $sql = '
SELECT * 
FROM product
; ';

  $loop = mysqli_query($conn, $sql);
  ?>
<br>
  <table class="content-table">
    <tr>
      <th >รูป</th>
      <th>ชื่อสินค้า</th>
      <th>ราคา</th>
      <th>อัพเดท</th>
      <th>ลบสินค้า</th>
     
    </tr>
    <?php
    while ($obj = mysqli_fetch_array($loop)) {
    ?>
      <tr class="active-row">
      <td><center><img src="<?php echo $obj["p_img"]; ?>"width="100" height="100"></center></td>
        <td><center><?php echo $obj["p_name"]; ?></center></td>
        <td><center><?php echo $obj["p_price"]; ?></center></td>
        <td ><a href="update.php?p_id=<?php echo $obj["p_id"]; ?>"><center><i class="fa fa-edit" style="font-size:36px"></i></center></a></td>
        <td ><a href="deletedata.php?p_id=<?php echo $obj["p_id"]; ?>"><center><i class="material-icons">delete</i></center></a></td>
      </tr>
    <?php
    }
    ?>

  </table>
</body>

</html>