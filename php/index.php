<?php 
	
	session_start();

	require_once ('db.php');
	require_once ('component.php');


	$db = new CreateDb(); //instantiate the createdb class in db.php

	if (isset($_POST["add"])) {
		// print_r($_POST["product_id"]);
		if(isset($_SESSION['cart'])){

			$item_array_id = array_column($_SESSION['cart'], 'product_id');
			// print_r($item_array_id);
			// print_r($_SESSION['cart']);

			if (in_array($_POST['product_id'], $item_array_id)) {
				echo "<script>alert ('Product is already added in the cart')</script>"; 
				echo "<script>window.location = 'index.php'</script>";
			}else{
				count($_SESSION['cart']);   //returns number of elements in an array. or number of items added to cart
				$item_array = array('product_id' => $_POST['product_id']);

				$_SESSION['cart']['$count'] = $item_array;
				print_r($_SESSION['cart']);
			}

		}else{

			$item_array = array('product_id' => $_POST['product_id']);

			//create new session variable
			$_SESSION['cart'][0] = $item_array;
			print_r($_SESSION['cart']);
		}
	}

	// $database = new CreateDb($dbname = "heri", $tablename = "product");
	//you can instantiate this class by adding the values to your parameters here as well
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

	<title>Shopping Cart</title>
</head>
<body>
	<?php 
	require_once ('header.php');

	?>
	<div class="container">
		<div class="row text-center py-5">
			<?php 

			$result = $db->getData();  		//$result is equal to the instantiation of createdb file
				while ($row = mysqli_fetch_assoc($result)){
					component($row['name'], $row['price'], $row['img'], $row['id']);
				}

			// component($name = "Strawberry Jam", $price = 400, $img = "..img/jam.jpg");
			
			?>

			<!-- <div class="col-md-3 sm-6 my-md-0">
				<form action="index.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/jam.jpg" alt="" class="img-fluid">
						</div>
						<div class="card-body">
							<h3 class="card-title">STRAWBERRY JAM</h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="icon-star-empty"></i>
						</div>
						
						Have our delish bread and pastry spreads
						<small><s>Kshs250</s></small>
						<span class="price">Kshs 200</span>
						<button type="submit" class="btn btn-secondary" name="add">
							Add to cart
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div>
				</form>
			</div>

			<div class="col-md-3 sm-6 my-md-0">
				<form action="index.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/chilli.jpg" alt="" class="img-fluid">
						</div>
						<div class="card-body">
							<h3 class="card-title">CHILLI</h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						\
						Try some yummy mango chutney with your roasted beef
						<small><s>Kshs230</s></small>
						<span class="price" >Kshs 180</span>
						<button type="submit" class="btn btn-secondary" name="add">
							Add to cart
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div>
				</form>
			</div>

			<div class="col-md-3 sm-6 my-md-0">
				<form action="index.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/chutney.webp" alt="" class="img-fluid">
						</div>
						<div class="card-body">
							<h3 class="card-title">CHUTNEY</h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>

						Try some yummy mango chutney with your roasted beef
						<small><s>Kshs400</s></small>
						<span class="price" >Kshs 300</span>
						<button class="btn btn-secondary my-3" type="submit" name="add">
							Add to cart
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div>
				</form>
			</div>

			<div class="col-md-3 sm-6 my-md-0">
				<form action="index.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/yogurt.jpg" alt="" class="img-fluid">
						</div>
						<div class="card-body">
							<h3 class="card-title">YOGURT</h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
						Try our plain yogurt for curries
						<small><s>Kshs200</s></small>
						<span class="price" >Kshs 150 per litre</span>
						<button type="submit" class="btn btn-secondary" name="add">
							Add to cart
							<i class="fa fa-shopping-cart"></i>
						</button>
					</div>
				</form>
			</div> -->
			
		</div>
	</div>
</body>
</html>