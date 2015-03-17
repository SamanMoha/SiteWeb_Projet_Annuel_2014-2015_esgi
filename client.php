<html>

	<head>
		<title>Devis'me - Espace client</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.html"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			 
			<div class="grostitre">Espace client</div>
			<br/>
				
			<div class="container" style="margin-top:40px">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong> Identifiez-vous</strong>
							</div>
							<div class="panel-body">
								<form role="form" action="#" method="POST">
									<fieldset>
										<div class="row">
											<div class="center-block">
												<img class="profile-img"
													src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12 col-md-10  col-md-offset-1 ">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="glyphicon glyphicon-user"></i>
														</span> 
														<input class="form-control" placeholder="Pseudo" name="loginname" type="text" autofocus>
													</div>
												</div>
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="glyphicon glyphicon-lock"></i>
														</span>
														<input class="form-control" placeholder="Mot de passe" name="password" type="password" value="">
													</div>
												</div>
												<div class="form-group">
													<input type="submit" class="btn btn-lg btn-primary btn-block" value="Connexion">
												</div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="panel-footer ">
								Vous n'avez pas de compte ? <a href="inscription.html" onClick=""> Créer un compte </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
