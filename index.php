<html>

	<head>
		<title>Devis'me - Accueil</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.html"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="grostitre">Accueil</div>
			
			<!--<img src="img/info.png" class="img-polaroid">-->
			
			<div class="container">
				<div class="row">
					<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
						<ul class="event-list">
							<li>
								<time datetime="2015-02-17">
									<span class="day">17</span>
									<span class="month">Fev</span>
									<span class="year">2015</span>
									<span class="time">Afternoon</span>
								</time>
								<img alt="Independence Day" src="http://www.avocat-as.com/gifs/technologies.jpg" />
								<div class="info">
									<h2 class="title">Projet Annuel</h2>
									<p class="desc">Etape 3</p>
								</div>
								<div class="social">
									<ul>
										<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
										<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
										<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
									</ul>
								</div>
							</li>
							<li>
								<time datetime="2015-03-09">
									<span class="day">9</span>
									<span class="month">Mars</span>
									<span class="year">2015</span>
									<span class="time">8:00 AM</span>
								</time>
								<img alt="My 24th Birthday!" src="http://www.cs4technologies.com/devc/images/cleenmain.jpg" />
								<div class="info">
									<h2 class="title">Vacances</h2>
									<p class="desc">1 semaine de repos mérité</p>
								</div>
								<div class="social">
									<ul>
										<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
										<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
										<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<p>Etudiants en 3éme année d'Architecture des logiciels, à l'école <a href="http://www.esgi.fr"><abbr title="Ecole Supérieur des Génies de l'Informatique">ESGI</abbr></a>.
			<br/> Nous sommes ammené à créer une application Java afin de valider notre diplôme. Certaines règles ont été appliqués à ce projet:
			<br><li>Cette application devra comporter un système de gestion de plugings.
			<br/><li>Elle devra posséder une interface graphique qui puisse communiquer avec l'utilisateur (IHM).
			<br/><li>...
			<br/>
			<p><br/>
		
			
			<div class="row">
				<div class="col-sm-6 col-md-4">
				<!--<div class="thumbnail">
					<div class="caption">
						<h3>Nouveau: l'application Devis'Me</h3>
						<p>On parle d'une nouvelle applications ? 
						<br/> Oui, oui c'est ici ! Vous aurez bientôt le privilége de tester notre toute nouvelle application Devis'Me qui est en cours de développement actuellement.</p>
						<br/>
						<p><a class="bouton" href="devis.html" role="button">En savoir plus</a></p>
					</div>
				</div>-->
				
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">Participant du projet Java - 3I AL - 2014/2015</div>
					<!-- Table -->
					<table class="table">
						<tr>
							<th>Nom</th>
							<th>Prénom</th>
						</tr>
						<tr>
							<td>Mohammad</td>
							<td>Saman</td>
						</tr>
						<tr>
							<td>Vivor</td>
							<td>Kévin</td>
						</tr>
						<tr>
							<td>LeBerre</td>
							<td>Antoine</td>
						</tr>
					</table>
				</div>
				</div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
