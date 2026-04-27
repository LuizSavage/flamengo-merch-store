<?php
if(session_status() === PHP_SESSION_NONE){

	session_start();
} 

include 'header.php';
include 'product_data.php';


$id = $_GET['id'] ?? '';

$item= null;

foreach ($products as $p) {
	if ($p['id'] === $id) {
		$item = $p;
		break;
	}	
}


if (!$item) {
	echo "<div style='padding:100px; text-align:center; font-family:sans-serif;'>
		<h2>Product not found!</h2>
		<a href='index.php'>Return to Store</a>
	</div>";
	exit;
}
?>

<style>
	label:has(input[type="radio"]:checked) {
		background: #000 !important;
		color: #fff !important;
		border-color: #000 !important;
	}
	
	label:hover {
		border-color: #000;
		background-color: #f4f4f4;
	}
</style>



<main style="padding: 80px 5%; display: flex; gap: 50px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">

	<div style="flex: 1; display: flex; flex-direction: column; justify-content: flex-start; gap: 20px;">

	<div style="flex: 1; background: #f9f9f9; padding: 40px; height: 500px; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
		<img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;">
	</div>

	<?php if(!empty($item['img_back'])): ?>
		<div class="img-back" style="background: #f9f9f9; padding: 40px; height: 500px; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
			<img src="<?php echo $item['img_back']; ?>" alt="<?php echo $item['name']; ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;">
		</div>
	<?php endif; ?>
	</div>


	<div style="flex: 1; display: flex; flex-direction: column; justify-content: flex-start;">
		<h1 style="font-size: 48px; margin: 0; text-transform: uppercase; font-weight: 900; line-height: 1.1;">
			<?php echo $item['name']; ?>
		</h1>


	<p style="font-size: 24px; font-weight: bold; margin: 20px 0; color: #333;">
		<?php echo $item['price']; ?>
	</p>

	
	<div style="margin-bottom: 30px; line-height: 1.6; color: #333; font-size: 18px;">
		<p>Official CRF merchandise. Designed for comfort and durability, whether you're at the stadium or on the go. Always supporting Flamengo. High-quality materials featuring the legendary Flamengo Crest.</p>
	</div>

	<form action="cart_add.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
		<input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">

	<div>
		<label style="font-weight: 900; display: block; margin-bottom: 10px; text-transform: uppercase; font-size: 14px;">Select Size</label>
		<div style="display: flex; gap: 10px;">
		<?php 
		
		if (in_array('accessories', $item['cat'])): ?>
		<label style="flex: 1; text-align: center; border: 1px solid #000; background: #000; color: #fff; padding: 12px; border-radius: 2px; font-weight: bold;">
			<input type="radio" name="size" value="OS" checked style="display: none;">
			ONE SIZE (OS)
		</label>

		<?php else: ?>
			<?php
			$sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
			foreach ($sizes as $size): ?>
				<label style="flex: 1; text-align: center; border: 1px solid #ddd; padding: 12px; cursor: pointer; border-radius: 2px; font-weight: bold; transition: 0.3s;">
					<input type="radio" name="size" value="<?php echo $size; ?>" required style="display: none;">
					<?php echo $size; ?>
				</label>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	
	<button type="submit" style="background: #000; color: #fff; padding: 20px; border: none; font-weight: 900; text-transform: uppercase; cursor: pointer; font-size: 16px; margin-top: 10px; border-radius: 2px;">
		Add to Bag
	</button>
</form>



	</div>
</main>









