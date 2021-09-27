
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="css/inscription.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<?php 
	if (isset($_GET['error'])) {
		extract($_GET);
		$err = htmlspecialchars($_GET['error']);
		switch ($err) {
			case 'existe':
			?>
				<div class="message-echec">
					<i onclick="fermeinscription();" class="fas fa-times"></i>
					<h3>Email ou numero ou mot de pass déjà existant veuillez réessayez</h3>
				</div>
			<?php
				// code...
				break;

				case 'respect':
			?>
				<div class="message-echec">
					<i onclick="fermeinscription();" class="fas fa-times"></i>
					<h3>Pour votre sécurité entrez un mot de passe comme suit: Majuscule,minuscule,caractères spéciaux(@£$) et chiffres</h3>
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
		<h3>INSCRIVEZ-VOUS</h3>
		<form method="post">
			<input type="text" name="nom" placeholder="Entrez votre nom" required autofocus><br>
			<input type="text" name="prenom" placeholder="Entrez votre prenom" required><br>
			<input type="email" name="email" placeholder="Entrez votre email" required><br>
			<input type="telephone" name="tel" placeholder="Entrez votre numero de telephone" required><br>
			<input type="password" name="mdp" placeholder="Exemple mot de passe : Securise2021@" required id="mdp"><br>
			<input type="submit" name="envoyer" placeholder="Inscription" class="envoyer">
		</form>
		<p>Vous avez déjà un compte? <a href="connection.php"><i>Cliquez ici</i></a></p>
	</div>
</div>

<?php 
	extract($_POST);
	require_once("bd.php");
	global $db;
	if (isset($envoyer) && !empty($envoyer)) {
		if (isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom) && isset($email) && !empty($email) && isset($tel) && !empty($tel) && isset($mdp) && !empty($mdp)) {
			$nom = htmlspecialchars($nom);
			$prenom = htmlspecialchars($prenom);
			$email = htmlspecialchars($email);
			$tel = htmlspecialchars($tel);
			$mdp = htmlspecialchars($mdp);

			$code = hash('sha256', $mdp);
			$a = $db->prepare("SELECT * FROM inscriptioneleve WHERE email=:email || numero=:numero || password=:password");

			 $a->execute([
			 		'email' => $email,
					'numero' => $tel,
					'password' => $code
				 ]);
			$row = $a->rowCount();

			if ($row == 0) {
				if (preg_match_all("#^[A-Z]+[a-z]+[\d]+[$£@]+$#", $mdp)) {
					$b = $db->prepare("INSERT INTO inscriptioneleve(nom,prenom,email,numero,password) VALUES(:nom,:prenom,:email,:numero,:password)");
				$b->execute([
					'nom' => $nom,
					'prenom' => $prenom,
					'email' => $email,
					'numero' => $tel,
					'password' => $code
				]);
				header("Location:connection.php?error=succes");
				} else {
					header("Location:inscription.php?error=respect");
				}
			} else {
				header("Location:inscription.php?error=existe");
			}
			
		} else {
			echo "veuillez remplir tous les champs";
		}
		
	}
?>
<script src="js/defile.js"></script>
</body>
</html>