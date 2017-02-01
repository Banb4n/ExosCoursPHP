<DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	// Nous allons vérifier que le client indique le bon mdp
	if (isset($_POST['MDP']) AND $_POST['MDP'] ==  "kangourou")
	{
	?>
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
	else
	{
		echo '<p>Attention mauvais Mdp, réessayer :</p>' . '<p><a href="TP_formulaire.php">Cliquez Ici</a><p>';
	}
	?>
</body>
</html>