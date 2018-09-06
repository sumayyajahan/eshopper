<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-1">
					<div class="login-form"><!--login form-->

				   <h2>Login to your account</h2>

				<form name="myForm" action="login_submit.php" onsubmit="return validateform()" method="post">

			    <input type="text" name="username" id="username" placeholder="User Name" onkeyup="hide_me(this.id)"/>
                <div id="error_username" style="color: #F00; display: none">Please enter your username</div><br/><br/>
					  
				<input type="password" name="password" id="password" placeholder="Password" onkeyup="hide_me(this.id)"/>
				<div id="error_password" style="color: #F00; display: none">Please enter your password</div><br/><br/>
				<span>
					<input type="checkbox" class="checkbox"> 
					Keep me signed in
				</span>
				<button type="submit" class="btn btn-default">Login</button>
				

				</form>

                <script type="text/javascript">


			      function hide_me(id)
			      {
			        var val =document.getElementById(id).value;

			        var error_id = "error_"+id;

			        //alert(error_id);

			        if(val =='')
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
			          //var phone = document.getElementById("phone").value;

			          if(username =='' || password =='')
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

			            /*if(phone =='')
			            {
			              //alert("Please enter your phone");
			              document.getElementById("error_phone").style.display ="inline";
			            }*/

			          return false;
			          }
			          else
			          {
			            //alert("IN")
			            document.getElementById("error_username").show();
			            return true;
			          }


			        }

			      </script>


					</div><!--/login form-->
				</div>
				<!-- <div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<!-- <h2>New User Signup!</h2>
						<form action="#">
							<input type="text" name="name" id="name" placeholder="Name"/>
							<input type="email" name="email" id="email" placeholder="Email Address"/>
							<input type="password" name="password" id="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form--> 
				</div> 
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php include('footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>