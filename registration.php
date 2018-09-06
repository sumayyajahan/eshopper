<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
  
  <?php include('header.php'); ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-offset-3"></div>

        <div class="col-lg-9">

          

          <div class="card card-outline-secondary my-4">
<div class="card-header text-center">
Registraion Form
</div>
<div class="card-body">
      <form action="registration_submit.php" onsubmit="return validateform()" method="get" enctype="multipart/form-data">
        <div class="form-group">

        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" onkeyup="hide_me(this.id)">
        <div id="error_username" style="color: #F00; display: none">Please enter your username</div><br/><br/>

        </div>
        <div class="form-group">

        <label for="password">Password</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Password" onkeyup="hide_me(this.id)">
        <div id="error_password" style="color: #F00; display: none">Please enter your password</div><br/><br/>

        </div>

         <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name"  name="first_name" placeholder="First name" onkeyup="hide_me(this.id)">
          <div id="error_first_name" style="color: #F00; display: none" >Please enter your First name</div><br/><br/>

        </div>

         <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name"  name="last_name" placeholder="Last name" onkeyup="hide_me(this.id)">
          <div id="error_last_name" style="color: #F00; display: none" >Please enter your Last name</div><br/><br/>

        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" onkeyup="hide_me(this.id)">
            <div id="error_email" style="color: #F00; display: none" >Please enter your Email</div><br/><br/>

        </div>

      <div class="form-group">
          <label for="myfile">Profile picture</label>
          <input type="file" class="form-control" id="myfile" name="myfile" placeholder="Profile picture" onkeyup="hide_me(this.id)">
          <div id="error_myfile" style="color: #F00; display: none" >Please enter your Profile picture</div><br/><br/>


      </div>


    <button type="submit" class="btn btn-primary">Register</button>
  </form>

  <script type="text/javascript">


            function hide_me(id)
            {
              var val =document.getElementById(id).value;

              var error_id = "error_"+id;

              //alert(error_id);

              if(val == "")
              {
                document.getElementById(error_id).style.display = "inline";
              }
              else
              {
                document.getElementById(error_id).style.display = "none";
              }

              //alert(id);
            }
              
              function validateform()
              {
            
            
            
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var first_name = document.getElementById("first_name").value;
                var last_name = document.getElementById("last_name").value;
                var email= document.getElementById("email").value;
                var myfile = document.getElementById("myfile").value;

                if(username =='' || password =='' || first_name =='' || last_name =='' || email =='' || myfile =='')
                {

                  if(username =='')
                  {
                    //alert("Please enter your username");
                    document.getElementById("error_username").style.display ="inline";
                  }

                  if(password =='')
                  {
                    //alert("Please enter your password");
                    document.getElementById("error_password").style.display ="inline";
                  }

                  if(first_name =='')
                  {
                    //alert("Please enter your phone");
                    document.getElementById("error_first_name").style.display ="inline";
                  }

                  if(last_name =='')
                  {
                    //alert("Please enter your phone");
                    document.getElementById("error_last_name").style.display ="inline";
                  }

                  if(email =='')
                  {
                    //alert("Please enter your phone");
                    document.getElementById("error_email").style.display ="inline";
                  }

                  if(myfile =='')
                  {
                    //alert("Please enter your phone");
                    document.getElementById("error_myfile").style.display ="inline";
                  }

                return false;
                }
                else
                {
                  //alert("IN")
                  document.getElementById("error_email").show();
                  return true;
                }


              }

            </script>


              </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
