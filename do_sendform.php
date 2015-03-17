<?php
//récuperation des données
$nom=$_POST['name'];
$email=$_POST['email'];
$sujet=$_POST['subject'];
$message=$_POST['message'];

if(empty($nom) AND empty($email) AND empty($sujet) AND empty($contenu))
{
echo "Veuillez remplir tous les champs !";
}
Else 
{
//connexion au serveur
$db=mysql_connect("localhost","root","123soleil") or die ("Erreur de connexion");
//connexion à la base de donnée
mysql_select_db ("Devisme") or die ("Erreur de connexion");

$sql="INSERT INTO `Devisme`.`Message` VALUES (NULL,'$nom','$email','$sujet','$contenu')";
//Exécution de la requête
$requete=mysql_query($sql) or die ("les données saisies ne sont pas valides...");
?>
<script language="javascript"> 
  alert("Votre message à bien était envoyé" ); 
  document.location.replace("index.php" ); 
</script>
<?php
}
?>


