<?php
if(!empty($_SESSION['login']))
{
?>
<script language="javascript">
	document.getElementById('lien').disabled= 'false';
</script>
<?php
}
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
		<div id="tete"><?php include("entete.php"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="grostitre">Gestion plug-in</div>
			<br/><br/>
			<br/><br/>
			<p>
				<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
				<i><b>Je vous rappelle que vous devez vous identifier en tant que client afin de pouvoir télécharger un plugin.</b></i>
			</p><br/>
			<div class="thumbnail">
				<div class="caption">
					<h3>Plugin dessin carré</h3>
					<p>Nouvelle fonctionnalité: ne vous cassez plus la tête à faire des carrés 
					<br/> Oui, oui c'est ici ! Vous aurez bientôt le privilége de tester notre toute nouvelle application Devis'Me qui est en cours de développement actuellement.</p>
					<br/>
					<button id="lien" type="button" class="btn btn-primary" disabled="true">
						<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Télécharger
					</button>
				</div>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<h3>Plugin dessin rond</h3>
					<p>Nouvelle fonctionnalité: ne vous cassez plus la tête à faire des ronds 
					<br/> Oui, oui c'est ici ! Vous aurez bientôt le privilége de tester notre toute nouvelle application Devis'Me qui est en cours de développement actuellement.</p>
					<br/>
					<button id="lien" type="button" class="btn btn-primary" disabled="true">
						<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Télécharger
					</button>
				</div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
