<?php
if(session_status() === PHP_SESSION_NONE){

	session_start();
}

$order_details = $_POST;

unset($_SESSION['cart']);

echo "<script>
	alert('Order Placed Successfully! Thank your for shopping.');
	window.location.href = 'index.php';
	</script>";
?>