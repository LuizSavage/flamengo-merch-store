<?php 

if(session_status() === PHP_SESSION_NONE){

	session_start();
}

include 'header.php';
include 'product_data.php';

$current_category = isset($_GET['type']) ? $_GET['type'] : 'all';

?>

<div style= "padding: 40px 5%;">
	
	<h1 style="text-transform: capitalize; color: red; font-family sans-serif; font-size: 40px;">
	<?php echo $current_category; ?>
	</h1>
	
	<hr style="border: 1px solid #eee; margin-bottom: 30px;">

	<style>
	
	.image-container {
		position: relative;
		height: 350px;
		overflow: hidden;
		background: #f4f4f4;
	}

	.image-container img {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height:100%;
		object-fit: contain;
		transition: all 0.3s ease-in-out;
	}

	
	.img-front {
		opacity: 1;
		z-index: 2;
	}

	.img-back {
		opacity: 0;
		z-index: 1;
	}	

	.product-card:hover .img-front {
		position: relative;
		height: 350px;
	}

	.product-card:hover .img-back {
		opacity: 1;
		z-index: 3;
	}	



</style>



<div style= "display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 40px;">

<?php

foreach ($products as $item) {

	if (in_array($current_category, $item['cat'])) {
	?>
	

	<div class = "product-card" style="text-align: center; font-family: sans-serif;">

	<a href="product.php?id=<?php echo $item['id']; ?>" style="text-decoration: none; color: black;">

	<div style="background: #f4f4f4; padding: 20px; margin-bottom: 10px;">
	
	<div class="image-container">
		<img src="<?php echo $item['img']; ?>" class="img-front">

	<?php if(isset($item['img_back'])): ?>
		<img src="<?php echo $item['img_back']; ?>" class="img-back">
	<?php endif; ?>
</div>


	</div>
	
		<h3><?php echo $item['name']; ?> </h3>
		<p style= "color: red; font-weight: bold;"><?php echo $item['price']; ?>	</p>
		</a>

	<form action="cart_add.php" method="POST">
		<input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">

		<?php if (in_array('accessories', $item['cat'])): ?>
			<input type="hidden" name="size" value="OS">
			<p style="font-family: sans-serif; font-size: 14px; color: #777; margin-bottom: 5px;">Size: One Size</p>

		<?php else: ?>
			<select name="size" required style="width: 100%; padding: 10px; margin-bottom: 5px; border: 1px solid #ccc; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; cursor: pointer;">
				<option value="" disabled selected>Select Size</option>
				<option value="XS">Extra Small</option>
				<option value="S">Small</option>
				<option value="M">Medium</option>
				<option value="L">Large</option>
				<option value="XL">Extra Large</option>
				<option value="XXL">XX-Large</option>
			</select>
		<?php endif; ?>
		

		<button type="submit" name="add_to_cart" style="background: black; color: white; width: 100%; padding: 10px; border: none; cursor: pointer; font-weight: bold;">
			ADD TO CART
		</button>
	</form>
	</div>
	
	<?php
	}
}

?>
</div></div></body>
</html>

