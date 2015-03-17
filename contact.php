<html>

	<head>
		<title>Devis'me - Contact</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.php"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="jumbotron jumbotron-sm">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-lg-12">
							<h1 class="h1">
								Contactez nous <small>N'hésitez plus</small></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="well well-sm">
							<form method="POST" action="do_sendform.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Nom</label>
										<input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom" required="required" />
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
											</span>
											<input type="email" name="email" class="form-control" id="email" placeholder="Votre email" required="required" />
										</div>
									</div>
									<div class="form-group">
										<label for="subject">
											Objet</label>
										<select id="subject" name="subject" class="form-control" required="required">
											<option value="na" selected="">Choisir votre objet:</option>
											<option value="service">Dépannage application</option>
											<option value="suggestions">Suggestions</option>
											<option value="product">Product Support</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Message</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
											placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Envoyer </button>
								</div>
							</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<form>
						<legend><span class="glyphicon glyphicon-globe"></span> Siége Social</legend>
						<address>
							<strong>Devis'Me</strong><br>
							225 Avenue Faubourg Saint-Antoine<br>
							75012, Paris <br>
							<abbr title="Téléphone">
								Tel:</abbr>
							+33 1 55 44 33 22
						</address>
						<address>
							<strong>Monsieur Vivor</strong><br>
							<a href="mailto:#">k.vivor@devisme.com</a>
						</address>
						</form>
					</div>
				</div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
