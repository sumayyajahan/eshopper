<?php include("../connect.php"); ?>

<?php
 //session_start();

 /*if($_SERVER["REQUEST_METHOD"] == "POST") {*/
      // username and password sent from form 
      /*echo '<pre>';
      print_r($_POST);
      echo '</pre>';
      die();*/
      
      $id = $_POST['id'];
      $product_name = $_POST['product_name'];
      $product_details = $_POST['product_details']; 
      $product_price = $_POST['product_price']; 
      $product_status = $_POST['product_status'];
      $product_category = $_POST['product_category'];

      $product_image = "";

      $target_dir = "../uploads";

      $product_image_f = $target_dir . basename($_FILES["product_image"]["name"]);
                       // move_uploaded_file($_FILES["product_image"]["tmp_name"], $product_image);

      if(isset($_FILES['product_image']['name'])){
      $errors= array();
      $file_name = $_FILES['product_image']['name'];
      $file_size =$_FILES['product_image']['size'];
      $file_tmp =$_FILES['product_image']['tmp_name'];
      $file_type=$_FILES['product_image']['type'];


      /*$file_ext=strtolower(end(explode('.',$_FILES['product_image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }*/

      $allowed =  array("jpeg","jpg","png");

      $filename = $_FILES['product_image']['name'];
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      if(!in_array(strtolower($ext),$allowed) ) {
          //echo 'error';
          $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         //echo "Success";
      $product_image = 'uploads/'.$filename;

      }else{
         print_r($errors);
      }
   }
   else
   {
      echo "Not uploaded";
   }
      
   if($id >0)
	{
     
      $updated_at = date('Y-m-d H:i:s');

      if($product_image != "")
      {
         
        $query = "UPDATE `products` SET `product_category`='$product_category',`product_name`='$product_name',`product_details`='$product_details',`product_price`='$product_price',`product_image`='$product_image',`product_status`='$product_status',`updated_at`='$updated_at' WHERE product_id = '$id'";

      }
      else
      {
          
          $query = "UPDATE `products` SET `product_category`='$product_category',`product_name`='$product_name',
          `product_details`='$product_details',`product_price`='$product_price',`product_status`='$product_status',
          `updated_at`='$updated_at' WHERE product_id = '$id'";
      }
       
   }
   else
   {

    $created_at = date('Y-m-d H:i:s');

    $query = "INSERT INTO `products`(`product_category`, `product_name`, `product_details`, `product_price`, `product_image`, `product_status`, `created_at`) VALUES ('$product_category','$product_name','$product_details','$product_price','$product_image','$product_status', '$created_at')";
      
   }

 

   $res = mysqli_query($con, $query); 



   if(!$res)
   {
      header('Location: products.php');
   }
   else
   {
      //echo 1;
      header('Location: products_list.php');
   }
   
      
?>




   