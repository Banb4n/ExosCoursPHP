<html>

<p>Bonjour !</p>

<p>
	Je sais comment tu t'appelles, hé hé. Ton pseudo est 
		<?php echo htmlspecialchars($_POST['Pseudo']); ?>
</p>

<p>
	Voici le message que tu nous as laisser : <br />
		<?php echo htmlspecialchars($_POST['message']); ?> 
</p>

<p>
	Vous avez fait le choix suivant : 
		<?php echo htmlspecialchars($_POST['choix']); ?>
</p>

<p>
	Vous avez sélectionnez :
		<?php 
			if (isset($_POST['case']))
			{
				echo htmlspecialchars($_POST['case']);
			}
			else
			{
				echo htmlspecialchars('Vous n\'avez rien choisi');
			}
	       ?>
</p>

<p>
	<?php 
	
	if (isset($_POST['frites']))
	{
		echo htmlspecialchars('<p>Vous etes de bonne humeur ? ' . $_POST['frites'] . '</p>'); 
	} 
	?>
</p>

<p>
	Si tu veut changer tes infos : 
		<a href="Fomulaire1.php"> Clique-ici</a> 
</p>

</html>