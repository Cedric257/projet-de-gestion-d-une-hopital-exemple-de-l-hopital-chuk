 <h2>La liste des Medecins de CHUC</h2>
 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestionchuc";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
?>

 <?php 
	$rq=mysqli_query($conn,"select * from medecin");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>NomME</th><th>PrenomME</th><th>Niveau</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	//$codema=$row['Matricule'];
	$codenom=$row['NomME'];
	$codeprenom=$row['PrenomME'];
	$codeniv=$row['Niveau'];
	//$codecommune=$row['Commune'];
	//$codecolline=$row['Colline'];
	//$codedate=$row['DatedeNaissance'];
	//$codetel=$row['Telephone'];
    //$codemaladie=$row['Maladie'];
	print'<tr>';
	//print'<td>';
	//     echo $codema;
	//print'</td>';
	
	
	print'<td>';
	     echo 	$codenom;
	print'</td>';
	
		print'<td>';
	     echo 	$codeprenom;
	print'</td>';
	print'<td>';
	     echo $codeniv;
	print'</td>';
	
	
	//print'<td>';
	//     echo 	$codecommune;
	//print'</td>';
	
	//	print'<td>';
	//     echo 	$codecolline;
	//print'</td>';
	//print'<td>';
	//     echo $codedate;
	//print'</td>';
	
	
	//print'<td>';
	//     echo 	$codetel;
	//print'</td>';
	
	//	print'<td>';
	//     echo 	$codemaladie;
	//print'</td>';
	print'</tr>';
		}
	print'</table >';
print'</div>';

	?>
	
	<input type="submit" name="retour" value="Retourner a la page d'accueil" class="bouton" />
</br> </br>
<?php
if(ISSET($_POST["retour"])){

header('location:index.php');
}
?>