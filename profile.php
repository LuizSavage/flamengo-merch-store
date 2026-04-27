<?php

if(session_status() === PHP_SESSION_NONE){

	session_start();
}

include 'header.php';


if (isset($_POST['action'])) {
	$_SESSION['user_name'] = $_POST['email'];
	$_SESSION['user_name'] = $_POST['name'] ?? 'Flamengo Fan';
	header("Location: profile.php");
	exit();
}


if (isset($_GET['logout'])) {
	session_destroy();
	header("Location: profile.php");
	exit();
}

?>

<script>

function showForm(type) {
	var choiceArea = document.getElementById('choice-area');
	var formArea = document.getElementById('form-area');
	var title = document.getElementById('form-title');
	var nameField = document.getElementById('name-input-group');
	var actionInput = document.getElementById('form-action');

	if(choiceArea && formArea) {
		choiceArea.style.display = 'none';
		formArea.style.display = 'block';


		if (type === 'create') {
			title.innerHTML = 'Create Account';
			nameField.style.display = 'flex';
			actionInput.value = 'create';
		} else {
			title.innerHTML = 'Login';
			nameField.style.display = 'none';
			actionInput.value = 'login';
			}
		}
	}


function goBack() {
	var choiceArea= document.getElementById('choice-area');
	var formArea= document.getElementById('form-area');

	if (choiceArea && formArea) {
		choiceArea.style.display = 'block';
		formArea.style.display = 'none';
	}
}

</script>


<main style="padding: 100px 5%; font-family: sans-serif; background-color: #f4f4f4; min-height: 80vh;"
	<div style="max-width: 500px; margin: 0 auto;">

		<?php if(!isset($_SESSION['user_email'])): ?>
			<div id="choice-area" style="text-align: center;">
				<h1 style="text-align: uppercase; letter-spacing: 3px; margin-bottom: 40px;">My Account</h1>
				<p style="color: #333; margin-bottom: 40px;">Join the Nacao Mengao. Access your orders, profile, and exclusive merch.</p>


				<button onclick="showForm('login')" style="width: 100%; padding: 15px; background: #000; color: #fff; border: none; font-weight: bold; cursor: pointer; margin-bottom: 15px; transition: 0.0s;">LOGIN</button>

				<button onclick="showForm('create')" style="width: 100%; padding: 15px; background: #fff; color: #000; border:2px solid #000; font-weight: bold; cursor: pointer; transition: 0.03s;">CREATE ACCOUNT</button>
			</div>
			
			<div id="form-area" style="display: none;">
				<button onclick="goBack()" style-"background: none; border: none; cursor: pointer; color: #333; margin-bottom: 20px;">BACK</button>
				<h2 id="form-title" style="text-transform: uppercase; margin-bottom: 30px;">Login</h2>



				<form method="POST" action="profile.php" novalidate style="display: flex; flex-direction: column; gap: 20px;">
					<input type="hidden" name="action" id="form-action" value="login">
			

					<div id="name-input-group" style="display: none; flex-direction: column; gap: 8px;">
						<label style="font-size: 12px; font-weight: bold; color: #333;">FULL NAME</label>
						<input type="text" name="name" style="padding: 12px; border: 1px solid #ccc; border-radius: 0;">
					</div>



					<div id="name-input-group" style="display: none; flex-direction: column; gap: 8px;">
						<label style="font-size: 12px; font-weight: bold; color: #333;">EMAIL ADDRESS</label>
						<input type="text" name="email" style="padding: 12px; border: 1px solid #ccc; border-radius: 0;">
					</div>


			

					<div id="name-input-group" style="display: none; flex-direction: column; gap: 8px;">
						<label style="font-size: 12px; font-weight: bold; color: #333;">PASSWORD</label>
						<input type="password" name="password" required style="padding: 12px; border: 1px solid #ccc; border-radius: 0;">
					</div>


					<button type="submit" style="background: #e10612; color: #fff; border: none; padding: 15px; font-weight: bold; cursor: pointer; margin-top: 10px;">CONTINUE</button>
				</form>
			</div>

<?php else: ?>
	<div style="border: 1px solid #eee; padding: 40px; text-align: center; box-shadow: 0 5px rgna(0,0,0,0.05);">
		<h2 style= "text-transform: uppercase;">Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>
		<p style="color: #333; margin-bottom: 30px;"><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>



		<div style="text-align= left; background: #f9f9f9; padding: 20px; margin-bottom: 30px;">
			<p style="margin: 5px 0;"><strong>Status:</strong> Active Member</p>
			<p style="margin: 5px 0;"><strong>Location:</strong> New Jersey</p>
		</div>


		<a href="?logout=1" style"color: #e10612; text-decoration: none; font-weight: bold; font-size: 14px;">LOG OUT,/a>

	</div>
</main>


<?php endif; ?>