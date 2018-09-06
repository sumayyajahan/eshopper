<?php 
session_start();
include '../connect.php';


//echo $_SERVER['PHP_SELF'];

if(isset($_SESSION['login_id']))
{
  if($_SESSION['user_type']=='admin')
  {

  }
  else{
    header('location: ../Eshopper');
  }
}
else
{
  header('location: ../Eshopper/registration.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('navigation.php'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
          
          <div class="col-lg-9">

          

          <div class="card card-outline-secondary my-4">
            <div class="card-header text-center">
              Products Form
            </div>
            <div class="card-body">
              <form action="products_submit.php" onsubmit="return validateform()" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="0">
                <div class="form-group">
                  <label for="product_category">Product Category</label>
                  <select class="form-control" id="product_category" name="product_category" type="text" placeholder="Enter category name">
                  <option value="">Select Category</option>

                    <?php

                      $sql = "SELECT * FROM categories ORDER BY category_name DESC";
                      $result = mysqli_query($con,$sql);

                     while($row = mysqli_fetch_assoc($result))
                     {
                      ?>
                      <option value="<?php echo $row['id'];?>"><?php echo $row['category_name']; ?></option>

                      <?php
                      }
                      ?>
                    </select>
                    <div id="error_product_category" style="color: #f00; display: none"> Please enter your product category</div>
                </div>
                <div class="form-group">
                    <label for="product_name ">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" onkeyup="hide_me(this.id)">
                    <div id="error_product_name" style="color: #f00; display: none"> Please enter your product name</div>
                    
                   
                </div>
                <div class="form-group">
                  <label for="product_details">Product Details</label>
                  <input type="text" class="form-control" id="product_details"  name="product_details" placeholder="Product details">
                  <div id="error_product_details" style="color: #f00; display: none"> Please enter your product details</div>
                </div>

                 

                <div class="form-group">
                  <label for="product_price">Product Price</label>
                  <input type="text" class="form-control" id="product_price"  name="product_price" placeholder="Product Price">
                  <div id="error_product_price" style="color: #f00; display: none"> Please enter your product price</div>
                  <br>
                </div>

                <div class="form-group">
                  <label for="product_status">Product Status</label>
                  <select class="form-control" id="product_status" name="product_status">
                  <option value="1">Active</option>
                  <option value="0">Pending</option>
                  <div id="error_product_status" style="color: #f00; display: none"> Please enter your product status</div>
                  <br>
                </div>

                 <!-- <div class="form-group">
                  <label for="last_name">Last name</label>
                  <input type="text" class="form-control" id="last_name"  name="last_name" placeholder="Last name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div> -->

                <div class="form-group">
                    <label for="product_image">Product Picture</label>
                    <input type="file" class="form-control" id="product_image" name="product_image" placeholder="Product Picture">
                    <div id="error_product_image" style="color: #f00; display: none">Please enter your product picture
                    </div>
                    <br>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
          <!-- /.card -->

        </div>
          
          
        </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>

  <script type="text/javascript">

  function hide_me(id)
  {
    //var val = document.getElementById(id).value;
    var val = $("#"+id).val();
    //alert(id)
    var error_id="error_"+id;
    if(val=="")
    {
      //document.getElementById(error_id).style.display="inline";
      $("#"+error_id).show();
    }
    else
    {
      //document.getElementById(error_id).style.display="none";
      $("#"+error_id).hide();
    }
  }

  function validateform()
 {
 var product_category = $("#product_category").val();
 var product_name = $("#product_name").val();
 //var username = document.getElementById("username").value();
 var product_details = $("#product_details").val();
 var product_price = $("#product_price").val();
 var product_status = $("#product_status").val();
 var product_image = $("#product_image").val();

 if(product_category =='' || product_name =='' || product_details =='' || product_price =='' || product_status =='' || product_image =='')
 {
  
  if(product_category =='')
  {
    //username = document.getElementById("error_username").style.display="inline";
    //alert("Please enter your name")
    $("#error_product_category").show();
  }

  if(product_name =='')
  {
    //username = document.getElementById("error_username").style.display="inline";
    //alert("Please enter your name")
    $("#error_product_name").show();
  }

  if(product_details =='')
  {
    //password = document.getElementById("error_password").style.display="inline";
    //alert("Please enter your password")
    $("#error_product_details").show();
  }

  if(product_price =='')
  {
    //phone = document.getElementById("error_phone").style.display="inline";
    //alert("Please enter your phone")
    $("#error_product_price").show();
  }


  if(product_status =='')
  {
    //phone = document.getElementById("error_phone").style.display="inline";
    //alert("Please enter your phone")
    $("#error_product_status").show();
  }

  
  if(product_image =='')
  {
    //phone = document.getElementById("error_phone").style.display="inline";
    //alert("Please enter your phone")
    $("#error_product_image").show();
  }


  return false;
 }
 else
 {  

  $("#error_product_name").show();
  return true;
 }

 }
 </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
