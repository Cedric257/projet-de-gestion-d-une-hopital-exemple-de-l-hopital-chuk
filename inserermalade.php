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
//ajout
$mess="";
$ma=@$_POST['Matricule'];
$nom=@$_POST['NomM'];
$prenom=@$_POST['PrenomM'];
$Province=@$_POST['Province'];
$Commune=@$_POST['Commune'];
$Colline=@$_POST['Colline'];
$date=@$_POST['DatedeNaissance'];
$tel=@$_POST['Telephone'];
$maladie=@$_POST['Maladie'];
if(isset($_POST['bajouter'])){
$exe1=mysqli_query($conn,"insert into malade values('$ma','$nom','$prenom','$Province','$Commune','$Colline','$date','$tel','$maladie')");
if($exe1){
   $mess="Ajout réussie !!";
   include'index.php';
}
else
   $mess="Echec ajout !!";
}

?>
<?php 
//suppression
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from malade where Matricule='$ma'");
if($exe2){
   $mess="Suppréssion réussie !!";
   include'index.php';
}
else
   $mess="Echec suppréssion !!";
}

?>
<?php 
//modifier
if(isset($_POST['bmodif'])){
$exe3=mysqli_query($conn,"update malade set Matricule='$ma',NomM='$nom',PrenomM='$prenom',Province='$Province',Commune='$Commune',Colline='$Colline',DatedeNaissance='$date',Telephone='$tel',Maladie='$maladie' where Matricule='$ma'");
if($exe3){
   $mess="Modification réussie !!";
   include'index.php';}

else
   $mess="Echec modification !!";
}
?>
