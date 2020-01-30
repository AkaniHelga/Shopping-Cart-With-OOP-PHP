<?php  

	function component() { ob_start(); ?>{

		<div class="col-md-3 sm-6 my-md-0">
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
<?php
    return ob_get_clean();
} 

echo component();
?>
