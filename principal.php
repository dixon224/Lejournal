<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Le Journal</title>
	<link rel="stylesheet" type="text/css" href="css/principale.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- GlideJS --> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
</head>
<body>
<a name="haut"></a>
	<div class="premier">
		<?php 
			if (isset($_SESSION['id'])) {
				?>
					<div class="inscription"><ul><li><a href="modification.php">Modifier informations</a></li></ul></div>
					<div class="connection"><ul><li><a href="deconnection.php">Deconnection</a></li></ul></div>
				<?php
			} else {
				?>
					<div class="inscription"><ul><li><a href="inscription.php">Inscription</a></li></ul></div>
		<!-- <div class="Reinscription"><ul><li><a href="">Reinscription</a></li></ul></div> -->
		<div class="connection"><ul><li><a href="connection.php">Connection</a></li></ul></div>
				<?php
			}
			
		?>
	</div>

	<div class="barre-verticale">
		<div class="ferme" onclick="ferme();">
			<i class="fas fa-times"></i>
		</div>
		<div class="navigation-responsif">
		<div class="liens">
			<div class="nom">ASSIA-ECOLE</div>
			<div class="lien-1"><a href="" class="scroll-link">ACCEUIL</a></div>
			<div class="lien-2"><a href="#visite" class="scroll-link">VISITE</a></div>
			<div class="lien-3"><a href="#formation" class="scroll-link">FORMATION</a></div>
			<div class="lien-4"><a href="#resultat" class="scroll-link">RESULTATS</a></div>
			<div class="lien-5"><a href="#fiche" class="scroll-link">FICHE DE RENSEIGNEMENT</a></div>
			<div class="lien-6"><a href="#contact" class="scroll-link">CONTACT</a></div>
		</div>
	</div>
	</div>

	<div class="salut-et-bar">
		<div class="nom">ASSIA-ECOLE</div>
		<div class="salut">
			<h3>SALUT <?php if (isset($_SESSION['id'])) {
				echo $_SESSION['nom'];
			}else{

			}  ?></h3>
		</div>
		<div class="bars" onclick="ouvre();">
			<i class="fas fa-bars"></i>
		</div>
	</div>
	<div class="corps">
		<div class="navigation">
		<div class="nom">ASSIA-ECOLE</div>
		<div class="liens">
			<div class="lien-1"><a href="" class="scroll-link">ACCEUIL</a></div>
			<div class="lien-2"><a href="#visite" class="scroll-link">VISITE</a></div>
			<div class="lien-3"><a href="#formation" class="scroll-link">FORMATION</a></div>
			<div class="lien-4"><a href="#resultat" class="scroll-link">RESULTATS</a></div>
			<div class="lien-5"><a href="#fiche" class="scroll-link">FICHE DE RENSEIGNEMENT</a></div>
			<div class="lien-6"><a href="#contact" class="scroll-link">CONTACT</a></div>
		</div>
		<div class="salut">
			<h3>SALUT  <?php if (isset($_SESSION['id'])) {
				echo $_SESSION['nom'];
			}else{

			}  ?></h3>
		</div>
	</div>

	<div class="defilement" id="glide1">
		<div class="glide__track" data-glide-el="track">
			<ul class="glide__slides glide__hero">
			<li class="glide__slide">
				<div class="contenu">
						<div class="text-general">
							<div class="en-tete"><h1>BIENVENUE A ASSIA ECOLE!</h1></div>
							<div class="text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</div>
						<div class="image">
							<img src="img/banner_1.png">
						</div>
				</div>
			</li>

			<li class="glide__slide">
				<div class="contenu">
						<div class="text-general">
							<div class="en-tete"><h1>BIENVENUE A ASSIA ECOLE!</h1></div>
							<div class="text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</div>
						<div class="image">
							<img src="img/banner_2.png"> 
						</div>
				</div>
			</li>

			<li class="glide__slide">
				<div class="contenu">
						<div class="text-general">
							<div class="en-tete"><h1>BIENVENUE A ASSIA ECOLE!</h1></div>
							<div class="text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</div>
						<div class="image">
							<img src="img/banner_3.png" >
						</div>
				</div>
			</li>
		</ul>
		</div>
		<div class="fleches" data-glide-el="controls">
							<div class="fleche-gauche" data-glide-dir="<"><i class="fas fa-arrow-left"></i></div>
							<div class="fleche-droite" data-glide-dir=">"><i class="fas fa-arrow-right"></i></div>
		</div>
	</div>

	<div class="examen">
		<div class="titre">CLASSES D'EXAMEN</div>
		<div class="bloc-classe">
			<div class="sixieme">
				<div class="sixieme-titre">6<sup>ième</sup></div>
				<div class="sixieme-text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="sixieme-voir-plus"><button>Voir plus</button></div>
			</div>

			<div class="dixieme">
				<div class="dixieme-titre">10<sup>ième</sup></div>
				<div class="dixieme-text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="dixieme-voir-plus"><button>Voir plus</button></div>
			</div>

			<div class="terminale">
				<div class="terminale-titre">Terminale</sup></div>
				<div class="terminale-text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="terminale-voir-plus"><button>Voir plus</button></div>
			</div>
		</div>
	</div>
	<a name="formation"></a>
	<div class="formation" id="glide2">
		<div class="titre">FORMATIONS</div>
	<div class="glide__track form-rectangle" data-glide-el="track">
			<ul class="glide__slides">
			<li class="glide__slide">
			<div class="bloc-formation">
			<div class="form">
				<div class="form-titre">PRIMAIRE</div>
				<div class="form-text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="form-voir-plus"><button>Voir plus</button></div>
			</div>
			</div>
			</li>

			<li class="glide__slide">
			<div class="bloc-formation">
			<div class="form">
				<div class="form-titre">COLLEGE</div>
				<div class="form-text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="form-voir-plus"><button>Voir plus</button></div>
			</div>
			</div>
			</li>

			<li class="glide__slide">
			<div class="bloc-formation">
			<div class="form">
				<div class="form-titre">LYCEE</div>
				<div class="form-text">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="form-voir-plus"><button>Voir plus</button></div>
			</div>
			</div>
			</li>
		</ul>
	</div>
		<div class="arrows" data-glide-el="controls">
							<div class="arrow-gauche" data-glide-dir="<"><i class="fas fa-arrow-left"></i></div>
							<div class="arrow-droite" data-glide-dir=">"><i class="fas fa-arrow-right"></i></div>
		</div>
