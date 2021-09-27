<?php 
	session_start();
	extract($_POST);
	if (isset($envoyer) && !empty($envoyer)) {
		if (isset($tel) && !empty($tel) && isset($mdp) && !empty($mdp)) {
		$tel = htmlspecialchars($tel);
		$mdp = htmlspecialchars($mdp);
		require_once("bd.php");
		global $db;

		$a = $db->prepare("SELECT * FROM inscriptioneleve WHERE numero = :numero");

		$a->execute([
			'numero' => $tel
		]);

		$row = $a->rowCount();
		$f = $a->fetch();
		$code = hash('sha256', $mdp);
		if ($row == 1) {
			if ($f['password'] === $code) {
				$_SESSION['id'] = $f['id'];
				$_SESSION['nom'] = $f['nom'];
				$_SESSION['prenom'] = $f['prenom'];
				$_SESSION['email'] = $f['email'];
				$_SESSION['numero'] = $f['numero'];
				$_SESSION['password'] = $f['password'];
				header("Location:principal.php?id=".$_SESSION['id']);
			} else {
				header("Location:connection.php?error=mdp");
			}
		} else {
			header("Location:connection.php?error=numero");
		}
		

	} else {
		// code...
	}
	} else {
		// code...
	}
	
	
 ?>