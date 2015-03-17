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
		<div id="tete"><?php include("entete.html"); ?></div><!-- en tête de la page -->
		<div id="cadre"> <!-- corps de la page  -->
			<div class="grostitre">Espace personnel</div>
			<br/><br/>
			<div class="well">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
				  <li><a href="#profile" data-toggle="tab">Password</a></li>
				</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="home">
					<form id="tab">
						<label>Username</label>
							<input type="text" value="jsmith" class="input-xlarge">
						<label>First Name</label>
							<input type="text" value="John" class="input-xlarge">
						<label>Last Name</label>
							<input type="text" value="Smith" class="input-xlarge">
						<label>Email</label>
							<input type="text" value="jsmith@yourcompany.com" class="input-xlarge">
						<label>Address</label>
							<textarea value="Smith" rows="3" class="input-xlarge">2817 S 49th Apt 314 San Jose, CA 95101 </textarea>
						<label>Time Zone</label>
							<select name="DropDownTimezone" id="DropDownTimezone" class="input-xlarge">
							  <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
							  <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
							  <option value="-9.0">(GMT -9:00) Alaska</option>
							  <option selected="selected" value="-8.0">(GMT -8:00) Pacific Time (US & Canada)</option>
							  <option value="-7.0">(GMT -7:00) Mountain Time (US & Canada)</option>
							</select>
						<div>
							<button class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			<div class="tab-pane fade" id="profile">
				<form id="tab2">
					<label>New Password</label>
						<input type="password" class="input-xlarge">
					<div>
						<button class="btn btn-primary">Update</button>
					</div>
				</form>
			  </div>
			</div>
		</div><br/>
		<div id="pied"><?php include("pied.html"); ?></div>
	</body>
</html>