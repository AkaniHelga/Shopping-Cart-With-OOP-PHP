<?php 

	function component($name, $price,$img, $product_id){
		$element = '

		<div class="col-md-3 sm-6 my-md-0">
			<form action="index.php" method="post">
				<div class="card shadow">
					<div>
						<img src='.$img.'  alt="" class="img-fluid">				<!--$img-->
					</div>
					<div class="card-body">
						<h3 class="card-title"> ' . $name . '</h3> 						<!--$name-->
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="icon-star-empty"></i>
					</div>
					
					Have our delish bread and pastry spreads
					
					<small><s>Kshs 500</s></small>
					<span class="price">Kshs ' .$price. '</span>  							<!--$price-->
					
					<button type="submit" class="btn btn-secondary" name="add">
						Add to cart
						<i class="fa fa-shopping-cart"></i>
					</button>
					<input type="hidden" name="product_id" value='. $product_id. '>
				</div>);
			</form>
		</div>
	';
	// print_r($img);
	echo $element;
	}

function cartElement($img, $name, $price, $product_id){
	$element = '
		<form action="cart.php?action=remove$id= '.$product_id.' " method="post" class="cart-items">
			<div class="border-rounded">
				<div class="col-md-3">
					<img src=' . $img .' alt="" class="img-fluid">
				</div>
			</div>

			<div class="col-md-6">
				<h5 class="pt-2">' . $name . '</h5>
				<small class="text-secondary">Category: Fruit Preserves</small>
				<h5 class="pt-2">' . $price . '</h5>
				<button type="submit" class="btn btn-warning">Add to wishlist</button>
				<button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
			</div>	

			<div class="col-md-3">
				<div>
					<button type="button" class="btn bg-light border rounded circle">
						<i class="fa fa-minus"></i>
						<input type="text" value="1" class="form-control w-25 d-inline">
					</button>

					<button type="button" class="btn bg-light border rounded circle">
						<i class="fa fa-plus"></i>
					</button>
				</div>
			</div>
		</form>';
	echo $element;
}


 ?>