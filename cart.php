<?php 
session_start();
include("connect.php"); 
?>


<?php 

require_once("classes/dbcontroller.php");
$db_handle = new DBController();


if(isset($_POST['action'])){    
	$_SESSION['product'][] = array(
			'action' => $_POST['action'],
			'product_id' => $_POST['product_id'],
			'quantity' => $_POST['quantity']

			);

    unset($_POST['action']);
}

$productList = array();
$quantity = 0;
$productId = "";

if(isset($_SESSION['product'])){
    foreach ($_SESSION['product'] as $k => $v) {
		$productId = "product-".$v->product_id;
		if(!array_key_exists($productId, $productList)){
             array_push($productList, $productId);
		}
       
        $productList[$productId][]


    }
}

/**
Array
(
    [action] => add
    [product_id] => 28
    [quantity] => 45
)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			
			<div class="table-responsive cart_info">




			<?php

			if(!empty($_SESSION["shopping_cart"]))
			{

			$total = 0;

			foreach ($_SESSION["shopping_cart"] as $keys => $values) 
			{
				
			}

			/*$product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY id ASC");

			if (!empty($product_array)) { 

			foreach($product_array as $key=>$value){*/
            /*}*/
			?>

            <div class="txt-heading">Shopping Cart <a id="btnEmpty" href="cart_submit.php?action=empty">Empty Cart</a></div>

			<?php

	          if(isset($_SESSION["cart_item"])){
	              $item_total = 0;
	          ?>  

		   


				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

					<?php 


		          //print_r($_SESSION["cart_item"]);  
		              foreach ($_SESSION["cart_item"] as $item){
		              ?>
				 
					    <tr>
							<td class="cart_product">
								<a href=""><?php echo $item["product_image"]; ?></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $item["product_name"]; ?></a></h4>
								<p><?php echo $item["product_id"]; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo "$".$item["product_price"]; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $item["quantity"]; ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="cart_submit.php?action=remove&product_id=<?php echo $item["product_id"];?>">
								<i class="fa fa-times"></i></a>
							</td>
						</tr>
                        
                      <tr>
			          <td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
			          </tr>
						<?php
		                  $item_total += ($item["product_price"]*$item["quantity"]);
			              }
			              ?>

			              <?php
				          }
				          ?>

				          <?php
                           }
				          ?>
						<tr>

						
							<td class="cart_product">
								<a href=""><img src="<?php echo $product_array[$key]['product_image']; ?>" alt=""></a>
							</td>

						
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>

						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<?php include('footer.php'); ?>
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


</body>
</html>