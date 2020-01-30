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
	<title>Header</title>
	</head>
<body>

<header>
	<nav class= "navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="index.php" class="navbar-brand">
			<h5 class="px-5">
				<i class="fa fa-shopping-cart"></i>
				Shopping cart
			</h5>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
			aria-controls="navbarNavAltMarkup" aria-expanded = "false" arialabel = "toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class= "collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="mr-auto"></div>
			<div class="navbar-nav">
				<a href="cart.php" class="nav-item nav-link active">
					<h5 class="px-5 cart">
						<i class="fa fa-shopping-cart"></i>
						Cart
						<?php
							if (isset($_SESSION['cart'])) {
							 	$count = count($_SESSION['cart']);
							 	// print_r($count);
							 	echo '<span id="cart-count" class="text-warning bg-light">'.$count.'</span>';
							 }else{
							 	echo '<span id="cart-count" class="text-warning bg-light">0</span>';
							 }

						?>

					</h5>
				</a>
			</div>
		</div>
		
	</nav>
</header>
</body>
</html>