<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8/" >
 <title>Ajouter un Medecin</title>
</head>
 <body>


 	<form method="POST" action="inserer.php"> <fieldset>
 	 <legend>	<h2>Inscrivez-vous</h2></legend>
 		<table>
 			<tr>
 				<td><label class="lab" for="username">UserName</label></td><td><input type="text" name="username" class="inp" id="username" placeholder="Votre nom utilisateur"></td>
 			</tr>
 			<tr>
 				<td><label class="lab" for="password">Password</label></td><td><input type="password" name="password" class="inp" id="password" placeholder="Mot de Passe"></td>
 			</tr>
 			
 			<tr>
 				<td><label class="lab" for="nomME">Nom</label></td><td><input type="text" name="nomME" class="inp" id="nomU" placeholder="Votre Nom"></td>
 			</tr>
 			<tr>
 				<td><label class="lab" for="prenomME">Prenom</label></td><td><input type="text" name="prenomME" class="inp" id="prenomME" placeholder="Votre Prenom "></td>
 			</tr>
 			<tr>
 				<td><label class="lab" for="date">Date de Naissance</label></td><td><input type="date" name="naissance" class="inp" id="date"></td>
 			</tr>
 			<tr><td><label for="niveau">Niveau</label> </td>  
   <td> <select name="niveau" class="niveau" id="niveau">   
 
    <option class="a2" value="A2">A2</option>     
    <option class="bac" value="Baccalaureat">Baccalaureat</option> 
     <option class="master" value="Master">Master</option>
      <option class="Doctorat" value="Doctorat">Doctorat</option></select> </td>
 </tr>

 		</table>

</fieldset>
<input type="submit" name="ajouter" value="Inscrivez-vous"/> <input type="submit" name="annuler" value="Annuler" />

 	</form>
 </body>
</html>