</div>
<a name="resultat"></a>
<div class="resultat-global">
	<div class="resultat-titre">RESULTATS</div>
	<div class="resultat-bas">
		<div class="text">SELECTIONNER VOTRE CLASSE POUR CONNAITRE VOTRE RESULTAT</div>
		<div class="formulaire">
			<form method="post">
				<select class="classe">
					<option >Selectionner votre classe</option>
					<option >petite section</option>
					<option >grande section</option>
					<option >maternelle</option>
					<option >premiere annee</option>
					<option >deuxieme annee</option>
					<option >troisieme annee</option>
					<option >quatrieme annee</option>
					<option >cinquieme annee</option>
					<option >sixieme annee</option>
					<option >septieme annee</option>
					<option >huitieme annee</option>
					<option >neuvieme annee</option>
					<option >dixieme annee</option>
					<option >onzieme annee</option>
					<option >douzieme annee</option>
					<option >terminale</option>
				</select>
				<input type="submit" name="envoyer" class="envoyer" value="Rechercher">
			</form>
		</div>
	</div>
</div>

<div class="service-global">
	<div class="service-titre">SERVICES</div>
	<div class="service-bas">
		<div class="titre"><h2>EDUCATION</h2></div>
		<div class="titre instruction"><h2>INSTRUCTION</h2></div>
		<div class="titre loisir"><h2>LOISIR</h2></div>
	</div>
</div>


