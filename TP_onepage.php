<DOCTYPE html>
<html>
<head>
	<title>TP_NASA</title>
</head>
<body>
	<?php

	// Le mot de passe n'a pas été envoyé ou n'est pas bon
	if (!isset($_POST['MDP']) OR $_POST['MDP'] != "kangourou")
	{
	?>	// Afficher le formulaire de saisie du mot de passe
	<form method="POST" action="TP_onepage.php">
		<h1>Entrez le MDP pour accédez au Identifiants du serveur :</h1>
		<br />	
			<label for="Password"> Mot de passe</label>
				<input type="password" name="MDP" />
				<input type="submit" name="Valider" />
	</form>
	
	<footer>
	<br />
		<h3>www.secret_Nasa_Crews.nasa</h3>
	</footer>
	<?php
	}

	 // Le mot de passe a été envoyé et il est bon
	else
	{
	?>	// Afficher les codes secrets
	<div>
		<h1>Retrouvez les id et mdp du serveurs ci-dessous</h1>
			<p>ID : Moon ---- MDP : ApolloCREW1</p>
			<p>ID : ARMY ---- MDP : 124593jhdjh</p>
			<p>ID : BUZZ ---- MDP : dsq542735ZG</p>
			
		<p>Déconnectez votre session :</p>
			<p><a href="TP_formulaire.php">Cliquez Ici</a><p>
	<footer>
		<br />
		<h3>www.secret_Nasa_Crews.nasa</h3>
	</footer>
	</div>
	<?php
	}
	?>
</body>
</html>