<?php

session_start();

require_once ('db.php');
require_once ('component.php');

$db = new CreateDb(); //instantiate the createdb class in db.php
if (isset($_POST['remove'])) {
	print_r($_GET['product_id']);
}
?>



<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<title>My Cart</title>
	</head>
<body>
	
	<!--header fxn-->
	<?php
	require_once ('header.php');

	?>

	<br><br>
	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-md-7">
				<div class="shopping-cart">
					<h6>My Cart</h6>

					<hr>
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
			</div>
			<div class="col-md-4 offset-md-1 border-rounded mt-5 bg-white h-25">
				<div class="pt-4">
					<h5>Price Details</h5>

					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<?php
								if (isset($_SESSION['cart'])) {
									$count = count($_SESSION['cart']);
									echo '<h6>Price('.$count.' items)</h6>';
								}else{
									echo '<h6>Price(0 items)</h6>';
								}
							?>

							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable:</h6>
						</div>

						<div class="col-md-6">
							<h6>Kshs		<?php echo $total;?>		</h6>
	
							<h6 class="text-success">FREE in Nairobi CBD</h6>

							<hr>

							<h6>			<?php echo $total?>			</h6>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>