<div class="avis-global" id="glide3">
	<div class="avis-titre">AVIS</div>
	<div class="glide__track avis-rectangle" data-glide-el="track">
		<ul class="glide__slides">
		<li class="glide__slide">
			<div class="avis-bas">
		<img src="img/banner_2.png">
		<div class="avis-bas-text">
			<div class="avis-bas-text-haut">NOM(TITRE)</div>
		<div class="avis-bas-text-bas">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</div>
		</li>

		<li class="glide__slide">
			<div class="avis-bas">
		<img src="img/banner_1.png">
		<div class="avis-bas-text">
			<div class="avis-bas-text-haut">NOM(TITRE)</div>
		<div class="avis-bas-text-bas">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</div>
		</li>

		<li class="glide__slide">
			<div class="avis-bas">
		<img src="img/banner_3.png">
		<div class="avis-bas-text">
			<div class="avis-bas-text-haut">NOM(TITRE)</div>
		<div class="avis-bas-text-bas">ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</div>
		</li>
	</ul>
	</div>
	<div class="arrow-avis" data-glide-el="controls">
							<div class="arrow-avis-gauche " data-glide-dir="<"><i class="fas fa-arrow-left"></i></div>
							<div class="arrow-avis-droite" data-glide-dir=">"><i class="fas fa-arrow-right"></i></div>
	</div>
</div>

<a name="fiche"></a>
<div class="fiche-renseignement-global">
	<div class="fiche-renseignement-titre">FICHE DE RENSEIGNEMENT</div>
	<div class="fiche-renseignement-bas">
		<div class="text">SELECTIONNER VOTRE CLASSE POUR AVOIR LA FICHE DE RENSEIGNEMENT</div>
		<div class="formulaire">
			<form method="post">
				<select class="classe">
					<option >Selectionner votre classe</option>
					<option >petite section</option>
					<option >grande section</option>
					<option >maternelle</option>
					<option >premiere annee</option>
					<option >deuxieme annee</option>
					<option >troisieme annee</option>
					<option >quatrieme annee</option>
					<option >cinquieme annee</option>
					<option >sixieme annee</option>
					<option >septieme annee</option>
					<option >huitieme annee</option>
					<option >neuvieme annee</option>
					<option >dixieme annee</option>
					<option >onzieme annee</option>
					<option >douzieme annee</option>
					<option >terminale</option>
				</select>
				<input type="submit" name="envoyer" class="envoyer" value="Rechercher">
			</form>
		</div>
	</div>
</div>


<a name="visite"></a>
<div class="visite-global">
	<div class="visite-titre">VISITE</div>
	<div class="visite-bas">
		<video src="video/videoecole.mp4" controls></video>
	</div>
</div>

<div class="goto-top">
	<a href="#haut"><i class="fas fa-arrow-up"></i></a>
</div>

<div class="pied-de-page">
	<div class="pied-de-page-haut">
		<div class="titre-et-onglets">
			<div class="titre">FORMATION</div>
			<ul>
				<li>
					<a href="#formation">Primaire</a><br>
					<a href="#formation">College</a><br>
					<a href="#formation">Lycee</a>
				</li>
			</ul>
		</div>

		<div class="titre-et-onglets">
			<div class="titre">A PROPOS DE NOUS</div>
			<ul>
				<li>
					<a href="#visite">Visiter ASSIA</a><br>
					<a href="">Conditions D'utilisations</a><br>
					<a href="">Termes et Conditions</a>
				</li>
			</ul>
		</div>
		<a name="contact"></a>
		<div class="titre-et-onglets">
			<div class="titre">NOUS CONTACTER</div>
			<ul>
				<li>
					<a href="">Facebook</a><br>
					<a href="">Twitter</a><br>
					<a href="">Instagram</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="devise">
		<h3 class="rouge">TRAVAIL</h3>
		<h3 class="jaune">JUSTICE</h3>
		<h3 class="vert">SOLIDARITE</h3>
	</div>
	<div class="message-developpeur">Fait avec <i class="fas fa-heart"></i> par SOUARE TECHNOLOGIES</div>
</div>

	</div>
<!--  Glidejs Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script> 

<script src="Js/defile.js"></script>
<script src="https://getchat.app/assets/js/min/getchatapp.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var gcaMain = new GetChatApp({
    'mobileNumber' : '+224625518250',
    'titleMessage' : '👋 Contactez nous ',
    'welcomeMessage': 'Salut que pouvons-nous faire pour vous?',
    'position' : 'left'
 
  });
});
</script>
<!-- <script src="js/principal.js"></script> -->
<!--<script src="jq/jquery.min.js"></script>
<script src="jq/ouvreferme.js"></script> -->
</body>
</html>