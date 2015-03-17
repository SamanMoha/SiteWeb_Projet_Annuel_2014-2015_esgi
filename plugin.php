<?php
	session_start();
?>
<html>

	<head>
		<title>Devis'me - Gestion plug-in</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.html"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="grostitre">Gestion plug-in</div>
			<br/><br/>
			<br/><br/>
			<div class="thumbnail">
				<div class="caption">
					<h3>Pluging dessin carré</h3>
					<p>Nouvelle fonctionnalité: ne vous cassez plus la tête à faire des carrés 
					<br/> Oui, oui c'est ici ! Vous aurez bientôt le privilége de tester notre toute nouvelle application Devis'Me qui est en cours de développement actuellement.</p>
					<br/>
					<p><span style="box-shadow: 0 0 3px 1px rgba(0,0,0,.35);" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-download-alt"></i> 
					Télécharger</span></p>
				</div>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<h3>Pluging dessin rond</h3>
					<p>Nouvelle fonctionnalité: ne vous cassez plus la tête à faire des ronds 
					<br/> Oui, oui c'est ici ! Vous aurez bientôt le privilége de tester notre toute nouvelle application Devis'Me qui est en cours de développement actuellement.</p>
					<br/>
					<p><span style="box-shadow: 0 0 3px 1px rgba(0,0,0,.35);" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-download-alt"></i> 
					Télécharger</span></p>
				</div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
