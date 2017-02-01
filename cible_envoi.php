<html>

<?php
      //Testons si le fichier a bien été envoyer et si il n'y as pas d'erreur
	if (isset ($_FILES['monfichier']) AND $_Files['monfichier']['error'] == 0)
	{
		//Testons si le fichier n'est pas trop gros
		if ($_FILES['monfichier']['size'] <= 1000000)
		{
			       // Testons si l'extension est autorisée
				$infosfichier = pathinfo($_FILES['monfichier']['name']);
				$extension_upload = $infosfichier['extension'];
				$extension_autorisees = array('jpeg', 'jpg', 'gif', 'png');
				if (in_array($extension_upload, $extension_autorisees))
				{
					move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));

                                        echo "L'envoi a bien été effectué !";
				}
		}
	}
?>

</html>