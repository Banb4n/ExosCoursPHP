<?php 
$age = 54;

if ($age <= 12)
{
   echo "Salut gamin ! Bienvenue sur mon site!<br />";
   $autorisation_entrer = "Oui";
}
else 
{
   echo "Ceci est un site pour enfant vous etes trop vieux pour rentrer, bonne journée !<br />";
   $autorisation_entrer = "Non";
}

echo "Avez vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>