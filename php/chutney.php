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

	<title>Chutneys | La Heri Foods</title>
	<style>
.section {
  font-size: 16px;
  line-height: 5;
 
}
.container{
margin-top: 120px;
}

.container img{
	margin: 30px;
}

.product h1{
	font-family: 'Satisfy', sans-serif;
	text-align: center;
	margin-bottom: 100px;
	/*color: #FFBF00;*/
}

#timeline {
  display: flex;
  background-color: #000;
}
#timeline:hover .tl-item {
  width: 26%;
}

.tl-item {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  position: relative;
  width: 25%;
  height: 50vh;
  min-height: 650px;
  color: #fff;
  overflow: hidden;					
  transition: width 0.5s ease;
}
.tl-item:before, .tl-item:after {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.tl-item:after {
  background: rgba(0, 0, 0, 0.5);
  opacity: 1;
  transition: opacity 0.5s ease;
}
.tl-item:before {
  /*background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, black 75%);*/
  z-index: 1;
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0) translateY(50%);
          transform: translate3d(0, 0, 0) translateY(50%);
  transition: opacity 0.5s ease, -webkit-transform 0.5s ease;
  transition: opacity 0.5s ease, transform 0.5s ease;
  transition: opacity 0.5s ease, transform 0.5s ease, -webkit-transform 0.5s ease;
}
.tl-item:hover {
  width: 25% !important;
}
.tl-item:hover:after {
  opacity: 0;
}
.tl-item:hover:before {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0) translateY(0);
          transform: translate3d(0, 0, 0) translateY(0);
  transition: opacity 1s ease, -webkit-transform 1s ease 0.25s;
  transition: opacity 1s ease, transform 1s ease 0.25s;
  transition: opacity 1s ease, transform 1s ease 0.25s, -webkit-transform 1s ease 0.25s;
}
.tl-item:hover .tl-content {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  transition: all 0.75s ease 0.5s;
}
.tl-item:hover .tl-bg {
  -webkit-filter: grayscale(0);
          filter: grayscale(0);
}

.tl-content {
  -webkit-transform: translate3d(0, 0, 0) translateY(25px);
          transform: translate3d(0, 0, 0) translateY(25px);
  position: relative;
  z-index: 1;
  text-align: center;
  margin: 0 1.618em;
  top: 55%;
  opacity: 0;
}
.tl-content h1 {
  text-transform: uppercase;
  color: #fff;
  font-size: 1.44rem;
  font-weight: normal;
}
.tl-content p{
  	line-height: 20px;
} 

.product {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  z-index: 1;
  border-top: 1px solid #fff;
/*  border-bottom: 1px solid #fff;
*/}
.tl-year p {
  font-size: 1.728rem;
  line-height: 0;
}

.tl-bg {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
  transition: -webkit-filter 0.5s ease;
  transition: filter 0.5s ease;
  transition: filter 0.5s ease, -webkit-filter 0.5s ease;
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
}

.section2{
	  background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
              url("img/strawberry.jpeg") no-repeat fixed center;
	
}
.carousel-item{
	background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
              url('../img/tomatoes.jpg') no-repeat fixed center;
}

.carousel i{
	font-size: 60px;
	color: white; 
	position: absolute; 
	margin-top: -100px;
	margin-left: -500px;
}

