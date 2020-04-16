<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"> <-->
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="../style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<title>Products | La Heri Foods</title>
</head>
<body>

<!-- SECTION 1: CHUTNEYS -->
<section id="section1">
	<nav class="nav navbar-default navbar-bg-dark navbar-fixed-top justify-content-between" id="navbar">
		<!--navigation icons-->
		<div>
			<a href="index.php">
				<img src="../img/laheri.png" alt="" class="img-fluid" style=" margin-top: 10px; margin-left	: 20px;  width: 130px; border-radius: 10%;">
			</a>

			<a href="search.php">
				<i  style="font-size: 20px; color: white; padding: 15px;" class="fa fa-search"></i>
			</a>

			<a href="login.php">
				<i style="font-size: 20px; color: white; padding: 15px;" class="fa fa-user"></i>
			</a>

			<a href="cart.php">
				<i style="font-size: 20px; color: white; padding: 15px;"  class="fa fa-shopping-cart"></i>
			</a>								
		</div>

		<!-- burger menu -->
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

		<span style="margin-top: 50px; font-size:30px; color: #fff; margin-left: 5%; cursor:pointer" onclick="openNav()">&#9776;</span>			
	</nav>

	<!-- short bio -->
	<div class="container">
		<div class="row">
			<div class="col-3" id="bio">
				<p>
					<s>KILA</s>
					LA HERI FOODS is a Nairobi based food processing company that specializes in transforming fruits and vegetables to delish snacks, sides and spreads for you.
				</p>
			</div>

			<div class="col-6 text-center" id="name">
				<h1>Chutneys</h1>					<!-- product title -->
				
				<a href="" style="color: white;">	
					<h6><u>KNOW MORE</u></h6>
				</a>

				<a href="#section2" id="sectionlink" class="animated fadeInDown" style="color: white;">
					<span></span>
				</a>
			</div>
			
			<!-- vertical submenu with link with progress indicator on scroll -->
			<div class="col-3">
				<div class="container">
					<div class="scrollbar"></div>
				</div>

				<nav class="navbar navbar-static-top">
					<ul>
					  <li><a href="#section1">Chutneys</a></li>
					  <li><a href="#section2">Jams</a></li>
					  <li><a href="#section3">Chilli</a></li>
					</ul>
	    		</nav>
			</div>
		</div>
	</div>

	<!--sidenav-->
	<script>
		function openNav() {
		document.getElementById("mySidenav").style.width = "300px";
		}

		function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		}	
	</script>
</section>

<!--SECTION 2: JAMS-->
<section id="section2">
	<div class="container justify-content-center text-center">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4" id="sectionname">
				<h1>Jams</h1>					<!-- product title -->
				
				<a href="" style="color: white;">	
					<h6><u>KNOW MORE</u></h6>
				</a>

			</div>
			<div class="col-4"></div>
				
			</div>
	</div>
</section>

<section id="section3">
	<div class="container justify-content-center text-center">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4" id="sectionname">
				<h1>Chilli</h1>					<!-- product title -->
				
				<a href="" style="color: white;">	
					<h6><u>KNOW MORE</u></h6>
				</a>

			</div>
			<div class="col-4"></div>	
		</div>
	</div>
</section>

<!-- FOOTER -->
 <div class="footer-transparent">
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
	



<!--change burgermenu to fixed nav-->
<script type="javascript" src="../index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>
</html>