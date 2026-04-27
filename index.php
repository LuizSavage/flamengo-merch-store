<?php include 'header.php';

if(session_status() === PHP_SESSION_NONE){

	session_start();
}

?>



<section class="manto2">
	<a href="product.php?id=manto2">
	<img src="flamengohome.jpg" class="manto2-img">
	</a>
</section>



<section class = "section-manto1">
	<h2>Manto 1</h2>
	<a href="product.php?id=manto1">
	<img src = "manto1.jpg" class="section-img">
	</a>
</section>


<section class= "section-ac">
	<h2>Accessories</h2>
	<a href="category.php?type=accessories">
	<img src= "flanew.jpg" class = "section-img">
	</a>
</section>






	
</body>
</html>