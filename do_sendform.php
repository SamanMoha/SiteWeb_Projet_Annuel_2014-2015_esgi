<?php
include("config.php");

//récuperation des données
$nom=$_POST['nom'];
$email=$_POST['email'];
$sujet=$_POST['subject'];
$message=$_POST['message'];


$sql="INSERT INTO `Devisme`.`Message` VALUES (NULL,'$nom','$email','$sujet','$message')";
$pdo->query($sql);
?>
<script language="javascript"> 
  alert("Votre message à bien était envoyé. Vous allez être redirigé vers la page d'Accueil" ); 
  document.location.replace("index.php" ); 
</script>