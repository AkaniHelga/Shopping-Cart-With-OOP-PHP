<?php

require_once 'db.php';
$db = new CreateDb();
?>
<html>
	<body>
		<h4>hbu</h4>
	</body>
</html>

<div class="col-6">
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

							<h6>Kshs			<?php echo $total?>			</h6>
							
						</div>
					</div>
				</div>
			</div>
		</div>