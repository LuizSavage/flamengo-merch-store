<?php

if(session_status() === PHP_SESSION_NONE){

	session_start();
}

$products = [

	['id' => 'manto1', 'name' => 'Home Jersey 24/25', 'price' => '$130', 'cat' => ['men','women', 'adidas'], 'brand' => 'adidas' , 'img' => 'manto1f.jpg' , 'img_back' => 'manto1c.jpg'],

	['id' => 'baseball', 'name' => 'Flamengo Adidas Baseball Jersey', 'price' => '$165', 'cat' => ['men','women', 'adidas'], 'brand' => 'adidas' , 'img' => 'flamengobaseballf.jpg' , 'img_back' => 'flamengobaseballc.jpg'],

	['id' => 'manto2', 'name' => 'Away Jersey 26/27', 'price' => '$130', 'cat' => ['men','women', 'adidas'], 'brand' => 'adidas' , 'img' => 'manto2f.jpg' , 'img_back' => 'manto2c.jpg'],

	['id' => 'fla_disp', 'name' => 'Flamengo Disparar T-Shirt', 'price' => '$60', 'cat' => ['men'], 'brand' => 'braziline' , 'img' => 'fla_dispararf.jpg' , 'img_back' => 'fla_dispararc.jpg'],

	['id' => 'mengao', 'name' => 'Mengao T-Shirt', 'price' => '$75', 'cat' => ['men'], 'brand' => 'flamengo' , 'img' => 'mengao.jpg'],
	

	['id' => 'flaconq', 'name' => 'Flamengo Conquista Braziline', 'price' => '$55', 'cat' => ['men'], 'brand' => 'braziline' , 'img' => 'conqm.jpg', 'img_back' => 'conq.jpg'],

	['id' => 'flalife', 'name' => 'Flamengo Adidas Lifestyle', 'price' => '$170', 'cat' => ['men', 'adidas'], 'brand' => 'adidas' , 'img' => 'lifestylef.jpg', 'img_back' => 'lifestyleb.jpg'],

	['id' => 'ninguem_mengo', 'name' => 'Flamengo Pherusa Ninguem Morre Nos Devendo', 'price' => '$100', 'cat' => ['men'], 'brand' => 'pherusa' , 'img' => 'ninguem2.jpg', 'img_back' => 'ninguem1.jpg'],


	

	['id' => 'flabraz', 'name' => 'Women T-Shirt Braziline', 'price' => '$70', 'cat' => ['women'], 'brand' => 'braziline' , 'img' => 'braziwf.jpg', 'img_back' => 'braziwc.jpg'],

	['id' => 'cropped_fla', 'name' => 'Cropped Flamengo Braziline', 'price' => '$50', 'cat' => ['women'], 'brand' => 'braziline' , 'img' => 'croppedf.jpg'],

	['id' => 'cropped_flaconq', 'name' => 'Cropped Flamengo Conquista Braziline', 'price' => '$55', 'cat' => ['women'], 'brand' => 'braziline' , 'img' => 'croppedconqf.jpg', 'img_back' => 'conq.jpg'],
	['id' => 'flaconblack', 'name' => 'Flamengo Black Consciousness', 'price' => '$175', 'cat' => ['women', 'adidas'], 'brand' => 'adidas' , 'img' => 'flablackf.jpg', 'img_back' => 'flablackb.jpg'],
	['id' => 'flacorrenteza', 'name' => 'Flamengo Correnteza Braziline', 'price' => '$80', 'cat' => ['women'], 'brand' => 'braziline' , 'img' => 'corre1.jpg', 'img_back' => 'corre2.jpg'],



	['id' => 'fla_newhat', 'name' => '1981 New Era Hat', 'price' => '$50', 'cat' => ['accessories'], 'brand' => 'new era' , 'img' => 'bone1981f.jpg', 'img_back' => 'bone1981b.jpg'],

	['id' => 'fla_newhatcamper', 'name' => ' CRF Camper Mengao New Era Hat', 'price' => '$50', 'cat' => ['accessories'], 'brand' => 'new era' , 'img' => 'campernew.jpg', 'img_back' => 'campernew2.jpg'],

	['id' => 'fla1981_newhat', 'name' => '1981 CRF New Era Hat', 'price' => '$60', 'cat' => ['accessories'], 'brand' => 'new era' , 'img' => 'crf1981f.jpg', 'img_back' => 'crf1981b.jpg'],


	['id' => 'fla_adhat', 'name' => 'Adidas Hat 2026', 'price' => '$55', 'cat' => ['accessories', 'adidas'], 'brand' => 'adidas' , 'img' => 'bonead.jpg'],

	['id' => 'fla_backpack', 'name' => 'Adidas Backpack 2026', 'price' => '$100', 'cat' => ['accessories', 'adidas'], 'brand' => 'adidas' , 'img' => 'mochila.jpg'],
	['id' => 'duffle_fla', 'name' => 'Adidas Flamengo Duffle Bag', 'price' => '$80', 'cat' => ['accessories', 'adidas'], 'brand' => 'adidas' , 'img' => 'duffle1.jpg', 'img_back' => 'duffle2.jpg'],
	['id' => 'pinkcap', 'name' => 'Flamengo Pink Cap', 'price' => '$45', 'cat' => ['accessories'], 'brand' => 'starter' , 'img' => 'bonerosaf.jpg', 'img_back' => 'bonerosab.jpg'],
	['id' => 'medal', 'name' => 'Medal Flamengo Conmebol Libertadores CAMPÉON 2025', 'price' => '$81', 'cat' => ['accessories'], 'brand' => 'flamengo' , 'img' => 'medalb.jpg', 'img_back' => 'medalf.jpg'],
	
	];
?>

