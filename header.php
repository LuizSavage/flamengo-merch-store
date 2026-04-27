<?php 

if(session_status() === PHP_SESSION_NONE){

	session_start();
}


?>

<!DOCTYPE html>


<html>

<head>
<title>Flamengo Store</title>

<meta charset="UTF-8">

<style>
	body {
		margin: 0;
	}

	.top-bar {
		background-color: black;
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0px 30px;
		height: 120px;
		position: relative;
	}
	
		
	.logo {
		width: 150px;
		height: auto;
		margin: 0 15px;
		object-fit: contain;
		display:block;
	}

	.menu {
		display: flex;
		gap: 30px;
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
	
	} 

	.menu a {
		
		color: white;
		text-decoration: none;
		font-family: avenir next, sans-serif;
		font-size: 22px;
		font-weight: bold;
		letter-spacing: 2px;
	}

	
	.menu a:hover{
			color:red;
			opacity: 0.7;
	}

	.manto2{	
		width: 100%;
	}
	
	.manto2-img{	
		width:100%;
		height: 500px;
		object-fit: cover;
		display:block;
	}
	
	.section-manto1 {
			padding: 60px 0 30px 0;
	}

	.section-manto1 h2{
			font-size: 28px;
			font-family: avenir next, sans-serif;
			color: red;
			font-weight: bold;
			margin-bottom: 20px;
	}
	

	.section-img{	
		width: 100%;
		height: 500px;
		object-fit: cover;
		display: block;
	}

	.icons {
		display: flex;
		gap: 20px;
		align-items: center;
		z-index: 10;
	}
		
	
	.icons-img{

		width: 24px;
		height: 24px;
		cursor: pointer;
		display: block;
		object-fit: contain;
	}

	.section-ac {
			padding: 60px 0 30px 0;
	}

	.section-ac h2{
			font-size: 28px;
			font-family: avenir next, avenir, helvetica neue, helvetica, ubuntu, roboto, noto, segoe ui, arial, sans-serif;
			color: red;
			font-weight: bold;
			margin-bottom: 20px;
	}





	</style>
</head>

<script>

function toggleSearch() {
	var input = document.getElementById('search-input');
	
	if(input.style.width == '0px' || input.style.width == '') {
		input.style.width = '180px';
		input.style.opacity = '1';
		input.style.padding = '5px 10px';
		input.focus()
	} else {
		if (input.value.length > 0) {
			document.getElementById('search-form').submit();
		} else {
			input.style.width = '0';
			input.style.opacity = '0';
			input.style.padding = '5px 0';
		}
	}
}
</script>


<body>

	<header class="top-bar">
		<a href="index.php">
		<img src ="flamengologo1.jpg" class = "logo"  alt="logo"/>
		</a>
		
		
	<nav class="menu">
		<a href="category.php?type=adidas">Adidas</a>
		<a href="category.php?type=men">Men</a>
		<a href="category.php?type=women">Women</a>
		<a href="category.php?type=accessories">Accessories</a>
	</nav>

	<div class = "icons">
			<div style="display: flex; align-items: center; position: relative;">
				<form action= "index.php" method="GET" id="search-form" style"display: flex; align-items: center;">
					<input type="text" name="search" id="search-input" placeholder="Search merch..." style="width: 0; opacity: 0; padding: 5px 0; border: none; border-bottom: 1px solid white; background: none; color: white; transition: all 0.4s ease; outline: none;">
			<img src = "pesquisa.jpg" class = "icons-img" alt="Search" id="search-icon" onclick="toggleSearch()" style="margin-left: 10px;">
	</form>
</div>

			<a href= "cart.php">
			<img src = "carrinho.jpg" class = "icons-img" alt= "Cart">
			</a>
			
			<a href="profile.php">
			<img src = "profile.jpg" class="icons-img" alt= "Profile">
			</a>

	</div>

	


</header>