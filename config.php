<?php

$dbname= '';
$host = '';
$user = '';
$password = '';

try {

//On demarre les sessions
session_start();

//On se connecte a la base de donnee
	$pdo	= new PDO('mysql:host='.$host .';dbname='.$dbname, $user, $password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");

}
catch (PDOException $e) {
    echo "<p>Erreur : " . $e->getMessage() . "</p>";
    exit();
}
?>