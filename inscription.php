<html>
	<head>
		<title>Devis'me - Espace client</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.php"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			 
			<div class="grostitre">Inscription</div>
			<br/>
			<div class="container" id="wrap">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form action="do_inscription.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Créer votre compte client</legend>
						<h4>C'est gratuit, et ce pour toujours.</h4>
						<div class="row">
							<div class="col-xs-6 col-md-6">
								<input type="text" name="nom" class="form-control input-lg" placeholder="Nom"  />                        
							</div>
							<div class="col-xs-6 col-md-6">
								<input type="text" name="prenom" class="form-control input-lg" placeholder="Prénom"  />                       
							</div>
						</div>
							<input type="text" name="login" class="form-control input-lg" id="login" placeholder="Votre login (à conserver précieusement)"  />
							<input type="text" name="email" class="form-control input-lg" id="email" placeholder="Votre Email"  />
							<input type="password" name="mdp" class="form-control input-lg" placeholder="Votre mot de passe (à conserver précieusement)"  />
							<input type="password" name="mdp2" value="" class="form-control input-lg" placeholder="Confirmer votre mot de passe"  />                    
						
						<label>Sexe : </label>               
							<label class="radio-inline"><input type="radio" name="sexe" value="Monsieur" id=male /> Masculin</label>
							<label class="radio-inline"><input type="radio" name="sexe" value="Madame" id=female />Féminin</label>
							<br />
						<span class="help-block">En validant vous acceptez nos termes et conditions.</span>
						<button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Créer mon compte</button>
					</form>          
				</div>
				</div>            
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
			