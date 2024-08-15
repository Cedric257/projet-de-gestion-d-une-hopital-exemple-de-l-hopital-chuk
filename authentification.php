  



<?php

$bd=new PDO ('mysql:host=localhost;dbname=gestionchuc','root','');
if($bd==null){echo"Echec de connexion";}
else
{
 if(isset($_POST["bConnexion"])){
   //echo"Bravo vous vous etes connectes"; 
 
$user=$_POST["login"];
$pwd=$_POST["password"];
$req = $bd->prepare("select NomME,PrenomME from gestionchuc.medecin where UserName=:u and Password=:p");
$req->execute(array("u"=>$user,"p"=>$pwd));
   $donnee=$req->fetch();
   if($donnee) {
      $nom=$donnee["NomME"];
      $prenom = $donnee["PrenomME"];
      echo "Bravo vous etes connectes"."</br>";
      echo "Votre nom est:"." ".$nom." ".$prenom;
      header("location:index.php?action=ajoutermalade");
   }
   else
      {echo "Nom utilisateur ou Mot de passe incorrect";
include"index.php";



   }
}


else if(ISSET($_POST["bSinscrire"])){

header('location:index.php?action=ajoutermedecin');
   
}
}

?>