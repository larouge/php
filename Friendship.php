<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="friendship_mise_en_forme.css" />
	</head>
	<header>
		<div id="logo">
			<p> FRIENDSHIP </p>
			<p> Friends' Group Social Network </p>
		</div>
	</header>
	<form method="post" action="traitement.php">
		<p id="login">
			<label for="pseudo"> Nom d'utilisateur </label> <input type="email" placeholder="adresse mail" name="pseudo" id="pseudo" required="" /> </br> </br>
			<label for="pass"> Mot de Passe </label> <input type="password" name="pass" id="pass" required/> </br> </br>
			<input type="checkbox" name="active_session" id="active_session"/> <label for="active_session"> Garder ma session active </label> </br> </br>
			<input type="checkbox" name="rememberme" id="rememberme"/> <label for="rememberme"> Se souvenir de moi </label> </br>
			<input type="submit" value="Se connecter" />
		</p>
	</form>
	<body>
		<div>
			
		</div>
	</body>
</html>