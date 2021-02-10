<?php
require('connect.php');
if (isset($_POST['upload'])) {
$id = $_POST['p_id'];
$name = $_POST['p_name'];
$detail = $_POST['p_detail'];
$price = $_POST['p_price'];
$h_img = $_POST['h_img'];
	$path="img/";
	$fileimg = $path . basename($_FILES['p_img']['name']);
		if(!move_uploaded_file($_FILES['p_img']['tmp_name'], $fileimg)){
			$fileimg = $h_img;
		}
			 $sql = "UPDATE product
             SET  p_name = '" . $name . "', 
             p_detail = '" . $detail . "', 
             p_price = '" . $price . "', 
             p_img = '" . $fileimg . "'
			 WHERE p_id = " . $id . " ; ";
}
$objQuery = mysqli_query($conn, $sql);


if ($objQuery) {
	header("Location: index.php");
} else {
	echo "Error";

}
mysqli_close($conn); // ปิดฐานข้อมูล

?>
