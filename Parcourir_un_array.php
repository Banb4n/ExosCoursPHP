<?php
// On crée notre array $prenom
$prenoms = array ('Francois', 'Michel', 'Nicole', 'Veronique', 'Benoit');

// Puis on fait un boucle pour tout afficher : 
for ($numero = 0; $numero < 5; $numero++)
{
	echo $prenoms[$numero] . '<br />'; // affichera $prenom [0], $prenom[1], etc
}


?>