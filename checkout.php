<?php

include 'header.php';
include 'product_data.php';

if(session_status() === PHP_SESSION_NONE){

	session_start();
}

$cart_items = $_SESSION['cart'] ?? [];
$subtotal = 0;

if (empty($cart_items)) {
	header("Location: cart.php");
	exit();
}

?>

<main style="padding: 80px 5%; font-family: sans-serif;">
	<div style="max-width: 1001px; margin: 0 auto; display: flex; gap: 80px;">

		<div style="flex: 1.5;">
			<h2 style="text-transform: uppercase; margin-bottom: 30px;">Shipping Information
			</h2>
			<form action="process_order.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
				<input type="email" name="email" placeholder="Email Address" required style="padding: 15px; border: 1px solid #ddd;">

				<div style="display: flex; gap: 10px;">
					<input type="text" name="fname" placeholder="First Name" required style="flex: 1; padding: 15px; border: 1px solid #ddd;">
					<input type="text" name="lname" placeholder="Last Name" required style="flex: 1; padding: 15px; border: 1px; solid #ddd;">

				</div>

				<input type="text" name="address" placeholder="Address" required style="padding: 15px; border: 1px solid #ddd;">



				<div style="display: flex; gap: 10px;">
					<input type="text" name="city" placeholder="City" required style="flex: 1; padding: 15px; border: 1px solid #ddd;">

				<div style="display: flex; gap: 10px;">
					<input type="text" name="zip" placeholder="Zip Code" required style="flex: 1; padding: 15px; border: 1px solid #ddd;">
				</div>


				<button type="submit" style="background: #000; color: #fff; padding: 20px; font-weight: bold; border: none; cursor: pointer; margin-top: 20px;">
					PLACE ORDER
				</button>
			</form>
		</div>

		<div style="flex: 1; background: #f9f9f9; padding: 30px; height: fit-content;">
			<h3 style="margin-top: 0;">Your Order</h3>
			<?php foreach($cart_items as $item):
				foreach($products as $p) {
					if($p['id'] == $item['id']) {
						$subtotal += (float)str_replace('$', '', $p['price']);
						echo "<div style='display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 14px;'>
							<span>{$p['name']} ({$item['size']})</span>
							<span>{$p['price']}</span>
						</div>";
					}
				}
			endforeach; ?>
			<div style="border-top: 1px solid #ddd; margin-top: 20px; padding-top: 20px; font-weight: bold; display: flex; justify-content: space-between;">
				<span>Total</span>
				<span>$<?php echo number_format($subtotal, 2); ?></span>
			</div>
		</div>
	</div>
</main>







