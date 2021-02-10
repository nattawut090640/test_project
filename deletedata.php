<?php

$p_id  = $_REQUEST['p_id'];

require('connect.php');

$sql = '
    DELETE FROM product
    WHERE p_id = ' .  $p_id  . ';
    ';

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	header("Location: index.php");
} else {
	echo "Error";

}
mysqli_close($conn); // ปิดฐานข้อมูล

?>
