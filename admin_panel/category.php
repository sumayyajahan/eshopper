<?php 
session_start();
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
        <div class="col-6">
          <h1>Category Form</h1>
          <form action="category_submit.php" method="post" onsubmit="return validateform()">

          <input type="hidden" name="id" value="0">
          
          <div class="form-group">
            <label for="category_name">category name</label>
            <input class="form-control" id="category_name" name="category_name" type="text"placeholder="Enter category name">
            <div id="error_category_name" style="color: #F00; display: none">Please enter your category name</div><br/>

          </div>

          <div class="form-group">
            <label for="category_details">category details</label>
            <input class="form-control" id="category_details" name="category_details" type="text"placeholder="Enter category details">
            <div id="error_category_details" style="color: #F00; display: none">Please enter your category name</div><br/><br/>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>
          
          
        </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        function hide_me(id)
        {
          var val = document.getElementById(id).value;
          //alert(id)
          var error_id="error_"+id;
          if(val=="")
          {
            document.getElementById(error_id).style.display="inline";
          }
          else
          {
            document.getElementById(error_id).style.display="none";
          }
        }
        function validateform()
       {
       var category_name = document.getElementById("category_name").value;
       var category_details = document.getElementById("category_details").value;
       

       if(category_name =='' || category_details =='')
       {
        if(category_name =='')
        {
          category_name = document.getElementById("error_category_name").style.display="inline";
          //alert("Please enter your name")
        }
        if(category_details =='')
        {
          category_details = document.getElementById("error_category_details").style.display="inline";
          //alert("Please enter your password")
        }
        
        return false;
       }
       else
       {  
        document.getElementById("error_category_name").show();
        return true;
       }

       }
    </script>
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
</body>

</html>
