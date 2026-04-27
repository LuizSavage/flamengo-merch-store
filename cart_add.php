<?php 

if(session_status() === PHP_SESSION_NONE){

	session_start();
}

$id = $_POST['product_id'] ?? '';
$size = $_POST['size'] ?? '';


if (!$id || !$size) {
	header('Location: index.php');
	exit;
}

if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}


$_SESSION['cart'][] = [
		'id' => $id,
		'size' => $size,
		'qty' => 1
		];

header('Location: cart.php');

exit;