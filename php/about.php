<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="../style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<title>About | La Heri Foods</title>
	<style>
		h1 {
		    font-size: 1rem;
		    color: white;
		    text-transform: uppercase;
		    letter-spacing: 3px;
		    
		    position: absolute;
		    bottom: 0;
		    left: 0;
		    margin-left: -30px;
		    
		    @include transform(rotate(270deg));
		    @include transform-origin(0 0);
  }
	</style> 
	</head>
	<body>
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
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h1 style="text-align: center; font-family: 'Satisfy', sans-serif;">Our Story</h1>
			</div>
		</div>
	</div>

<!--why our products-->
	<div class="container text-center">
		<div class="row">
			<div class="col-4">
				<h2>WHY LA HERI</h2>
				<hr style="height: 20px;">
			</div>
			<div class="col-4"></div>
			<div class="col-4"></div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-4 why" id="why_us">
				<img style="width: 30%; margin: 20%;" class="img-fluid" src="../img/harvest.png" alt="">
				<h6 style="font-weight: bold;">FRESH PRODUCE</h6>
				<p>	We use fresh fruits and vegetables from our local Kenyan farmers.</p>
			</div>

			<div class="col-4"id="why_us">
				<img style="width: 30%; margin: 20%;" class="img-fluid" src="../img/preserve.png" alt="">
				<h6 style="font-weight: bold;">NATURAL PRESERVATIVES</h6>
				<p> We apply organic principles of food processing and preservation</p>
			</div>

			<div class="col-4"id="why_us">
				<img style="width: 30%; margin: 20%;" class="img-fluid" src="../img/nutrition.png" alt="">
				<h6 style="font-weight: bold;">CREDIBLE EXPERTISE</h6>
				<p>We are experts in food science and human nutrition</p>
			</div>
	<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
			<p style=" margin: 60px; font-size: 30px;">LA HERI FOODS is a Nairobi based food processing company that specializes in transforming fruits and vegetables to delish snacks, sides and spreads <br> for you.</p>

				<hr style="width: 200px; border-color: black;">	

				<p style="font-size: 16px; margin: 60px; text-transform: uppercase;" >Our natural food processing and preservation techniques ensure our clients consume <br> healthy premium and organic products. </p>

				<a href="#product-link" style="color:black; text-decoration: none;">
					<h3 style="font-weight: bold; margin: 80px; font-family: 'Satisfy', sans-serif;">Try Something Tasty Today <i class="fa fa-arrow-right"></i></h3>
				</a>
		</div>
	</div>
<!-- end of why us -->

	
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

	<!--PRODUCTS-->
<!--1.CHUTNEY-->
	<div class="container"  data-aos= "fade-down" data-aos-delay="1000" id="product">
		<div class="row">
			<div class="col-6">
				<img class="img-fluid" data-aos= "fade-left" data-aos-delay="1000" src="../img/jamming.jpg" alt="Me">
			</div>

			<div class="col-6" id="product-link">
				<div class="card-body border-left" id="card" >
					 <p class="card-title" > 

			    		<h3>CHUTNEY</h3>

			   
						<h6 style="font-style: italic;">/chatni/</h6> <br>
						Noun <br><br>
						
						Our sweet and savory, spicy condiment made of fresh fruits and and green peppers that is best enjoyed cold with roast meats like Nyama Choma and finger foods like fries. <br> <br>

						synonyms: our bestseller, sweet and fiery
					</p>	
					
					<a href="shop.php">
						<button class="btn btn-warning text-white">BUY</button>
					</a>
				   
				</div>
			</div>
		</div>		
	</div>		

