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
  ?>
  <br>
  <form action="insertdata.php" method="post" name="prodct" enctype="multipart/form-data" >
    <table class="content-table">
      <tr >
        <td>ชื่อสินค้า : </td>
        <td><input type="text" name="p_name"></td>
      </tr>
      <tr >
        <td>รายละเอียดสินค้า : </td>
        <td><input type="text" name="p_detail"></td>
      </tr>
      <tr >
        <td>ราคา : </td>
        <td><input type="text" name="p_price"></td>
      </tr>
      <tr >
        <td>รูป : </td>
        <td><input type="file" name="p_img"></td>
      </tr>

    </table>
    <br>
    <center><input class="ok" type="submit" value="ยืนยัน" name="upload"></center>
  </form>
  </div></div>
</body>

</html>