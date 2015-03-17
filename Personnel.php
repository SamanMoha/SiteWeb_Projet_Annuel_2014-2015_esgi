<?php
$lien="profil.php";
?>
<html>
	<head>
		<title>Devis'me - Espace personnel</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.php"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="grostitre">Espace personnel</div>
			<br/><br/>
			<div class="well">
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" onclick="<?php $lien = "profil.php"; ?>" >Profil</a></li>
				  <li><a data-toggle="tab" onclick="<?php $lien = "motDePasse.html"; ?>">Mot de passe</a></li>
				</ul><br/>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="home">
					<form id="tab">
						<label>Login</label>
							<input type="text" value="<?php echo $_SESSION['login'] ?>" class="input-xlarge">
						<label>Nom</label>
							<input type="text" value="<?php echo $_SESSION['nom'] ?>" class="input-xlarge">
						<label>Prénom</label>
							<input type="text" value="<?php echo $_SESSION['prenom'] ?>" class="input-xlarge">
						<label>Email</label>
							<input type="text" value="<?php echo $_SESSION['email'] ?>" class="input-xlarge">
						<div>
							<br/><button class="btn btn-primary">Modifier</button>
						</div>
					</form>
				</div>
			</div>
				<?php include($lien);?>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
