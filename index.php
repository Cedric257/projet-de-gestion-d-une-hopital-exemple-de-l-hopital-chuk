 <!DOCTYPE html>
<html>
<head>
  <title> Hopital Universitaire Roi Khaled - CHUC </title>
  <link rel="stylesheet" href="css/style1.css" />
</head>
<body>
  <header>
    <div id="titre"> HOPITAL UNIVERSITAIRE ROI KHALED DE KAMENGE</div>
    <div  class="dlogo"> 
	<table id="hopital">
	<tr>
       <td> <img src="images/logo1.PNG" width="150"  height="100" /> </td>
       <td width="800"  height="100">
	   <MARQUEE scrollamount="10" direction="left"  onmouseover="this.stop()" onmouseout="this.start()">
<img src="images/image2.PNG" width="180"  height="120"  />
<img src="images/image3.JPEG" width="180"  height="120"  />
<img src="images/image1.PNG" width="180"  height="120"  />
<img src="images/image4.PNG" width="180"  height="120"  />
<img src="images/image5.PNG" width="180"  height="120"  />
<img src="images/image6.PNG" width="180"  height="120"  />
<img src="images/image7.PNG" width="180"  height="120"  />
<img src="images/image8.PNG" width="180"  height="120"  />




	   </td>
	   </tr>
	   </table>
	  
    </div>
  </header>
  <nav class="nav">
    <div id= "menuP">
       <ul>
         <li> 
           <a class = "cmenu" href="" > Accueil</a>
           <ul> 
                <li> <a class ="smenu" href=" index.php?action=Presentation"> Pr&eacutesentation </a> </li>
                <li> <a  class ="smenu" href ="index.php?action=Medecin">M&eacutedecin</a></li>
                <li> <a  class ="smenu" href ="index.php?action=Malades">Malades</a></li>
            </ul>
         </li>
         <li> 
          <a class = "cmenu" href="" > Departement M&eacutedicaux</a>
            <ul> 
                <li> <a  class ="smenu" href="index.php?action=Pediatrie">Pediatrie </a> </li>
                <li> <a  class ="smenu" href="index.php?action=Laboratoire">Laboratoire</a> </li>
                <li> <a  class ="smenu" href ="index.php?action=Chirurgie">Chirurgie</a></li>
                <li> <a  class ="smenu" href="index.php?action=Specialistes">Specialistes</a> </li>
            </ul>
         </li>
         <li> 
           <a class = "cmenu" href="" >Oportunit&eacutes</a>
           <ul> 
               <li> <a  class ="smenu" href="index.php?action=Stages">Stages</a> </li>
               <li> <a  class ="smenu" href ="index.php?action=emploi">Offre d'emploi</a></li>
               <li> <a  class ="smenu" href="index.php?action=soumission">Offre &agrave; la soumission</a> </li>
               
           </ul>
         </li>
         <li> 
           <a class = "cmenu" href="" >Administration</a>
           <ul>
              <li> <a  class ="smenu" href ="index.php?action=connecter">Se Connecter </a></li>
           </ul>
         </li>
         <li> 
            <a class = "cmenu" href="" >Actualit&eacutes</a>
            <ul> 
               
                <li> <a  class ="smenu" href ="index.php?action=ajoutermedecin">S'inscrire </a></li>
                 <li> <a  class ="smenu" href="index.php?action=propos">&Agrave; Propos de</a> </li>
                <li> <a class="smenu" href="index.php?action=Quitter">Quitter</a></li>
            </ul>
         </li>
     </ul>
 </div>
 </nav>
 <p> </br> </br> </br> </p>
 
<section class="csection">
<div id="bmenuvertu">
<ul id="navigation">
  <li><a href="index.php?action=Pharmacie" >Pharmacie</a></li>
  <li><a href="index.php?action=Medecine" >Medecine interne</a></li>
  
  <li><a href="index.php?action=Gyneco-ostetrique" >Gyneco-ostetrique</a></li>
  
</ul>
 </div>
 <div class="contenu">
 <?php
 if(isset($_GET["action"]))
  include ($_GET["action"] . ".php");
 else
	 include("Presentation.php");
?>
</div>
</section>
<footer id="cfooter">
  <ul> 
    <li> <a  class ="smenu" href="index.php?action=contact">Nous contacter </a> </li>
    <li> <a  class ="smenu" href ="index.php?action=contact">Aide </a></li>
    <li class ="smenu"> Copyright CHUC_TP Groupe 1 </li>
  </ul>
</footer>
</body>
</html>

