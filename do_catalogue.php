<?php
include("config.php");

	$stmt = $pdo->prepare("SELECT * FROM Materiaux");   
	$stmt->execute();  
	while (($req = $stmt->fetch())!=false) { 
	?>
		<tr>
			<td><?php echo $req[1]?></td>
			<td><?php echo $req[2]?></td>
			<td><?php echo $req[3]?> €</td>
			<td><img src= " <?php echo $req[4]?> " width="200" height="100"></td>
		</tr>
<?php
	}
?>