 <?php
$bd=new PDO ('mysql:host=localhost;dbname=gestionchuc','root','');
if($bd!=null){
	if (isset($_POST["ajouter"])) 
	{
		$user=$_POST['username'];
		$pwd=$_POST['password'];
		$nom=$_POST['nomME'];
		$prenom=$_POST['prenomME'];
		$date=$_POST['naissance'];
		$niv=$_POST['niveau'];


	$req = $bd->prepare('insert into gestionchuc.medecin(UserName,Password,NomME,PrenomME,DateNaissance,Niveau) values(:u,:p,:n,:pre,:nai,:ni)');
	$req->bindParam(':u',$user);
	$req->bindParam(':p',$pwd);
	$req->bindParam(':n',$nom);
	$req->bindParam(':pre',$prenom);
	$req->bindParam(':nai',$date);
	$req->bindParam(':ni',$niv);
	$req->execute();
	$req->closeCursor();
	echo "Vous etes maintenant dans la liste des Utilisateur!" ."</br>";
	include'index.php';

	}	
	else if(isset($_POST["annuler"])){

    include'index.php';
  }
else{echo"Echec de connexion";}
}

?>