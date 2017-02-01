<?php 

$coordonnees = array (
    'prenom'  => 'Francois',
    'nom' => 'Dupont',
    'adresse' => '3 rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
	echo '[' . $cle . '] vaut :&nbsp' . $element . '<br />';
}

?>