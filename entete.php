<?php
include('config.php');
?>
<html>
	<body>
		<nav class="navbar navbar-default" role="navigation">
				  <div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand navbar-brand-centered"><a href="index.php">Devis'Me</a></div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-brand-centered">
						  <ul class="nav navbar-nav">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="devis.php">Application</a></li>
							<li><a href="catalogue.php">Catalogue</a></li>
						  </ul>
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="contact.php">Contact</a></li>
							<li><a href="plugin.php">Gestion plug-in</a></li>	
							<?php if(isset($_SESSION['login']))
							{
							?>
							<li><a href="Personnel.php">Espace personnel</a></li>
							<li><a href="do_connexion.php">Déconnexion</a></li>
							<?php 
							}
							else
							{ ?> 
							<li><a href="client.php">Connexion</a></li>
							<?php
							}
							?>
						  </ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</body>
</html>
