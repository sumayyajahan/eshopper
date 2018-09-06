<?php include("../connect.php"); ?>


<?php 


	$id = $_GET ['id'];

	

    $query ="DELETE FROM `products` WHERE product_id = '$id'";

	



	$res = mysqli_query($con, $query);

	if(!$res)
	{
		echo 0;
	}
	else
	{
		echo 1;

		header("location: products_list.php");
	}
	
 ?>