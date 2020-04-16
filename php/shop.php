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
				echo "<script>window.location = 'cart.php'</script>";
			}else{
				count($_SESSION['cart']);   //returns number of elements in an array. or number of items added to cart
				$item_array = array('product_id' => $_POST['product_id']);

				$_SESSION['cart']['$count'] = $item_array;
				// print_r($_SESSION['cart']);
			}

		}else{

			$item_array = array('product_id' => $_POST['product_id']);

			//create new session variable
			$_SESSION['cart'][0] = $item_array;
			// print_r($_SESSION['cart']);
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
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

	<title>Shop | La Heri Foods</title>
</head>
<body>
	<?php 
	// require_once ('header.php');

	?>

	<header>
		<nav class="nav navbar-default navbar-bg-dark navbar-fixed-top justify-content-between" id="navbar">
			<div id="mySidenav" class="sidenav">
		  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="index.php" class="nav-link">Products</a>
				<a href="shop.php" class="nav-link">Shop</a>
				<a href="about.php" class="nav-link">About</a>
				<a href="contact.php" class="nav-link">Contact</a>

				<div style="margin-top: 20px;">
					<div class="row">
						<a href="" style="text-align: center; font-size: 20px; margin: 15px;">
							<i class="fa fa-facebook-square"></i>
						</a>
						<a href="" style="text-align: center; font-size: 20px; margin: 15px;">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="" style="text-align: center; font-size: 20px; margin: 15px;">
							<i class="fa fa-envelope"></i>
						</a>
						<!-- <a href="" style="text-align: center; font-size: 20px; margin-top: 30px; margin-left: 5px;">
							<i class="fa fa-whatsapp"></i>
						</a> -->
					</div>
				</div>
			</div>

			<span style="margin-top: 50px; font-size:30px; color: #000; margin-left: 5%; cursor:pointer" onclick="openNav()">&#9776;</span>	

			<!--navigation icons-->
			<div>
				<a href="search.php">
					<i  style="font-size: 20px; color: black; padding: 15px;" class="fa fa-search"></i>
				</a>

				<a href="login.php">
					<i style="font-size: 20px; color: black; padding: 15px;" class="fa fa-user"></i>
				</a>

				<a href="cart.php">
					<i style="font-size: 20px; color: black; padding: 15px;"  class="fa fa-shopping-cart"></i>
				</a>

				<a href="index.php">
					<img src="../img/laheri.png" alt="" class="img-fluid" style=" margin-top: 10px; margin-right: 20px;  width: 130px; border-radius: 10%;">
				</a>				
			</div>		
		</nav>

		<!--sidenav-->
		<script>
			function openNav() {
	      document.getElementById("mySidenav").style.width = "300px";
	    }

	    function closeNav() {
	      document.getElementById("mySidenav").style.width = "0";
	    }	
		</script> 
	</header>

	<div class="container">
		<div class="row text-center py-5">

			<div class="container text-center">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<h2 style="font-family: 'Satisfy', sans-serif; margin: 100px;">All Products</h2>
					</div>
					<div class="col-4"></div>
				</div>
			</div>


			<?php 

			$result = $db->getData();  		//$result is equal to the instantiation of createdb file
				while ($row = mysqli_fetch_assoc($result)){
					component($row['name'], $row['price'], $row['img'], $row['id']);
				}
			
			?>

			
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
          <i class="fa fa-instagram" style="color: #A9A9A9; font-size: 20px; padding: 15px; margin-top: 40px;"></i>
        </a>
        
        <!--Twitter-->
        <a href="">
          <i class="fa fa-facebook" style="color: #A9A9A9; font-size: 20px; padding: 15px; margin-top: 40px;"></i>     
        </a>
        
        <!--Github-->
        <a href="mailto:laherifoods@gmail.com">
          <i class="fa fa-envelope" style="color: #A9A9A9; font-size: 20px; padding: 15px; margin-top: 40px; "></i>
        </a>
 
      </div>

      <div class="col-4">
      	 <h6 class=" text-right small text-secondary" style="padding: 15px; margin-top: 40px;">LA HERI FOODS & BEVERAGES, ©2020 </h6>
      </div>

      
      <div class="col-4">
        <h6 class=" text-right small text-secondary" style="padding: 15px; margin-top: 40px;"> BY NOTSOCHUNKYMUNKY </h6>
      </div>
    </div>
    </div>
  </div>
<!-- end of footer -->
</body>
</html>