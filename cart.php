<?php

if(session_status() === PHP_SESSION_NONE){

	session_start();
}
include 'header.php';
include 'product_data.php';


$cart_items = $_SESSION['cart'] ?? [];

$subtotal = 0;

?>

<main style= "padding: 80px 5%; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; min-height: 60vh;">

	<div style="max-width: 1200px; margin: 0 auto;">
		<h1 style="text-transform: uppercase; font-weight: 900; font-size: 32px; margin-bottom: 40px; border-bottom: 2px solid #000; padding-bottom: 10px;">
			Your Bag
		</h1>

	<?php if(empty($cart_items)): ?>
		<div style="text-align: center; padding: 100px 0;">
			<p style="font-size: 20px; color: #333;">Your shopping bag is empty.</p>
		<a href="index.php" style="display: inline-block; margin-top: 20px; padding: 15px 30px; background: #000; color: #fff; text-decoration: none; font-weight: bold; border-radius: 2px;">
			BACK TO STORE
		</a>
	</div>
	
<?php else: ?>
	<div style="display: flex; gap: 60px; align-items: flex-start;">


		<div style="flex: 2; display: flex; flex-direction: column; gap: 30px;">
	<?php
	foreach ($cart_items as $index => $item):
		$product_details = null;
		foreach ($products as $p) {
			if ($p['id'] == $item['id']) {
				$product_details = $p;
				break;
			}
		}


	if ($product_details):
		$price_num = (float) str_replace('$', '', $product_details['price']);
		$subtotal += $price_num * $item['qty'];
	?>
	
	<div style="display: flex; gap: 20px; border-bottom: 1px solid #eee; padding-bottom: 20px; align-items: center; margin-bottom: 20px;">

		<div style="width: 100px; height: 100px; background: #f4f4f4; border-radius: 4px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
			<img src="<?php echo $product_details['img']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
		</div>

		
		<div style="flex: 1;">
			<h3 style="margin: 0; font-size: 16px; text-transform: uppercase;"><?php echo $product_details['name']; ?></h3>
			<p style="margin: 5px 0; color: #333; font-size: 14px;">Size: <strong><?php echo $item['size']; ?></strong></p>
			<p style="margin: 0; font-weight: bold;"><?php echo $product_details['price']; ?></p>
		</div>

	<a href="cart_remove.php?index=<?php echo $index; ?>" style="color: #ff0000; text-decoration: none; font-size: 12px; font-weight: bold; text-transform: uppercase; border: 1px solid #ff0000; padding: 5px 10px; border-radius: 2px;">
		Remove
	</a>
</div>

<?php
	endif;
endforeach;

?>



	</div> <div style="flex: 1; background: #f9f9f9; padding: 40px; border-radius: 4px;">



	<h2 style="text-transform: uppercase; font-size: 18px; margin-top: 0; margin-bottom: 1px solid #ddd; padding-bottom: 15px;">
		Order Summary
	</h2>

	<div style="display:flex; justify-content: space-between; margin-bottom: 15px; font-size: 16px;">
		<span>Subtotal</span>
		<span>$<?php echo number_format($subtotal, 2); ?></span>
	</div>

	
	<div style="display: flex; justify-content: space-between; margin-bottom: 15px; font-size: 16px;">
		<span>Shipping</span>
		<span style="color: green; font-weight: bold;">FREE</span>
	</div>

	<div style="display: flex; justify-content: space-between; margin-top: 30px; padding-top: 15px; border-top: 2px solid #000; font-weight: 900; font-size: 20px;">
		<span>Total</span>
		<span>$<?php echo number_format($subtotal, 2); ?></span>
	</div>

	<a href="checkout.php" style="display: block; text-align: center; margin-top: 40px; padding: 20px; background: #000; color: #fff; text-decoration: none; font-weight: bold; text-transformation: uppercase; letter-spacing: 1px; border-radius: 2px;">
		Checkout
	</a>


	<p style="text-align: center; font-size: 12px; color: #333; margin-top: 15px;">
	Tax included. Shipping calculated at checkout.
	</p>








</div> </div><?php endif; ?>

</div> </main>











