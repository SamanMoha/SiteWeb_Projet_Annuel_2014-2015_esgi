<?php
include("config.php");

//récuperation des données du formulaire
$nom=mysql_real_escape_string($_POST['nom']);
$prenom=mysql_real_escape_string($_POST['prenom']);
$email=mysql_real_escape_string($_POST['email']);
$login=mysql_real_escape_string($_POST['login']);
$mdp=mysql_real_escape_string($_POST['mdp']);
$MdpMd5 = md5($mdp);
$sexe=mysql_real_escape_string($_POST['sexe']);

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['sexe']))
{
	$sql="INSERT INTO `Devisme`.`Client` VALUES(NULL,'$sexe','$nom','$prenom','$email','$login','$MdpMd5')";
	$pdo->query($sql);

     /*$to = $email;
     $subject = 'Bienvenue chez Devisme !';
     $message = 'Bonjour,'.$prenom. "\r\n" .
     'Devisme vous souhaite la bienvenue.'. "\r\n" .
     'Veuillez conserver vos identifiants suivant, qui vous permettront de vous connectez à votre espace personnel.'. "\r\n" .
     'Merci de nous faire confiance.'."\r\n" .
     'Cordialement,'."\r\n" .
     'l\'équipe Devis\'me.';
     $headers = 'From: webmaster@devisme.com' . "\r\n" .
     'Reply-To: webmaster@devisme.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to,$subject,$message,$headers);*/
?>
<script language="javascript"> 
  alert("Bienvenue, votre inscription a bien été pris en compte. Veuillez bien conserver vos identifiants ! Vous pouvez maintenant accéder à votre compte personnel." ); 
  document.location.replace("client.php" ); 
</script>
<?php
}
else{
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le nom est-il rempli ?
    if(empty($_POST['nom']))
    {
	  $message=('Veuillez indiquer votre nom svp !'); 
    }
      // Le prenom est-il rempli ?
      elseif(empty($_POST['prenom']))
    {
      $message=('Veuillez indiquer votre prenom svp !'); 
    }
	  // Le email est-il rempli ?
      elseif(empty($_POST['email']))
    {
      $message=('Veuillez indiquer votre email svp !'); 
    }
	  // Le login est-il rempli ?
	  elseif(empty($_POST['login']))
    {
      $message=('Veuillez indiquer votre login svp !');  
    }
	  elseif(empty($_POST['mdp']))
    {
      $message=('Veuillez indiquer votre mot de passe svp !');  
    }
	  elseif(empty($_POST['mdp2']))
    {
      $message=('Veuillez confirmer votre mot de passe svp !'); 
    }
	  elseif(empty($_POST['sexe']))
    {
      $message=('Veuillez indiquer votre sexe svp !');  
    }
	  elseif($_POST['mdp'] != $_POST['mdp2'])
    {
      $message=('Erreur: Vos mots de passe ne sont pas identiques !'); 
    } 
  }
?>
<script language="javascript"> 
  alert("<?php echo $message; ?>" ); 
  document.location.replace("inscription.php" ); 
</script>
<?php
}
?>