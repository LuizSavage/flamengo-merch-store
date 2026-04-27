<?php

include 'header.php';
include 'product_data.php';

$query = isset($_GET['search']) ? trim($_GET['search']) : '';

$results = [];
if ($query !== '') {
	foreach($products as $item) {
		if (stripos($item['name'], $query) !== false) {
			$results[] = $item;
		}
	}
}

?>



<main style="padding: 50px 5%;">
	<h2>Results for: "<?php echo htmlspecialchars($query); ?>" </h2>
	
	<div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
		<?php if (!empty($results)): ?>
			<?php foreach ($results as $p): ?>
				<div class="card">
					<img src="<?php echo $p['img']; ?>" style="width: 100%;">
					<h3><?php echo $p['name']; ?></h3>
					<p><?php echo $p['price']; ?></p>
					<a href="product.php?id=<?php echo $p['id']; ?>">View Product</a>
				</div>
			<?php endforeach; ?>
		<?php else: ?>
			<p>No merch found. Try searching "Flamengo" or "Jersey".</p>
		<?php endif: ?>
	</div>
</main>