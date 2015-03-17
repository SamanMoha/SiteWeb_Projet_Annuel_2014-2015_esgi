<?php
include("config.php");

//Si lutilisateur est connecte, on le deconecte
if(isset($_SESSION['login']))
{
    //On le deconecte en supprimant simplement les sessions username et userid
    unset($_SESSION['login']);
	session_destroy();
?>
	<script language="javascript"> 
	alert("Vous avez bien été déconnecté." ); 
	document.location.replace("index.php" ); 
	</script>
<?php
}
else
{
	if(!empty($_POST['login']) && !empty($_POST['mdp'])) 
	{
		$login=mysql_real_escape_string($_POST['login']);
		$mdp=mysql_real_escape_string($_POST['mdp']);
		$MdpMd5 = md5($mdp); //On script le mot de passe
		//echo($login." ".$mdp." ".$MdpMd5);
		
		//$login="firstA";
		//$MdpMd5 = "098f6bcd4621d373cade4e832627b4f6"; 
		$stmt = $pdo->prepare("SELECT * FROM Client WHERE loginClient = ?");
		$stmt->bindParam(1, $login);   
		$stmt->execute();         
		while (($req = $stmt->fetch())!=false) {      
			//echo $req[0]." ". $req[1]." ".$req[2]." ".$req[3]." ".$req[4]."<br>";
			//echo "*";
			$nom=$req[2];
			$prenom=$req[3];
			$mail=$req[4];
			}
		$nbLignes = count($req);
		//echo "Nb lignes : $nbLignes";
		//$nbLignes = count($req);
		
		if($nbLignes == 1)
		{
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['nom']= $nom;
			$_SESSION['prenom']=$prenom;
			$_SESSION['email']=$mail;
	?>
		   <script language="javascript"> 
		   alert("Connexion réussi. Vous allez être redirigé vers votre espace personnel." ); 
		   document.location.replace("Personnel.php" ); 
		   </script>
	<?php
		} 
		else {
	?>
	   <script language="javascript"> 
	   alert("Mauvais login / password. Merci de recommencer" ); 
	   document.location.replace("client.php" ); 
	   </script>
	<?php
		}
	}
	else
	{
	?>
		<script language="javascript"> 
		alert("Attention, veuillez remplir tous les champs." ); 
		//document.location.replace("client.php" ); 
		</script>
	<?php
	}
}
	?>