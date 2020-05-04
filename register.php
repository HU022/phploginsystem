<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registreren</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registreren</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Gebruikersnaam</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email-Adres</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Wachtwoord</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Wachtwoord Bevestigen</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Regristreren</button>
		</div>
		<p>
			Al geregistreerd? <a href="login.php">Inloggen</a>
		</p>
	</form>
</body>
</html>