</style>
</head>
<body>
	<section id="timeline" data-aos="fade-up" data-aos-delay="300">
	  	<div class="tl-item">
		    <div class="tl-bg" style="background-image: url(../img/mango.jpeg)"></div>
		    <div class="product">
		      <h1>Mango Chutney</h1>
		    </div>

		    <div class="tl-content">
		      <button type="button" class="btn btn-warning text-white">BUY</button>
		    </div>
	  	</div>

	  	<div class="tl-item">
		    <div class="tl-bg" style="background-image: url(../img/pineapples.jpeg)"></div>
		    <div class="product">
		      <h1>Pineapple Chutney</h1>
		    </div>

		    <div class="tl-content">
		       <button type="button" class="btn btn-warning text-white">BUY</button>
		    </div>
	  	</div>

	  	<div class="tl-item">
		    <div class="tl-bg" style="background-image: url(../img/mangoes.jpeg)"></div>
		    <div class="product">
		      <h1>Mango Jam</h1>
		    </div>

		    <div class="tl-content">
		      <button type="button" class="btn btn-warning text-white">BUY</button>
		    </div>
	  	</div>

	  	<div class="tl-item">			    
		    <div class="tl-bg" style="background-image: url(../img/strawberry.jpeg)"></div>    
		    <div class="product">
		      <h1>Strawberry Jam</h1>
		    </div>

		    <div class="tl-content">
		       <button type="button" class="btn btn-warning text-white">BUY</button>
		    </div>
	  	</div>

		<div class="tl-item">				    
		    <div class="tl-bg" style="background-image: url(../img/spicy.jpeg)"></div>
		    <div class="product">
		     	<h1>Chilli</h1>
		    </div>

		    <div class="tl-content">
		       <button type="button" class="btn btn-warning text-white">BUY</button>
		    </div>
	 	</div>
	</section>


	<!-- product description -->
	<div class="container justify-content-center text-center">
		<div class="row">
			<div class="col-4">
				<div class="card-body border-right text-right" id="card" >
					 <p class="card-title" > 

			    		<h3>CHUTNEY</h3>

						<h6 style="font-style: italic;">/chatni/</h6> <br>
						Noun <br><br>
						
						Our sweet and savory, spicy condiment made of fresh fruits and and green peppers that is best enjoyed cold with roast meats like <i>nyama choma</i> and finger foods like fries. <br> <br>

						synonymous with: our bestseller, sweet and fiery
					</p>				   
				</div>
			</div>
			<div class="col-4">
				<img class="img-fluid" src="../img/jam.jpg" alt="">
				<h6>MANGO CHUTNEY, 370g</h6>
				<a href="shop.php">
						<button class="btn btn-warning text-white">ADD TO CART</button>
					</a>
			</div>
			<div class="col-4">				
				<img class="img-fluid" src="../img/jam.jpg" alt="">
				<a href="shop.php">
						<button class="btn btn-warning text-white">ADD TO CART</button>
					</a>
			</div>	
		</div>
	</div>

	<div class="container justify-content-center text-center">
		<div class="row">
			<div class="col-4">
				<div class="card-body border-right text-right" id="card" >
					 <p class="card-title" > 

			    		<h3>JAM</h3>

						<h6 style="font-style: italic;">/dʒam/</h6> <br>
						Noun <br><br>
						
						Our sweet breadspread made from fresh fruits and sugar

						<br><br>

						synonymous with: tastes-like-the-actual-fruit
					</p>				   
				</div>
			</div>
			<div class="col-4">
				<img class="img-fluid" src="../img/jam.jpg" alt="">
				<h6>MANGO CHUTNEY, 370g</h6>
				<a href="shop.php">
						<button class="btn btn-warning text-white">ADD TO CART</button>
					</a>
			</div>
			<div class="col-4">				
				<img class="img-fluid" src="../img/jam.jpg" alt="">
				<a href="shop.php">
						<button class="btn btn-warning text-white">ADD TO CART</button>
					</a>
			</div>	
		</div>
	</div>

		<div class="container justify-content-center text-center">
		<div class="row">
			<div class="col-4">
				<div class="card-body border-right text-right" id="card" >
					 <p class="card-title" > 

			    		<h3>CHILLI</h3>

			   
						<h6 style="font-style: italic;">/chili/</h6> <br>
						Noun <br><br>
						
						Our spicy, hot and flavor packed sauce

						<br><br>

						synonymous with: I-cannot-feel-my-tastebuds <br>
					</p>	

  				</div>
			</div>

			<div class="col-4">
				<img class="img-fluid" src="../img/jam.jpg" alt="">
				<h6>MANGO CHUTNEY, 370g</h6>
				<a href="shop.php">
						<button class="btn btn-warning text-white">ADD TO CART</button>
					</a>
			</div>
			<div class="col-4">				
				<img class="img-fluid" src="../img/jam.jpg" alt="">
				<a href="shop.php">
						<button class="btn btn-warning text-white">ADD TO CART</button>
					</a>
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
	    <div class="carousel-item active">
	    	<div>
	    		<i class="fa fa-quote-left"></i>
	    		<h5>REVIEWS</h5>
	    		<h3>I love sweet and savoury dishes so  mango chutney is my favorite. I particularly enjoy it as a light snack.</h3>
	     		<p>Wangeci Mwangi</p>
	     		<p style="margin-top: 110px; margin-left: 500px; font-size: 80px; color: white;">you said</p>	
	    	</div>
	    </div>

	    <div class="carousel-item">
	    	<div>
	      		<i class="fa fa-quote-left"></i>
	    		<h6>REVIEWS</h6>
	    		<h1>The chilli ages with time and I love that rich taste!</h1>
	     		<p>Njeri Wambui</p>	
	    	</div>
	    </div>

	    <div class="carousel-item">
	      	<div>
	      		<i class="fa fa-quote-left"></i>
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

	<script>
		$('.carousel').carousel({
  			interval: 2000
		});
	</script>
</body>
</html>