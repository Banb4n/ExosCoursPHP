<html>

<form method="POST" action="cible.php">
	<p>
		<input type="text" name="Pseudo" value="Entrez votre pseudo ici" />
	</p>
	
	<p>
		<textarea name="message" rows="8" cols="45">
		Entrez votre message ici !
		</textarea>
	</p>
	
	<p>
		<select name="choix">
			<option value="choix1" selected="selected">Choix 1</option>
			<option value="choix2">Choix 2</option>
			<option value="choix3">Choix 3</option>
			<option value="choix4">Choix 3</option>
			<option value="Choix5">Choix 4</option>
		</select>
	</p>

	<p>
		<input type="checkbox" name="case" id="case" />
			<label for="case">Formule 1</label>
		<br />	
		<input type="checkbox" name="case" id="case" />
			<label for="case">Formule 2</label>
		<br />	
		<input type="checkbox" name="case" id="case" />
			<label for="case">Formule 3</label>
		<br />	
		<input type="checkbox" name="case" id="case" />
			<label for="case">Formule 4</label>
	</p>
	
	<p>
		Etes vous de bonne humeur ? 
			<input type="radio" name="frites" value="oui" id="oui" checked="checked" />
				<label for="oui">Oui</label>
			<input type="radio" name="frites" value="non" id="non" />
				<label for="non">Non</label>
    </p>
	
	<p>
	<!-- Ceci est une entrée cachée que l'on pourra utilisé plus tard, elle retient le pseudo du visiteur -->
		<input type="hidden" name="pseudo" value="Bnbn" />
	</p>
	
	<p>
		<input type="submit" value="valider" />
	</p>
</form>

</html>