<html>
	<head>
		<title>Devis'me - Catalogue</title>
		
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" /> <!--insertion d'un image dans la barre de navigation  -->
		<link href="style_bis.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS_bis -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css"> <!-- Importation CSS -->
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"> <!-- Information sur lécriture -->
	</head>

	<body>
		<div id="tete"><?php include("entete.php"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="grostitre">Catalogue</div>
			<br/><br/>
			<div class="container">
				<div class="row">
					<h1>Découvrez</h1><h3>la liste de nos matériaux proposés.</h3>
					<br/>
					<div id="no-more-tables">
						<table class="col-md-12 table-bordered table-striped table-condensed cf">
							<thead class="cf">
								<tr>
									<th>Nom</th>
									<th>Description</th>
									<th>Prix/m²</th>
									<th>Photo</th>
								</tr>
							</thead>
							<tbody>
								<?php include("do_catalogue.php"); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>
