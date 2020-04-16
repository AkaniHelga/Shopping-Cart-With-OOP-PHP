<?php 

	function component($name, $price,$img, $product_id){
		$element = '
		
		<div class="col-md-3 sm-6 my-md-0">
			<form action="cart.php" method="post">
				<div class="card shadow">
					<div>
						<img src='.$img.'  alt="" class="img-fluid">				<!--$img-->
					</div>
					<div class="card-body">
						<h5 class="card-title"> ' . $name . '</h5> 						<!--$name-->
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="icon-star-empty"></i>
					</div>
					
							
					<small><s>Kshs 500</s></small>
					<span class="price">Kshs ' .$price. '</span>  							<!--$price-->
					
					<div>
						<button type="submit" class="btn btn-secondary btn-sm" name="add">
						<i class="fa fa-shopping-cart"></i>
						</button>

						<button type="button" class="btn btn-warning btn-sm">
							<i class="fa fa-trash"></i>
						</button>
					</div>
					
					<input type="hidden" name="product_id" value='. $product_id. '>
				</div>
			</form>
		</div>
	';
	// print_r($img);
	echo $element;
	}

function cartElement($img, $name, $price, $product_id){
	$element = '

		<form action="cart.php?action=remove&id= '.$product_id.' " method="post" class="cart-items">
			<div class="container" style="margin-bottom:60px;">
				<div class="row">
					<div class="col-4">
						<img style="margin-left: -30px;"  src=' . $img .' alt=" Mango Jam" class="img-fluid">
					</div>

					<div class="col-2">
						<h6 style="margin-top: 30px; margin-left: 30px;">' . $name . '</h6>
					</div>	

					<div class="col-2">
						<h6 style="margin-top: 30px; margin-left: 200px;"> ' . $price . '</h6>
					</div>	

					<div class = "col-2"></div>
					<div class = "col-1"><i style="margin-left: 480px; margin-top: 30px;" class="fa fa-times"></i></div>
					<div class="col-3"></div>
				</div>
			</div>
		</form>';
	echo $element;
}


 ?>