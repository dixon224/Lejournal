<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="Css/connection.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<?php 
	if (isset($_GET['error'])) {
		extract($_GET);
		$err = htmlspecialchars($_GET['error']);
		switch ($err) {
			case 'succes':
			?>
				<div class="message-reussite">
					<i onclick="fermeconnectionreussite();" class="fas fa-times"></i>
					<h3>Inscription réussie avec succès maintenant connectez vous</h3>
				</div>
			<?php
				// code...
				break;

					case 'numero':
			?>
				<div class="message-echec">
					<i onclick="fermeconnectionechec();" class="fas fa-times"></i>
					<h3>Ce numéro est introuvable veuillez réessayez</h3>
				</div>
			<?php

				break;

						case 'mdp':
			?>
				<div class="message-echec">
					<i onclick="fermeconnectionechec();" class="fas fa-times"></i>
					<h3>Ce mot de passe est introuvable veuillez réessayez</h3>
				</div>
			<?php
				// code...
				break;
		}
	} else {
		// code...
	}
?>
<div class="contenu">
	<div class="barre">
		<a href="principal.php"><button><i class="fas fa-arrow-left"></i> RETOUR</button></a>
		<h3>ASSIA-ECOLE</h3>
	</div>
	<div class="formulaire">
		<h3>CONNECTEZ-VOUS</h3>
		<form method="post" action="session.php">
			<input type="telephone" name="tel" placeholder="Entrez votre numero de telephone" autofocus required><br>
			<input type="password" name="mdp" placeholder="Entrez votre mot de passe" required><br>
			<input type="submit" name="envoyer" placeholder="Inscription" class="envoyer">
		</form>
		<p>Vous n'avez pas de compte? <a href="inscription.php"><i>Cliquez ici</i></a></p>
	</div>
</div>
<script src="js/defile.js"></script>
</body>
</html>