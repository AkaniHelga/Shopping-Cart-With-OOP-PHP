<?php

session_start();

require_once ('db.php');
require_once ('component.php');

$db = new CreateDb(); //instantiate the createdb class in db.php
if (isset($_POST['remove'])) {
	print_r($_GET['id']);
}
?>



<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="../style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<title>Your Shopping Cart | La Heri Foods</title>
	</head>
<body>
	
	<!--header fxn-->
	<?php
	require_once ('header.php');

	?>

	<br><br>
	<h2 class="bg-warning border text-white text-center" style="font-family: 'Satisfy', sans-serif; padding: 5px; margin-bottom: 50px;">My Cart</h2>

	<div class="container">
		<div class="row">
			<div class="col-4">	Product	</div>

			<div class="col-2">Price(Kshs)</div>

			<div class="col-2">Qty</div>
			<div class="col-2">Remove</div>
			<div class="col-2">Price</div>
		</div>
	</div>

	<hr>
	
	<div class="container justify-content-center">
		<div class="row">
			<div class="col-4">
				<!--html output for the cart using a function-->
				<?php 
					$total = 0;  //variable that assigns a value to total cost of product


					if (isset($_SESSION['cart'])) {
						$product_id = array_column($_SESSION['cart'], 'product_id');

						$result = $db->getData();
						
						while($row = mysqli_fetch_assoc($result)){
							foreach ($product_id as $id) {
								if ($row['id'] == $id) {
									cartElement($row['img'], $row['name'], $row['price'], $row['id']);
									$total = $total + (int)$row['price'];
								}
							}
						}
					}else{
						echo '<h5>Cart is empty</h5>';

					}
				?>
			</div>
			<div class="col-2"></div>
			<div class="col-2">
				<?php
					if (isset($_SESSION['cart'])) {
						$count = count($_SESSION['cart']);
						echo '<h6>'.$count.'</h6>';
					}else{
						echo '<h6>0</h6>';
					}
				?>

			</div>
			<div class="col-2"></div>
			<div class="col-2"><h6>Kshs		<?php echo $total;?></h6></div>
		</div>
	</div>

	<hr>
	<div class="container">
		<div class="row">
			<div class="col-4">

				<a href="shop.php" style="color: black;">Continue Shopping</a>
			</div>

			<div class="col-2"></div>
			<div class="col-2"></div>
			<div class="col-2"></div>
			<div class="col-2">
				
				<h6>TOTAL: Kshs		<?php echo $total;?>		</h6>

				<br>
				<button id="cartbtn" class="btn btn-link text-white">Update Cart </button>
				<br><br>
				<button id="cartbtn" class="btn btn-link text-white">Checkout </button>
			</div>
		</div>
	</div>


	<!-- FOOTER -->
	 <div class="footer">
	    <div class="container justify-content-between">
		    <div class="row">
			      <div class="col-4 text-left small text-secondary" >
			       FIND US ON
			        <!--Bitbucket-->
			        <a href="https://www.instagram.com/laherifoods/">
			          <i class="fa fa-instagram" style="color: #A9A9A9; font-size: 20px; padding: 15px; margin-top: 20px;"></i>
			        </a>
			        
			        <!--Twitter-->
			        <a href="">
			          <i class="fa fa-facebook" style="color: #A9A9A9; font-size: 20px; padding: 15px; margin-top: 20px;"></i>     
			        </a>
			        
			        <!--Github-->
			        <a href="mailto:laherifoods@gmail.com">
			          <i class="fa fa-envelope" style="color: #A9A9A9; font-size: 20px; padding: 15px; margin-top: 20px; "></i>
			        </a>
			 
			      </div>

			      <div class="col-4">
			      	 <h6 class=" text-right small text-secondary" style="padding: 15px; margin-top: 20px;">LA HERI FOODS & BEVERAGES, ©2020 </h6>
			      </div>

			      
			      <div class="col-4">
			        <h6 class=" text-right small text-secondary" style="padding: 15px; margin-top: 20px;"> BY NOTSOCHUNKYMUNKY </h6>
			      </div>
	    	</div>
	    </div>
	</div>
	<!-- end of footer -->

</body>
</html>