<!--2.JAM-->
	<div class="container"  data-aos= "fade-down" data-aos-delay="1000" id="product" id="section3">
		<div class="row">
			<div class="col-6">
				<div class="card-body border-left" id="card">
					<p>
						<h3> JAM </h3> 

						<h6 style="font-style: italic;">/dʒam/</h6> <br>
						Noun <br><br>
						
						Our sweet breadspread made from fresh fruits and sugar

						<br><br>

						synonym: tastes-like-the-actual-fruit
					</p>

					<a href="shop.php">
						<button class="btn btn-warning text-white">BUY</button>
					</a>
				   
				</div>
			</div>

			<div class="col-6">
				<img class="img-fluid" data-aos= "fade-left" data-aos-delay="1000" src="../img/jamming.jpg" alt="Me">
			</div>
		</div>		
	</div>

<!--3.CHILLI-->
	<div class="container"  data-aos= "fade-down" data-aos-delay="1000" id="product" style="margin-bottom: 200px;">
		<div class="row">
			<div class="col-6">
				<img class="img-fluid" data-aos= "fade-left" data-aos-delay="1000" src="../img/jamming.jpg" alt="Me">
			</div>

			<div class="col-6">
				<div class="card-body border-left" id="card" >
					 <p class="card-title" > 

			    		<h3>CHILLI</h3>

			   
						<h6 style="font-style: italic;">/chili/</h6> <br>
						Noun <br><br>
						
						Our spicy, hot and flavor packed sauce

						<br><br>

						synonyms: I-cannot-feel-my-tastebuds <br>
					</p>	
					
					<a href="shop.php">
						<button class="btn btn-warning text-white">BUY</button>
					</a>

  				</div>
			</div>
		</div>		
	</div>		

<!--Reviews-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>

	  <div class="carousel-inner">
	    <div class="carousel-item active" style=" background: linear-gradient(rgba(257,193,2, 0.9), rgba(257,193,2,0.9)), url('../img/soda.jpg') no-repeat fixed center">
	    	<div>
	    		<i style="font-size: 60px; color: black; position: absolute; margin-top: -100px; margin-left: -500px; " class="fa fa-quote-left"></i>
	    		<h5>REVIEWS</h5>
	    		<h3>I love sweet and savoury dishes so  mango chutney is my favorite. I particularly enjoy it as a light snack.</h3>
	     		<p>Wangeci Mwangi</p>
	     		<p style="margin-top: 110px; margin-left: 500px; font-size: 80px; color: white;">you said</p>	
	    	</div>
	    </div>

	    <div class="carousel-item" style=" background: linear-gradient(rgba(257,193,2, 0.9), rgba(257,193,2,0.9)), url('../img/soda.jpg') no-repeat fixed center">
	    	<div>
	      		<i style="font-size: 60px; color: black; position: absolute; margin-top: -100px; margin-left: -500px; " class="fa fa-quote-left"></i>
	    		<h6>REVIEWS</h6>
	    		<h1>The chilli ages with time and I love that rich taste!</h1>
	     		<p>Njeri Wambui</p>	
	    	</div>
	    </div>

	    <div class="carousel-item" style=" background: linear-gradient(rgba(257,193,2, 0.9), rgba(257,193,2,0.9)), url('../img/soda.jpg') no-repeat fixed center">
	      	<div>
	      		<i style="font-size: 60px; color: black; position: absolute; margin-top: -100px;	 margin-left: -500px; " class="fa fa-quote-left"></i>
	    		<h6>REVIEWS</h6>
	    		<h1>I'm a sucker for mangoes! And their mango jam tastes just like the actual fruit.</h1>
	     		<p>Muchura Mwangi</p>	
	    	</div>
	    </div>
	  </div>

	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>


	<!--contact-->
	<div class="container text-center">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<p style="font-family: 'Satisfy', sans-serif; margin-top: 30px; font-size: 25px;">Want Some?</p>
				<h3 >Your favourite food condiment is simply a click away.</h3>
				<img class="img-fluid" style="margin: 30px;" height="50" width="50" src="../img/pineapple.png" alt="">
				<p style="font-size: 18px; margin-bottom: 30px;">We have something for the sweet-tooth and spice-lover <br> in you!</p>

				

				<a href="shop.php">
					<button type="button" class="btn btn-danger text-white">SHOP LA HERI</button>
				</a>
`			</div>	
			<div class="col-2"></div>	
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