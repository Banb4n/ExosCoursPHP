<html>

<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])) // On a le nom et le prénom
{	
	//1 : On force la conversion en nombre entier
	$_GET['repeter'] = (int) $_GET['repeter'];
	
	//2 : Le nombre entier doit etre compris entre 1 et 'n'
	if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 10)
	{
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
			echo '<p>Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !</p>';
		}
	}
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un nom, un prénom et un nombre de répétitons !';
}

?>

</html>