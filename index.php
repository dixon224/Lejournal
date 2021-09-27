<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Le Journal</title>
	<link rel="stylesheet" type="text/css" href="Css/index.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- GlideJS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
</head>
<body>
	<div class="carrevertical">
		<div class="titreducarrevertical">
		<h3>LE JOURNAL</h3>
		</div>
		<div class="fermeture" onclick="ferme();">
			<i class="fas fa-times"></i>
		</div>
	</div>
	<a name="haut"></a>
	<div class="identifier">
		<h2 class="inscrire"><li><a href="">Inscription</a></li></h2>
		<h2 class="reinscrire"><li><a href="">Reinscription</a></li></h2>
		<h2 class="connecter"><li><a href="">Connection</a></li></h2>
	</div>
<div class="entete">
	<div class="titre">
		<h3>LE JOURNAL</h3>
	</div>
	
	<div class="bar" onclick="ouvre();">
		<i class="fas fa-bars"></i>
	</div>
	<div class="navigation">
		<ul class="nav">
			<li class="lien1">
				<a href="">
					Accueil
				</a>
			</li>
			<li class="lien2">
				<a href="">
					Assia Ecole
				</a>
			</li>
			<li class="lien3">
				<a href="">
					Formation
				</a>
			</li>
			<li class="lien4">
				<a href="">
					Paiements
				</a>
			</li>
			<li class="lien5">
				<a href="">
					Contact
				</a>
			</li>
		</ul>
	</div>
	<div class="recherche">
		<form method="post">
			<input type="text" name="rec" placeholder="Rechercher des articles" required class="rec">
			<input type="submit" name="envoyer" value="Rechercher" class="env">
		</form>
	</div> 
