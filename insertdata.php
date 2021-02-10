<?php
require('connect.php');
if (isset($_POST['upload'])) {
$id = $_POST['p_id'];
$name = $_POST['p_name'];
$detail = $_POST['p_detail'];
$price = $_POST['p_price'];
	$path="img/";
	$fileimg = $path . basename($_FILES['p_img']['name']);
		
	move_uploaded_file($_FILES['p_img']['tmp_name'], $fileimg);
		

			 $sql = "INSERT INTO product 
					(p_id,p_name, 
					p_detail, 
					p_price, 
					p_img) 
					VALUES
					('$id','$name',
					'$detail',
					'$price',
					'$fileimg');";



$objQuery = mysqli_query($conn, $sql);
}

if ($objQuery) {
	header("Location: index.php");
} else {
	echo "Error . $objQuery .";

}

mysqli_close($conn); // ปิดฐานข้อมูล