</div>
<!-- Hero -->
    <section class="hero">
      <div class="glide glide1" id="glide1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides glide__hero">
            <li class="glide__slide">
              <div class="banner">
                <div class="banner-content">
                  <!-- <span>Nouvelle Inspiration 2021</span> -->
                  <h1>Bienvenue à ASSIA ECOLE!</h1>
                  <h3>ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                </div>
                <img src="img/ecole.jpg" class="special_01" alt="">
              </div>
            </li>

            <li class="glide__slide">
              <div class="banner banner1">
                <div class="banner-content">
                   <!-- <span>Nouvelle Inspiration 2021</span> -->
                  <h1>Bonheur pour les enfants!</h1>
                  <h3>A ASSIA ECOLE vos enfants sont traités comme des rois dans la joie d'apprendre la rigueur et sans aucun doute la reussite</h3>
                </div>
                <img src="img/enfant.png" class="special_02" alt="">
              </div>
            </li>

            <li class="glide__slide">
              <div class="banner">
                <div class="banner-content">
                  <!-- <span>Nouvelle Inspiration 2021</span> -->
                  <h1>Bonheur et Reussite !</h1>
                  <h3>Un medecin qui se trompe c'est un patient qui meurt mais un enseignant qui se trompe c'est toute une génération qui échoue.
                  Confiez nous vos enfants et demain ils seront souriants</h3>
                </div>
                <img src="img/biblio.jpg" class="special_03" alt="">
              </div>
            </li>

          </ul>
        </div>

        <!-- Arrows -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fas fa-arrow-right"></i></button>
        </div>
      </div>
    </section>

   <div class="contenu">
    	<h2 class="titre classe-examen">
			CLASSES D'EXAMEN
	</h2>
	<div class="examen">
		<div class="text">
			<!-- <img src="img/enfant1.jpg"> -->
			<h1>6<sup>ième</sup>Année</h1>
				<p>
					ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			 <br>
		<a href="#"><button class="voirplus">Voir Plus</button></a>
		</div>
		
	</div>
	<div class="brevet">
		<div class="text">
			<!-- <img src="img/enfant1.jpg"> -->
			<h1>10<sup>ième</sup>Année</h1>
				<p>
					ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			 <br>
		<a href="#"><button class="voirplus">Voir Plus</button></a>
		</div>
	</div>
	<div class="bac">
		<div class="text">
			<!-- <img src="img/enfant1.jpg"> -->
			<h1>Terminale</h1>
				<p>
					ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			 <br>
		<a href="#"><button class="voirplus">Voir Plus</button></a>
		</div>
    </div>


    

  	<section class="hero formation">
  		<h2 class="titre">FORMATION</h2>
      <div class="glide glide2" id="glide2">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides glide__hero">
          	 <li class="glide__slide">
              <div class="banner form">
                <div class="banner-content contenu-formation">
                  <!-- <span>Nouvelle Inspiration 2021</span> -->
                  <h1>Primaire!</h1>
                  <h3>ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                  <a href="#"><button class="voirplus">Voir Plus</button></a>
                </div>
                <!-- <img src="img/enfant2.jpg" class="special_01" alt=""> -->
                </div>
            </li>
             <li class="glide__slide">
              <div class="banner form">
                <div class="banner-content contenu-formation">
                  <!-- <span>Nouvelle Inspiration 2021</span> -->
                  <h1>College!</h1>
                  <h3>ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                  <a href="#"><button class="voirplus">Voir Plus</button></a>
                </div>
                <!-- <img src="img/ecole.jpg" class="special_01" alt=""> -->
              </div>
            </li>
             <li class="glide__slide">
              <div class="banner form">
                <div class="banner-content contenu-formation">
                  <!-- <span>Nouvelle Inspiration 2021</span> -->
                  <h1>LYCEE!</h1>
                  <h3>ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                  <a href="#"><button class="voirplus">Voir Plus</button></a>
                </div>
                <!-- <img src="img/ecole.jpg" class="special_01" alt=""> -->
              </div>
            </li>
          	</ul>
          </div>
          <!-- Arrows -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fas fa-arrow-right"></i></button>
        </div>
      </div>
  </section>

  <div class="affichage-service">
  	<h2 class="titre">SERVICES</h2>
  <div class="service-formation">
  	<h2>FORMATION</h2>
  </div>

  <div class="service-education">
  	<h2>EDUCATION</h2>
  </div>

  <div class="service-loisir">
  	<h2>LOISIR</h2>
  </div>
  </div>

  <div class="avis">
  	<h2 class="titre">AVIS</h2>
  	<div class="glide glide3" id="glide3">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides glide__hero">
          	 <li class="glide__slide">
          	 	<div class="image-avis">
          	 		<img src="img/banner_1.png">
          	 		<h2>NOM</h2>
          	 		<h3>ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          	 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          	 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
          	 	</div>
          	 </li>
          	 <li class="glide__slide">
          	 	<div class="image-avis">
          	 		<img src="img/banner_2.png">
          	 		<h2>NOM</h2>
          	 		<h3>ipso Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          	 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          	 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
          	 	</div>
          	 </li>
          	</ul>
          </div>
           <!-- Arrows -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fas fa-arrow-right"></i></button>
        </div>
      </div>
  </div>

  <h2 class="titre visite-titre">VISITE</h2>
  <div class="visite">
  	<video controls="controls"	src="video/videoecole.mp4"></video>
  </div>


  <div class="haut lien">
  	<a href="#haut"><i class="fas fa-arrow-up"></i></a>
  </div>

  <div class="pieddepage">
	<div class="liendegauche">
		<h3 class="sous-titre-lien-gauche">FORMATION</h3>
		<ul>
			<li class="lien5">
			<a href="">Primaire</a>
			</li>
			<li class="lien6">
			<a href="">College</a>
			</li>
			<li class="lien7">
			<a href="">Lycée</a>
			</li>
		</ul>
	</div>

	<div class="liendumilieu">
		<h3 class="sous-titre-lien-milieu">A PROPOS DE NOUS</h3>
		<ul>
			<li class="lien9">
			<a href="">VISITER ASSIA</a>
			</li>
			<li class="lien10">
			<a href="">POLITIQUES D'UTILISATION</a>
			</li>
			<li class="lien11">
			<a href="">TERMES & CONDITIONS</a>
			</li>
		</ul>
	</div>
	<div class="groupe2desliensdumilieu">
		<h3 class="sous-titre-lien-milieu-2">PAIEMENTS</h3>
		<ul>
			<li class="lien13">
			<a href="">ORANGE MONEY</a>
			</li>
			<li class="lien14">
			<a href="">MOBILE MONEY</a>
			</li>
			<li class="lien15">
			<a href="">CARTE BANCAIRE</a>
			</li>
		</ul>
	</div>

	<div class="liendedroite">
		<h3 class="sous-titre-lien-droite">CONTACTS</h3>
		<ul>
			<li class="lien17">
			<a href="">Facebook</a>
			</li>
			<li class="lien18">
			<a href="">Twitter</a>
			</li>
			<li class="lien19">
			<a href="">Instagram</a>
			</li>
			<li class="lien20">
			<a>+224625518250</a>
			</li>
		</ul>
	</div>
	<div class="devise">
		<h4 class="travail">TRAVAIL</h4>
		<h4 class="justice">JUSTICE</h4>
		<h4 class="solidarite">SOLIDARITE</h4>
	</div>
	<h4 class="copyright">&copy;2021 Copyright Tous Droits Reservés Fait avec <i class="fas fa-heart"></i> Par SOUARE-TECHNOLOGIES</h4>
</div>

</div>

<!--  Glidejs Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script> 

<!-- <script src="js/defile.js"></script>
<script src="js/principal.js"></script> -->
<!--<script src="jq/jquery.min.js"></script>
<script src="jq/ouvreferme.js"></script> -->
</body>
</html>